<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\ContactUs\Core;

/**
 * Mailer
 */
abstract class Mailer extends \XLite\Core\Mailer implements \XLite\Base\IDecorator
{
    /**
     * New mail type
     */
    const TYPE_CONTACT_US = 'ContactUs';

    /**
     * `From` storage
     *
     * @var string
     */
    protected static $fromStorage = null;

    /**
     * Make some specific preparations for "Custom Headers" for SiteAdmin email type
     *
     * @param array  $customHeaders "Custom Headers" field value
     *
     * @return array new "Custom Headers" field value
     */
    protected static function prepareCustomHeadersContactUs($customHeaders)
    {
        $customHeaders[] = 'Reply-To: ' . static::$fromStorage;

        return $customHeaders;
    }

    /**
     * Send contact us message
     *
     * @param \XLite\Module\CDev\ContactUs\Model\Contact  $contact
     * @param string|array $email Email
     *
     * @return string | null
     */
    public static function sendContactUsMessage($contact, $email)
    {
        static::$fromStorage = $contact->getEmail();

        static::register('contact', $contact);

        if (is_array($email)) {
            foreach ($email as $mail) {
                static::compose(
                    static::TYPE_CONTACT_US,
                    static::getSiteAdministratorMail(),
                    $mail,
                    'modules/CDev/ContactUs/message',
                    [],
                    true,
                    \XLite::ADMIN_INTERFACE
                );
            }
        } else {
            static::compose(
                static::TYPE_CONTACT_US,
                static::getSiteAdministratorMail(),
                $email,
                'modules/CDev/ContactUs/message',
                [],
                true,
                \XLite::ADMIN_INTERFACE
            );
        }

        return static::getMailer()->getLastError();
    }
}
