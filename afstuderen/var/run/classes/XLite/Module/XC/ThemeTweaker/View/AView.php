<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\View;

use XLite\Module\XC\ThemeTweaker\Core\ThemeTweaker;

/**
 * Abstract widget
 */
abstract class AView extends \XLite\Module\XC\VendorMessages\View\AView implements \XLite\Base\IDecorator
{
    /**
     * Current templates tree
     *
     * @var \XLite\Core\CommonGraph
     */
    protected static $tree;

    /**
     * Current tree node
     *
     * @var \XLite\Core\CommonGraph
     */
    protected static $current;

    /**
     * Template id
     *
     * @var integer
     */
    protected static $templateId = 0;

    /**
     * Mark flag (null if not started)
     *
     * @var boolean|null
     */
    protected static $mark;

    /**
     * Allow mark
     *
     * @var boolean|null
     */
    protected static $allowMark;

    /**
     * @var string
     */
    protected $notificationRootTemplate;

    /**
     * So called "static constructor".
     * NOTE: do not call the "parent::__constructStatic()" explicitly: it will be called automatically
     *
     * @return void
     */
    public static function __constructStatic()
    {
        static::$tree = new \XLite\Core\CommonGraph();
        static::$current = static::$tree;
    }

    /**
     * Returns current templates tree
     *
     * @return \XLite\Core\CommonGraph
     */
    public static function getTree()
    {
        return static::$tree;
    }

    /**
     * Returns current templates tree (HTML)
     *
     * @return string
     */
    public static function getHtmlTree()
    {
        if (static::buildHtmlTreeNode(static::$tree)) {
            return \XLite::isAdminZone()
                ? static::getAdminHtmlTree()
                : static::getCustomerHtmlTree();
        }

        return '';
    }

    /**
     * Returns current templates tree (HTML) (admin zone)
     *
     * @return string
     */
    protected static function getAdminHtmlTree()
    {
        $result = '<div id="themeTweaker_wrapper" style="display: none;" data-editor-wrapper>';

        $backTitle = static::t('Back to notification settings');
        $backUrl = \XLite\Core\Converter::buildURL(
            'notification',
            '',
            [
                'templatesDirectory' => \XLite\Core\Request::getInstance()->templatesDirectory,
                'page'               => \XLite\Core\Request::getInstance()->interface,
            ]
        );

        $title = static::t('Edit template based on');

        $order = \XLite\Module\XC\ThemeTweaker\Main::getDumpOrder();
        $orderTitle = static::t('Order X', ['id' => $order->getOrderNumber()]);
        $orderChange = static::t('Change');
        $orderChangePlaceholder = static::t('Enter Order number');

        $result .= <<<HTML
<div class="themeTweaker-control-panel" data-editor-control-panel>
<div class="themeTweaker-back">
    <a href="{$backUrl}">{$backTitle}</a>
</div>
<div class="themeTweaker-title">{$title}</div>
<div class="themeTweaker-order">
<div class="themeTweaker-order-title">{$orderTitle}</div>
<div class="themeTweaker-order-change"><a href="#">{$orderChange}</a></div>
<div class="themeTweaker-order-change-input">
    <input type="text" id="changeOrderId" class="form-control" placeholder="{$orderChangePlaceholder}" />
</div>
</div>
</div>
HTML;

        // inner interface
        $innerInterface = \XLite\Core\Request::getInstance()->interface;
        $result .= '<div class="themeTweaker_tree not-processed" data-editor-tree data-interface="' . \XLite::MAIL_INTERFACE . '" data-inner-interface="' . $innerInterface . '">';
        $result .= static::buildHtmlTreeNode(static::$tree);
        $result .= '</div></div>';

        return $result;
    }

