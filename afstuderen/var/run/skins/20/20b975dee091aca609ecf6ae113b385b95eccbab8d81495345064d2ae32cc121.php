<?php

/* shopping_cart/parts/panel.totals.twig */
class __TwigTemplate_ffea76725afe1dc1969e04d4955af92fad95d5c3f45b2cd74bae3ffd6fb60692 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"totals\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.panel.totals"))), "html", null, true);
        echo "
  <li class=\"clearfix\"></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/panel.totals.twig";
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
/*  # Shopping cart totals panel*/
/*  #*/
/*  # @ListChild (list="cart.panel", weight="10")*/
/*  #}*/
/* <ul class="totals">*/
/*   {{ widget_list('cart.panel.totals') }}*/
/*   <li class="clearfix"></li>*/
/* </ul>*/
/* */
