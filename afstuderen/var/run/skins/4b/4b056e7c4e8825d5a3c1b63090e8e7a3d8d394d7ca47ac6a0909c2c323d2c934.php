<?php

/* shopping_cart/parts/totals.twig */
class __TwigTemplate_caa6157e854dd0969c5f9d07bc7bf75615893e47fa06d4a2689f50abc290bbdc extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"sums\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.totals"))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/totals.twig";
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
/*  # Shopping cart totals block*/
/*  #*/
/*  # @ListChild (list="cart.children", weight="30")*/
/*  #}*/
/* <ul class="sums">*/
/*   {{ widget_list('cart.totals') }}*/
/* </ul>*/
/* */
