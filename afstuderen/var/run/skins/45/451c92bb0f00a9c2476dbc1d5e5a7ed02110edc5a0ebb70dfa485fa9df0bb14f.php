<?php

/* modules/CDev/GoogleAnalytics/impression-block.twig */
class __TwigTemplate_e092d3cd3695369a1ee70e62cdb9b28d6e72573ab2a5715fa5d28042566fb848 extends \XLite\Core\Templating\Twig\Template
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
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shouldRegisterImpression", array(), "method")) {
            // line 13
            echo "    <script data-ga-ec-action=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImpressionData", array(), "method"), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/GoogleAnalytics/impression-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 13,  22 => 12,  19 => 11,);
    }
}
/* {##*/
/*  # Impression block*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="20")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="20")*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.details", weight="20")*/
/*  # @ListChild (list="itemsList.product.big_thumbnails.customer.info", weight="200")*/
/*  # @ListChild (list="itemsList.product.text_links.customer.info", weight="100")*/
/*  # @ListChild (list="productBlock.info", weight="200")*/
/*  #}*/
/* */
/* {% if this.shouldRegisterImpression() %}*/
/*     <script data-ga-ec-action="{{ this.getImpressionData() }}"></script>*/
/* {% endif %}*/
/* */
