<?php

/* items_list/product/parts/common.marks.twig */
class __TwigTemplate_a82d1fc97d0ee2fa866d17c59ce6d7de50a017e46874f3d76ac89f35b042a80e extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "<div class=\"product-marks\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "marks", "type" => "inherited", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.marks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Marks*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="998")*/
/*  # @ListChild (list="itemsList.product.list.customer.photo", weight="998")*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="45")*/
/*  #}*/
/* <div class="product-marks">*/
/*   {{ widget_list('marks', type='inherited', product=this.product) }}*/
/* </div>*/
