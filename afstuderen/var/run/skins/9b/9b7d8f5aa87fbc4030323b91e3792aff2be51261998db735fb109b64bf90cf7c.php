<?php

/* layout/header/header.bar.checkout.logos.twig */
class __TwigTemplate_7b2dda8189aa13a59afa1d1e9776f10250e01a5efa546c73ab55fac34edac2ce extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutLayout", array(), "method")) {
            // line 8
            echo "  ";
            // line 9
            echo "    ";
            // line 10
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header.bar.checkout.logos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  26 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header bar account links*/
/*  #*/
/*  # @ListChild (list="layout.header", weight="190")*/
/*  #}*/
/* */
/* {% if this.isCheckoutLayout() %}*/
/*   {#<div class="header-checkout_logos">#}*/
/*     {#<img src="{{ asset('images/checkout_logos.png') }}" title="Safe & Secure checkout">#}*/
/*   {#</div>#}*/
/* {% endif %}*/
