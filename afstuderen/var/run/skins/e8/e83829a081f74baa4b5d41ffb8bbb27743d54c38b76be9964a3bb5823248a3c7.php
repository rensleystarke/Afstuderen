<?php

/* modules/Amazon/PayWithAmazon/checkout_button/cart.twig */
class __TwigTemplate_4b07001d69ebb7a33d80b8941afe8e606cd27b197722d14a571f6477829fc5cf extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPayWithAmazonActive", array(), "method")) {
            // line 7
            echo "<li class=\"button\">
  <div id=\"payWithAmazonDiv_cart_btn\" class=\"pay-with-amazon-button\"></div>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/Amazon/PayWithAmazon/checkout_button/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Template*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals", weight="1000")*/
/*  #}*/
/* {% if this.isPayWithAmazonActive() %}*/
/* <li class="button">*/
/*   <div id="payWithAmazonDiv_cart_btn" class="pay-with-amazon-button"></div>*/
/* </li>*/
/* {% endif %}*/
/* */
