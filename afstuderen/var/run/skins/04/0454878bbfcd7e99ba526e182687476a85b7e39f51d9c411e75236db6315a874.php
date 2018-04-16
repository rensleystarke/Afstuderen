<?php

/* modules/CDev/Paypal/button/ec_button.twig */
class __TwigTemplate_37f2789b3bff56fd9f1ed676ae2879fa38198ce68ba2756f3fdec45b4b075fa6 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonClass", array(), "method"), "html", null, true);
        echo "\" ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonAdditionalParamsCode", array(), "method"), "html", null, true);
        echo ">
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/button/ec_button.twig";
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
/* <div class="{{ this.getButtonClass() }}" {{ this.getButtonAdditionalParamsCode() }}>*/
/* </div>*/
/* */
