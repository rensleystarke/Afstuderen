<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Console\Command\GenerateData;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use XLite\Console\Command\GenerateData\Generators\Product;
use XLite\Core\QuickData;

/**
 * Class GenerateProductsCommand
 * @package XLite\Console\Command\GenerateData
 */
class GenerateProductCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('generate:product')
            ->setDescription('Generate products')
            ->setHelp('Generates product entities with some related properties like attributes, options, images etc.')

            ->addArgument('category', InputArgument::REQUIRED, 'Category id')

            ->addOption('count', 'C', InputOption::VALUE_REQUIRED, 'Amount of products to generate (default value: 1)')

            ->addOption('nameSuffix', 's', InputOption::VALUE_REQUIRED, 'Name suffix')
            ->addOption('attributes', 'a', InputOption::VALUE_REQUIRED, 'Attributes per product')
            ->addOption('options', 'o', InputOption::VALUE_REQUIRED, 'Options per product')
            ->addOption('optionsValues', 'val', InputOption::VALUE_REQUIRED, 'Option values per product')
            ->addOption('productImages', 'i', InputOption::VALUE_REQUIRED, 'Images per product')
            ->addOption('wholesalePrices', 'w', InputOption::VALUE_REQUIRED, 'Wholesale prices per product');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Generating product');

        if ($io->confirm('Remove all existing products?', false)) {
            $io->write('Removing products');
            $this->clearProducts();
        }

        $suffix = $input->getOption('nameSuffix') ?: crc32(md5(time()));
        $io->note('Suffix: '. $suffix);

        $counts = [
            'count'            => $input->getOption('count') ?: 1,
            'attributes'       => $input->getOption('attributes') ?: 0,
            'options'          => $input->getOption('options') ?: 0,
            'optionsValues'    => $input->getOption('optionsValues') ?: 0,
            'productImages'    => $input->getOption('productImages') ?: 0,
            'wholesalePrices'  => $input->getOption('wholesalePrices') ?: 0,
        ];

        $io->section('Entities to generate (count)');
        $io->table([ 'name', 'value' ], array_map(null, array_keys($counts), array_values($counts)));

        /** @var \XLite\Model\Category $category */
        $category = \XLite\Core\Database::getRepo('XLite\Model\Category')->find(
            $input->getArgument('category')
        );

        $productsGenerated = 0;
        $batchSize = 20;

        $io->newLine();
        $io->writeln('<info>Generating products ... </info>');
        $progress = $io->createProgressBar($counts['count']);

        for ($i = 0; $i < $counts['count']; $i++) {
            $generator = new Product(
                $counts['attributes'],
                $counts['options'],
                $counts['optionsValues'],
                $counts['productImages'],
                $counts['wholesalePrices']
            );
            $product = $generator->generate($category, $suffix . '_' . $i);

            $progress->advance();

            if ($productsGenerated % $batchSize === 0) {
                \XLite\Core\Database::getEM()->flush();
                \XLite\Core\Database::getEM()->clear();
                $category = \XLite\Core\Database::getEM()->merge($category);
            }
            $productsGenerated++;
        }

        $progress->finish();
        $io->newLine(2);

        \XLite\Core\Database::getEM()->flush();
        \XLite\Core\Database::getEM()->clear();

        $io->newLine();
        $io->writeln('<info>Recalculating quick data ... </info>');
        $this->recalculateQuickData($io);
        $io->writeln('[ OK ]');

        $io->success('Finished');
    }

    protected function clearProducts()
    {
        \XLite\Core\Database::getRepo('XLite\Model\Product')->createPureQueryBuilder()
            ->delete('XLite\Model\Product', 'p')
            ->execute();

        \XLite\Core\Database::getEM()->flush();
        \XLite\Core\Database::getEM()->clear();
    }

    protected function recalculateQuickData(SymfonyStyle $io)
    {
        $quickData = \XLite\Core\QuickData::getInstance();
        $progress = $io->createProgressBar($quickData->countUnprocessed());
        $progress->display();

        do {
            $processed = $quickData->updateUnprocessedChunk(\XLite\Core\QuickData::CHUNK_LENGTH);
            if (0 < $processed) {
                \XLite\Core\Database::getEM()->clear();
            }
            $progress->advance($processed);

        } while (0 < $processed);
        $progress->finish();
    }
}
