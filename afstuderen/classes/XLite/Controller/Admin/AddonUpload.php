<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Controller\Admin;

/**
 * AddonUpload
 */
class AddonUpload extends \XLite\Controller\Admin\AAdmin
{
    /**
     * Controller title
     *
     * @return string
     */
    public function getTitle()
    {
        return static::t('Upload add-on');
    }
}
