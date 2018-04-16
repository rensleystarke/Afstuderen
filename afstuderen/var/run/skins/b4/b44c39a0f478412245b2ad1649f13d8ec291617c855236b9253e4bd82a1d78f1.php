<?php

/* shopping_cart/body.twig */
class __TwigTemplate_65d1a489f862a2134461d8567cfb679eac4476ca863187c772a048d198235f4a extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"cart\" class=\"clearfix\">
";
        // line 8
        echo "  <div id=\"shopping-cart\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.children"))), "html", null, true);
        echo "
  </div>
  <div id=\"cart-right\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.panel"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 12,  25 => 9,  22 => 8,  19 => 4,);
    }
}
/* {##*/
/*  # Shopping cart*/
/*  #}*/
/* <div id="cart" class="clearfix">*/
/* {#  <div id="cart-right">*/
/*     <list name="cart.panel" />*/
/*   </div>#}*/
/*   <div id="shopping-cart">*/
/*     {{ widget_list('cart.children') }}*/
/*   </div>*/
/*   <div id="cart-right">*/
/*       {{ widget_list('cart.panel') }}*/
/*   </div>*/
/* </div>*/
/* */
