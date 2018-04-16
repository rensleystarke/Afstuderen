<?php

/* layout/header/mobile_header_parts/right_menu.twig */
class __TwigTemplate_26ef58328b2127e9fe35637184c5eda02d5d3c65cb1541fd23ed9ab7140132f9 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "
<li class=\"dropdown mobile_header-right_menu\">
    <div class=\"header-right-bar\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.right.mobile", "displayMode" => "horizontal"))), "html", null, true);
        echo "
    </div>
</li>";
    }

    public function getTemplateName()
    {
        return "layout/header/mobile_header_parts/right_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Header right box*/
/*  #*/
/*  # @ListChild (list="layout.header.mobile.menu", weight="1000")*/
/*  #}*/
/* */
/* <li class="dropdown mobile_header-right_menu">*/
/*     <div class="header-right-bar">*/
/*       {{ widget_list('layout.header.right.mobile', displayMode='horizontal') }}*/
/*     </div>*/
/* </li>*/
