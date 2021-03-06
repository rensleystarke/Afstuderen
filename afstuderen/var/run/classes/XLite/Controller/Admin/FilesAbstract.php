<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Controller\Admin;

/**
 * File upload controller
 */
abstract class FilesAbstract extends \XLite\Controller\Admin\AAdmin
{
    const RESPONSE_WIDGET = 'widget';
    const RESPONSE_JSON   = 'json';

    /**
     * Check if current page is accessible
     *
     * @return boolean
     */
    public function checkAccess()
    {
        return parent::checkAccess() && $this->isAJAX();
    }

    /**
     * Check ACL permissions
     *
     * @return boolean
     */
    public function checkACL()
    {
        return true;
    }

    /**
     * Checks file
     *
     * @param mixed $file File
     *
     * @return void
     */
    protected function checkFile($file)
    {
        if ($file
            && \XLite\Core\Request::getInstance()->is_image
            && !$file->isImage()
            && !(
                $file instanceof \XLite\Model\TemporaryFile
                && $file->isURL()
            )
        ) {
            $file->removeFile();
            $this->sendResponse(null, static::t('File is not an image'));
        }
    }

    /**
     * Uploads file from form data.
     * Uses 'file' request form value.
     *
     * @return void
     */
    protected function doActionUploadFromFile()
    {
        $file = \XLite\Core\Request::getInstance()->register
            ? new \XLite\Model\Image\Content()
            : new \XLite\Model\TemporaryFile();

        if (\XLite\Core\Request::getInstance()->type === 'video') {
            $file = \XLite\Core\Request::getInstance()->register
                ? new \XLite\Model\Video\Content()
                : new \XLite\Model\Video\Temporary();
        }

        $message = '';
        if ($file->loadFromRequest('file')) {
            $this->checkFile($file);
            \XLite\Core\Database::getEM()->persist($file);
            \XLite\Core\Database::getEM()->flush();

        } elseif ($file->getLoadErrorMessage()) {
            $message = call_user_func_array(['\XLite\Controller\Admin\Files',
                't'], $file->getLoadErrorMessage());
        } else {
            $message = static::t('File is not uploaded');
        }

        $this->sendResponse($file, $message);
    }

    /**
     * Uploads file from URL.
     * Uses 'url' and 'copy' request value.
     *
     * @return void
     */
    protected function doActionUploadFromURL()
    {
        $file = \XLite\Core\Request::getInstance()->register
            ? new \XLite\Model\Image\Content()
            : new \XLite\Model\TemporaryFile();
        $message = '';
        if ($file->loadFromURL(\XLite\Core\Request::getInstance()->uploadedUrl, \XLite\Core\Request::getInstance()->copy)) {
            $this->checkFile($file);
            \XLite\Core\Database::getEM()->persist($file);
            \XLite\Core\Database::getEM()->flush();

        } else {
            $message = static::t('Make sure the URL is correct and the file referenced by the URL is a PNG/JPG/JPEG');
        }

        $this->sendResponse($file, $message);
    }

    /**
     * Uploads file from URL.
     * Uses 'url' and 'copy' request value.
     *
     * @return void
     */
    protected function doActionRefresh()
    {
        $file = new \XLite\Model\TemporaryFile();
        if (\XLite\Core\Request::getInstance()->markAsImage) {
            $file->setWidth(1);
        }
        $this->sendResponse($file, '');
    }

    /**
     * Calls response strategy for chosen response mode
     *
     * @param \XLite\Model\Base\Storage $file    Uploaded file object
     * @param string                    $message Possible error message
     *
     * @return void
     */
    protected function sendResponse($file, $message)
    {
        $mode = $this->getResponseMode();

        $strategies = $this->getResponseStrategies();

        if (array_key_exists($mode, $strategies)) {
            call_user_func($strategies[$mode], $file, $message);
        }
    }

    /**
     * Returns current response mode.
     *
     * @return string
     */
    protected function getResponseMode()
    {
        return \XLite\Core\Request::getInstance()->mode ?: static::RESPONSE_WIDGET;
    }