    /**
     * Returns current templates tree (HTML) (customer zone)
     *
     * @return string
     */
    protected static function getCustomerHtmlTree()
    {
        $result = '<div class="themeTweaker_tree not-processed" data-editor-tree data-interface="' . \XLite::CUSTOMER_INTERFACE . '">';
        $result .= static::buildHtmlTreeNode(static::$tree);
        $result .= '</div>';

        return $result;
    }

/**
     * Returns current templates tree (HTML)
     *
     * @param \Includes\DataStructure\Graph $node Node
     *
     * @return string
     */
    public static function buildHtmlTreeNode(\Includes\DataStructure\Graph $node)
    {
        $result = '';
        $children = $node->getChildren();

        if ($children) {
            $result = '<ul>';

            /** @var \Includes\DataStructure\Graph $child */
            foreach ($children as $child) {
                $data = $child->getData();

                $additionalData = [];
                if ($data->isList) {
                    $additionalData['disabled'] = true;
                }

                $label = $data->class
                    ? sprintf('%s (%s)', $child->getKey(), $data->class)
                    : $child->getKey();

                $result .= sprintf(
                    '<li id="template_%s" data-template-id="%s" data-template-path="%s" data-jstree=\'%s\'>%s%s</li>',
                    $data->templateId,
                    $data->templateId,
                    $child->getKey(),
                    json_encode($additionalData),
                    $label,
                    static::buildHtmlTreeNode($child)
                );
            }

            $result .= '</ul>';
        }

        return $result;
    }

    /**
     * Returns current templates tree (HTML)
     *
     * @return string
     */
    public static function getJsonTree()
    {
        $result = static::buildJsonTreeNode(static::$tree);

        return json_encode($result);
    }

    /**
     * Returns current templates tree (JSON)
     *
     * @param \Includes\DataStructure\Graph $node Node
     *
     * @return array
     */
    public static function buildJsonTreeNode(\Includes\DataStructure\Graph $node)
    {
        $result = [];

        $children = $node->getChildren();

        if ($children) {
            /** @var \Includes\DataStructure\Graph $child */
            foreach ($children as $child) {
                $data = $child->getData();

                $label = $data->class
                    ? sprintf('%s (%s)', $child->getKey(), $data->class)
                    : $child->getKey();

                $result[] = [
                    'id'       => sprintf('template_%s', $data->templateId),
                    'text'     => $label,
                    'state'    => [
                        'disabled' => $data->isList,
                    ],
                    'li_attr'  => [
                        'data-template-id'   => $data->templateId,
                        'data-template-path' => $child->getKey(),
                    ],
                    'children' => static::buildJsonTreeNode($child),
                ];
            }
        }

        return $result;
    }


    /**
     * Get list of methods, priorities and interfaces for the resources
     *
     * @return array
     */
    protected static function getResourcesSchema()
    {
        $schema = parent::getResourcesSchema();
        $schema[] = ['getThemeTweakerCustomFiles', 1000, 'custom'];

        return $schema;
    }

    /**
     * @return array
     */
    protected function getCommonFiles()
    {
        $list = parent::getCommonFiles();

        if ($this->isMarkTemplates() && \XLite::isAdminZone()) {
            $list[static::RESOURCE_JS][] = 'modules/XC/ThemeTweaker/template_editor/vakata-jstree/dist/jstree.min.js';
            $list[static::RESOURCE_JS][] = 'modules/XC/ThemeTweaker/template_editor/tree-view.js';
            $list[static::RESOURCE_JS][] = 'modules/XC/ThemeTweaker/template_editor/template-navigator.js';
            $list[static::RESOURCE_JS][] = 'modules/XC/ThemeTweaker/template_editor/editor.js';
            $list[static::RESOURCE_CSS][] = 'modules/XC/ThemeTweaker/template_editor/vakata-jstree/dist/themes/default/style.min.css';
            $list[static::RESOURCE_CSS][] = 'modules/XC/ThemeTweaker/template_editor/style.css';
            $list[static::RESOURCE_CSS][] = 'modules/XC/ThemeTweaker/template_editor/template-navigator.css';
        }


        return $list;
    }

