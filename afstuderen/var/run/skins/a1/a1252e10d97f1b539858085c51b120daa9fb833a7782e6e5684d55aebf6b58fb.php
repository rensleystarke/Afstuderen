<?php

/* modules/CDev/Paypal/banner/categoryPages/aboveProducts.twig */
class __TwigTemplate_7e11fd5adf23a0b9f0033f808d6b0abfd3569f84686cc8a6f362e78ba6e90399 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Banner", "page" => "categoryPages", "position" => "A"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/banner/categoryPages/aboveProducts.twig";
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
/*  # Paypal Credit banner*/
/*  #*/
/*  # @ListChild (list="center.top", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Banner', page='categoryPages', position='A') }}*/
