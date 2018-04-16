<?php

/* shopping_cart/parts/box.estimator.method.twig */
class __TwigTemplate_2b41d0cc6244d74067a6d142c9a16a41cecb11276c247c5d90ac83abac0b1b16 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"selected-shipping-method\">
  <span class=\"method-name\">";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method");
        echo "</span>
  <span class=\"shipping-cost\">(";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCost", array(), "method"), "html", null, true);
        echo ")</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/box.estimator.method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Shipping estimator box (selected method)*/
/*  #}*/
/* <div class="selected-shipping-method">*/
/*   <span class="method-name">{{ this.getName()|raw }}</span>*/
/*   <span class="shipping-cost">({{ this.getCost() }})</span>*/
/* </div>*/
/* */
