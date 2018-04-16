<?php

/* mini_cart/horizontal/parts/item.amount.twig */
class __TwigTemplate_562d7c69e0f5831adc446565a95ec9b308660423b39b074782ffe6a71316a3dc extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"item-amount\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method"), "html", null, true);
        echo " &times; </div>
";
    }

    public function getTemplateName()
    {
        return "mini_cart/horizontal/parts/item.amount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Display horizontal minicart item price*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.item", weight="18")*/
/*  #}*/
/* <div class="item-amount">{{ this.item.getAmount() }} &times; </div>*/
/* */
