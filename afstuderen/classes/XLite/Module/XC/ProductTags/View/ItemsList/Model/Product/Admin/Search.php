<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ProductTags\View\ItemsList\Model\Product\Admin;

/**
 * Search product
 */
class Search extends \XLite\View\ItemsList\Model\Product\Admin\Search implements \XLite\Base\IDecorator
{
    /**
     * Widget param names
     */
    const PARAM_BY_TAG = 'by_tag';

    // {{{ Search

    /**
     * Return search parameters.
     *
     * @return array
     */
    public static function getSearchParams()
    {
        $list = parent::getSearchParams();

        $list += array(
            static::PARAM_BY_TAG    => array(
                'condition'     => new \XLite\Model\SearchCondition\RepositoryHandler(
                    \XLite\Model\Repo\Product::P_BY_TAG
                ),
            )
        );

        return $list;
    }

    /**
     * Define widget parameters
     *
     * @return void
     */
    protected function defineWidgetParams()
    {
        parent::defineWidgetParams();

        $this->widgetParams += array(
            self::PARAM_BY_TAG => new \XLite\Model\WidgetParam\TypeString(
                'Search in tags',
                0
            ),
        );
    }
}
