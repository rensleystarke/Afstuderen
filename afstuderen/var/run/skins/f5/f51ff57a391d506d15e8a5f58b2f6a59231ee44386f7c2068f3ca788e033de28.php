<?php

/* shopping_cart/parts/buttons.twig */
class __TwigTemplate_3d2ab480eadd1a214785bd8ed0a8543c278d7addfc07b15b80d49d79603d6a96 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"cart-buttons\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.buttons"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/buttons.twig";
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
/*  # Shopping cart buttons panel*/
/*  #*/
/*  # @ListChild (list="cart.children", weight="20")*/
/*  #}*/
/* <div class="cart-buttons">*/
/*   {{ widget_list('cart.buttons') }}*/
/* </div>*/
/* */
