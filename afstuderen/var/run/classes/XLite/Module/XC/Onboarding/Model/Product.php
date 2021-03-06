<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Onboarding\Model;

/**
 * Product
 *
 */
 class Product extends \XLite\Module\XC\ProductTags\Model\Product implements \XLite\Base\IDecorator
{
    /**
     * Flag, if the product participates in the sale
     *
     * @var boolean
     *
     * @Column (type="boolean")
     */
    protected $demo = false;

    /**
     * Get discount type
     *
     * @return string
     */
    public function isDemo()
    {
        return $this->demo;
    }

    /**
     * Set discountType
     *
     * @param boolean $value
     * @return Product
     */
    public function setDemo($value)
    {
        $this->demo = $value;
        return $this;
    }

    /**
     * Prepare entity before save data operation (only on update)
     *
     * @return void
     */
    public function dropDemoFlagOnUpdate()
    {
        if ($this->isDemo()) {
            $this->setDemo(false);
        }
    }
}