    /**
     * Return custom common files
     *
     * @return array
     */
    protected function getThemeTweakerCustomFiles()
    {
        $files = [];

        if (!\XLite::isAdminZone()) {
            if ($this->isCustomJsEnabled()) {
                $files[static::RESOURCE_JS] = [
                    [
                        'file'  => 'theme/custom.js',
                        'media' => 'all',
                    ],
                ];
            }

            if ($this->isCustomCssEnabled() && !$this->isInCustomCssMode()) {
                $files[static::RESOURCE_CSS] = [
                    [
                        'file'  => 'theme/custom.css',
                        'media' => 'all',
                    ],
                ];
            }
        }

        return $files;
    }

    protected function isCustomJsEnabled()
    {
        return \XLite\Core\Config::getInstance()->XC->ThemeTweaker->use_custom_js;
    }

    protected function isCustomCssEnabled()
    {
        return \XLite\Core\Config::getInstance()->XC->ThemeTweaker->use_custom_css;
    }

    /**
     * Returns custom css text
     * @return string
     */
    protected function getCustomCssText()
    {
        $path = LC_DIR_VAR . 'theme/custom.css';
        return \Includes\Utils\FileManager::read($path) ?: '';
    }

    protected function getNextTemplateId()
    {
        return \XLite::getController()->isAJAX()
            ? substr(\XLite\Core\Request::getInstance()->getUniqueIdentifier(), 0, 6) . '_' . static::$templateId++
            : static::$templateId++;
    }

    /**
     * Prepare template display
     *
     * @param string $template Template short path
     *
     * @return array
     */
    protected function prepareTemplateDisplay($template)
    {
        $result = parent::prepareTemplateDisplay($template);

        list($templateWrapperText, $templateWrapperStart) = $this->startMarker($template);
        if ($templateWrapperText) {
            echo $templateWrapperStart;
            $result['templateWrapperText'] = $templateWrapperText;
        }

        return $result;
    }

    public function startMarker($template)
    {
        if ($this->setStartMark($template)) {

            $templateId = $this->getNextTemplateId();

            $localPath = substr($template, strlen(LC_DIR_SKINS));
            $current = new \XLite\Core\CommonGraph($localPath);

            $data = new \XLite\Core\CommonCell();
            $data->class = get_class($this);
            $data->templateId = $templateId;
            $current->setData($data);

            static::$current->addChild($current);
            static::$current = $current;

            $templateWrapperText = get_class($this) . ' : ' . $localPath . ' (' . $templateId . ')'
                                   . ($this->viewListName ? ' [\'' . $this->viewListName . '\' list child]' : '');

            return [$templateWrapperText, '<!-- ' . $templateWrapperText . ' {' . '{{ -->'];
        }

        return ['', ''];
    }

    /**
     * Finalize template display
     *
     * @param string $template     Template short path
     * @param array  $profilerData Profiler data which is calculated and returned in the 'prepareTemplateDisplay' method
     *
     * @return void
     */
    protected function finalizeTemplateDisplay($template, array $profilerData)
    {
        if (isset($profilerData['templateWrapperText'])) {
            echo $this->endMarker($template, $profilerData['templateWrapperText']);
        }

        parent::finalizeTemplateDisplay($template, $profilerData);
    }

    public function endMarker($template, $templateWrapperText)
    {
        static::$current = static::$current->getParent();
        $this->setEndMark($template);

        return '<!-- }}' . '} ' . $templateWrapperText . ' -->';
    }

    /**
     * Display view list content
     *
     * @param string $list      List name
     * @param array  $arguments List common arguments OPTIONAL
     *
     * @return void
     */
    public function displayViewListContent($list, array $arguments = [])
    {
        $start = false;
        if (static::$mark) {
            $templateId = $this->getNextTemplateId();

            $current = new \XLite\Core\CommonGraph($list);

            $data = new \XLite\Core\CommonCell();
            $data->templateId = $templateId;
            $data->isList = true;
            $current->setData($data);

            static::$current->addChild($current);
            static::$current = $current;
            $start = true;
        }

        parent::displayViewListContent($list, $arguments);

        if ($start) {
            static::$current = static::$current->getParent();
        }
    }

