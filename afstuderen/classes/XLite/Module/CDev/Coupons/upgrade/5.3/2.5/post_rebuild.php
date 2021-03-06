<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function()
{
    /** @var XLite\Model\Order\Modifier $modifier */
    $modifier = \XLite\Core\Database::getRepo('XLite\Model\Order\Modifier')
        ->findOneByClass('\XLite\Module\CDev\Coupons\Logic\Order\Modifier\Discount');

    if ($modifier) {
        $modifier->setClass('XLite\Module\CDev\Coupons\Logic\Order\Modifier\Discount');
        $modifier->setWeight(200);

        \XLite\Core\Database::getEM()->flush();
    }
};
