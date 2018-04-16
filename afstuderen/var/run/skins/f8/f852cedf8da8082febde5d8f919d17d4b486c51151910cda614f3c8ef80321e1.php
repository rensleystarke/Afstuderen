<?php

/* layout/header/top_menu.twig */
class __TwigTemplate_4407fb466a31ab844b5157524253a27564f1eaf0a462f60593fadeff7873da25 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Layout\\Customer\\DesktopNavbar"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "layout/header/top_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Top menu container*/
/*  #*/
/*  # @ListChild (list="layout.main", weight="250")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Layout\\Customer\\DesktopNavbar') }}*/
