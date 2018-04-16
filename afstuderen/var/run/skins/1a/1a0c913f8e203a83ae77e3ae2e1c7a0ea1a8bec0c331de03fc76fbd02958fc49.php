<?php

/* modules/CDev/SimpleCMS/page/body.twig */
class __TwigTemplate_0e1b7b81cfc8e7a75d4514294d14de1bccc48f81c061701484eecb738a8e5699 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "static_page.info"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/SimpleCMS/page/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Page*/
/*  #}*/
/* */
/* {{ widget_list('static_page.info') }}*/
/* */
