<?php

/* shopping_cart/parts/item.price.twig */
class __TwigTemplate_2be131eacbe4d09bceb6818fdeda4adbde58f54f1af5db8a9fe00b8fb20b0d46 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getDisplayPrice", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
        echo "</td>
<td class=\"item-multi\">&times;</td>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.price.twig";
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
/*  # Shopping cart item : price*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="40")*/
/*  #}*/
/* <td class="item-price">{{ widget('XLite\\View\\Surcharge', surcharge=this.item.getDisplayPrice(), currency=this.cart.getCurrency()) }}</td>*/
/* <td class="item-multi">&times;</td>*/
/* */
