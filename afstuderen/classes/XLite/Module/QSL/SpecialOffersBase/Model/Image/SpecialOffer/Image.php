<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the software license agreement
 * that is bundled with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@x-cart.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade X-Cart to newer versions
 * in the future. If you wish to customize X-Cart for your needs please
 * refer to http://www.x-cart.com/ for more information.
 *
 * @category  X-Cart 5
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2016 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\QSL\SpecialOffersBase\Model\Image\SpecialOffer;

/**
 * Special offer image.
 *
 * @Entity
 * @Table  (name="special_offer_images")
 */
class Image extends \XLite\Model\Base\Image
{
    /**
     * Relation to the brand entity.
     *
     * @var \XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer
     *
     * @OneToOne   (targetEntity="XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer", inversedBy="image")
     * @JoinColumn (name="offer_id", referencedColumnName="offer_id")
     */
    protected $specialOffer;

    /**
     * Set specialOffer
     *
     * @param \XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer $specialOffer
     * @return Image
     */
    public function setSpecialOffer(\XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer $specialOffer = null)
    {
        $this->specialOffer = $specialOffer;
        return $this;
    }

    /**
     * Get specialOffer
     *
     * @return \XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer 
     */
    public function getSpecialOffer()
    {
        return $this->specialOffer;
    }
}
