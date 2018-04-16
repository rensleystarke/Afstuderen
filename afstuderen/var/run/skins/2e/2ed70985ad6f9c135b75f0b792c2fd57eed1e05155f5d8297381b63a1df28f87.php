<?php

/* modules/CDev/Paypal/button/cart/ec_button.twig */
class __TwigTemplate_967f18875196eb98a4cc8fe211ada486ccce6be4d533c0f25c44e7fa761e5319 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonClass", array(), "method"), "html", null, true);
        echo "\" ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonAdditionalParamsCode", array(), "method"), "html", null, true);
        echo ">
</li>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/button/cart/ec_button.twig";
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
/*  # Express checkout button*/
/*  #}*/
/* */
/* <li class="{{ this.getButtonClass() }}" {{ this.getButtonAdditionalParamsCode() }}>*/
/* </li>*/
/* */
