<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\FormField\Input\Checkbox;

/**
 * Show/Hide FlipSwitch
 */
class ShowHide extends \XLite\View\FormField\Input\Checkbox\OnOff
{
    /**
     * Returns default param value
     *
     * @return string
     */
    protected function getDefaultOnLabel()
    {
        return 'Show';
    }

    /**
     * Returns default param value
     *
     * @return string
     */
    protected function getDefaultOffLabel()
    {
        return 'Hide';
    }
}