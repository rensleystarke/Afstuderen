<?php

/* product/details/stock/label.twig */
class __TwigTemplate_ec0b1e625a5f18d3e9d0629f1ec519a36b0e571aebe54ede9117267fd1b7bf6c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isShowStockWarning", array(), "method")) {
            // line 9
            echo "  <span class=\"product-items-available low-stock\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Only X left in stock", array("X" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAvailableAmount", array(), "method")))), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/stock/label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Product low stock label*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="31")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="2000")*/
/*  #}*/
/* */
/* {% if this.product.isShowStockWarning() %}*/
/*   <span class="product-items-available low-stock">{{ t('Only X left in stock', {'X': this.product.getAvailableAmount()}) }}</span>*/
/* {% endif %}*/
/* */
