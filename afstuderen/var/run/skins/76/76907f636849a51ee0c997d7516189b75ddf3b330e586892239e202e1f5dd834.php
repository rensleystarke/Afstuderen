<?php

/* shopping_cart/parts/item.info.twig */
class __TwigTemplate_d6c5ba0c02adffdbbdb261edec3339448fbcf058c87e62554151aa4f668d0f97 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-info\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.item.info", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.info.twig";
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
/*  # Shopping cart item : info*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="30")*/
/*  #}*/
/* <td class="item-info">*/
/*   {{ widget_list('cart.item.info', item=this.item) }}*/
/* </td>*/
/* */
