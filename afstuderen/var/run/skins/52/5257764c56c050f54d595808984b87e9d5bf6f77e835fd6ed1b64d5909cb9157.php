<?php

/* modules/XC/Reviews/product.items_list.rating.twig */
class __TwigTemplate_56576302bf2e17735b1b84c388d16e3badb750722eb743cba9519b326878cb44 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\ItemsList\\AverageRating", "productId" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "id", array()), "widgetMode" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDisplayMode", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/product.items_list.rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Rating value in product info*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="35")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="45")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\ItemsList\\AverageRating', productId=this.product.id, widgetMode=this.getDisplayMode()) }}*/
/* */