    /**
     * Returns possible response strategies.
     * Contains callables as array values.
     *
     * @return array
     */
    protected function getResponseStrategies()
    {
        return [
            static::RESPONSE_WIDGET => [$this, 'sendResponseAsWidget'],
            static::RESPONSE_JSON   => [$this, 'sendResponseAsJSON'],
        ];
    }

    /**
     * Prints widget content
     *
     * @param  \XLite\Model\TemporaryFile $file    Image file
     * @param  string                     $message Possible error message
     */
    protected function sendResponseAsWidget($file, $message)
    {
        $this->getContent($file, $message);
    }

    /**
     * Prints json output with image data
     *
     * @param  \XLite\Model\Base\Storage $file    Image file
     * @param  string                    $message Possible error message
     */
    protected function sendResponseAsJSON($file, $message)
    {
        $this->set('silent', true);
        $this->setSuppressOutput(true);

        if ($message || !$file) {
            $this->headerStatus(500);
            $response = [
                'message' => $message,
            ];
        } else {
            $response = $this->getSuccessResponseData($file);
        }

        $this->displayJSON($response);
    }

    /**
     * Builds image data
     *
     * @param  \XLite\Model\Base\Storage $file Image file
     */
    protected function getSuccessResponseData($file)
    {
        $url = \XLite\Core\Request::getInstance()->register
            ? str_replace(\XLite\Core\URLManager::getShopURL(), '', $file->getFrontURL())
            : $file->getFrontURL();

        if ($file instanceof \XLite\Model\Base\Image) {
            $response = [
                'size'    => $file->getSize(),
                'width'   => $file->getWidth(),
                'height'  => $file->getHeight(),
                'url'     => $url,
                'id'      => $file->getId(),
                'message' => static::t('File was successfully uploaded'),
            ];
        } elseif ($file instanceof \XLite\Model\Base\Video) {
            $response = [
                'link'    => $url,
                'id'      => $file->getId(),
                'message' => static::t('File was successfully uploaded'),
            ];
        }

        if (\XLite\Core\Request::getInstance()->url_param_name) {
            $response[\XLite\Core\Request::getInstance()->url_param_name] = $url;
        }

        return $response;
    }

    /**
     * Return content
     *
     * @param mixed  $file    File
     * @param string $message Message OPTIONAL
     *
     * @return void
     */
    protected function getContent($file, $message = '')
    {
        $headers = $this->getAdditionalHeaders();
        if ($message) {
            $headers['X-Upload-Error'] = $message;
        }
        static::sendHeaders($headers);

        $viewer = new \XLite\View\FileUploader([
            \XLite\View\FileUploader::PARAM_NAME         => \XLite\Core\Request::getInstance()->name,
            \XLite\View\FileUploader::PARAM_MULTIPLE     => \XLite\Core\Request::getInstance()->multiple,
            \XLite\View\FileUploader::PARAM_OBJECT       => $file,
            \XLite\View\FileUploader::PARAM_OBJECT_ID    => \XLite\Core\Request::getInstance()->object_id,
            \XLite\View\FileUploader::PARAM_MESSAGE      => $message,
            \XLite\View\FileUploader::PARAM_IS_TEMPORARY => true,
            \XLite\View\FileUploader::PARAM_MAX_WIDTH    => \XLite\Core\Request::getInstance()->max_width,
            \XLite\View\FileUploader::PARAM_MAX_HEIGHT   => \XLite\Core\Request::getInstance()->max_height,
            \XLite\View\FileUploader::PARAM_IS_IMAGE     => $file instanceof \XLite\Model\TemporaryFile
                ? \XLite\Core\Request::getInstance()->is_image
                : null,
        ]);

        $this->printAJAXOutput($viewer);
        exit(0);
    }

    /**
     * Set if the form id is needed to make an actions
     * Form class uses this method to check if the form id should be added
     *
     * @return boolean
     */
    public static function needFormId()
    {
        return false;
    }
}
