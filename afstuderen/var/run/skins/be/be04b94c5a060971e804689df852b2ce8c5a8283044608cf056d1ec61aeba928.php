<?php

/* items_list/product/parts/common.quicklook-button.twig */
class __TwigTemplate_22b630b12b8d06dcb15f3c974389a27f5cc9102cd19501b8f705d526661ea227 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isQuickLookEnabled", array(), "method")) {
            // line 5
            echo "  <div class=\"quicklook\">
    ";
            // line 6
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "style" => ((("quicklook-link quicklook-link-" . $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array())) . " quicklook-link-category-") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "label" => "Quick view", "jsCode" => "return false;"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.quicklook-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Overlapping box*/
/*  #}*/
/* {% if this.isQuickLookEnabled() %}*/
/*   <div class="quicklook">*/
/*     {{ widget('\\XLite\\View\\Button\\Link', style='quicklook-link quicklook-link-' ~ this.product.product_id ~ ' quicklook-link-category-' ~ this.categoryId, label='Quick view', jsCode='return false;') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
