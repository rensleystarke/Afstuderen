<?php

/* shopping_cart/parts/total.button.twig */
class __TwigTemplate_7912f59bc91d01f68239359339dcf8e30d0bcd5f21f74b7c2197d0faee956b4b extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"button main-button\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\GoToCheckout"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/total.button.twig";
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
/*  # Shopping cart Go to checkout button*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals", weight="40")*/
/*  #}*/
/* <li class="button main-button">*/
/*   {{ widget('\\XLite\\View\\Button\\GoToCheckout') }}*/
/* </li>*/
/* */