    protected function setStartMark($template)
    {
        if (null === static::$mark) {
            if (\XLite::isAdminZone()) {
                if ($this->checkNotificationRootTemplate($template)) {
                    static::$mark = $this->isMarkTemplates();
                }
            } else {
                static::$mark = $this->isMarkTemplates();
            }
        }

        return static::$mark;
    }

    protected function setEndMark($template)
    {
        if (null !== static::$mark) {
            if (\XLite::isAdminZone()) {
                if ($this->checkNotificationRootTemplate($template)) {
                    static::$mark = false;
                }
            }
        }
    }

    /**
     * @param string $template
     * @param string $interface
     *
     * @return boolean
     */
    protected function checkNotificationRootTemplate($template, $interface = \XLite::ADMIN_INTERFACE)
    {
        if (\XLite::getController()->getTarget() === 'notification_editor') {
            $templatesDirectory = \XLite\Core\Request::getInstance()->templatesDirectory;

            return $this->getNotificationRootTemplate($templatesDirectory, $interface) === $template;
        }

        return false;
    }

    /**
     * @param string $templateDirectory
     * @param string $interface
     *
     * @return bool
     */
    protected function getNotificationRootTemplate($templateDirectory, $interface = \XLite::ADMIN_INTERFACE)
    {
        if ($this->notificationRootTemplate === null) {
            $layout = \XLite\Core\Layout::getInstance();

            $baseSkin = $layout->getSkin();
            $baseInterface = $layout->getInterface();
            $baseInnerInterface = $layout->getInnerInterface();

            $layout->setMailSkin($interface);

            $path = $layout->getResourceFullPath($templateDirectory . '/body.twig');

            // restore old skin
            switch ($baseInterface) {
                default:
                case \XLite::ADMIN_INTERFACE:
                    $layout->setAdminSkin();
                    break;

                case \XLite::CUSTOMER_INTERFACE:
                    $layout->setCustomerSkin();
                    break;

                case \XLite::CONSOLE_INTERFACE:
                    $layout->setConsoleSkin();
                    break;

                case \XLite::MAIL_INTERFACE:
                    $layout->setMailSkin($baseInnerInterface);
                    break;
            }

            $layout->setSkin($baseSkin);

            $this->notificationRootTemplate = $path;
        }

        return $this->notificationRootTemplate;
    }

    /**
     * Is running layout edit mode
     *
     * @return boolean
     */
    protected function isInLayoutMode()
    {
        return ThemeTweaker::getInstance()->isInLayoutMode();
    }

    /**
     * Is running custom css edit mode
     *
     * @return boolean
     */
    protected function isInCustomCssMode()
    {
        return ThemeTweaker::getInstance()->isInCustomCssMode();
    }

    /**
     * Display plain array as JS array
     *
     * @param array $data Plain array
     *
     * @return void
     */
    public function displayCommentedData(array $data)
    {
        foreach ($data as $key => $value) {
            if ($value instanceof \Twig_Markup) {
                $data[$key] = (string) $value;
            }
        }

        parent::displayCommentedData($data);
    }

    /**
     * Mark templates
     *
     * @return boolean
     */
    protected function isMarkTemplates()
    {
        if (null === static::$allowMark) {
            static::$allowMark = ThemeTweaker::getInstance()->isInWebmasterMode();
        }

        return static::$allowMark;
    }

    /**
     * Cache allowed
     *
     * @return boolean
     */
    protected function isCacheAllowed()
    {
        return parent::isCacheAllowed()
            && !ThemeTweaker::getInstance()->isInWebmasterMode()
            && !\XLite\Core\Translation::getInstance()->isInlineEditingEnabled();
    }
}

// Call static constructor
\XLite\Module\XC\ThemeTweaker\View\AView::__constructStatic();
