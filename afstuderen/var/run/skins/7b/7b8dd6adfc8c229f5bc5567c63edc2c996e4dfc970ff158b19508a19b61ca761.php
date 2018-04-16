<?php

/* header/parts/parts.css/css_aggregation.twig */
class __TwigTemplate_47cf7f86a7d294d6cbc1d167857a7b9bde59a5c742667bd0c1587ba114e3eaed extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doCSSAggregation", array(), "method")) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAggregateCSSResources", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 8
                echo "  ";
                if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doCSSOptimization", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isResourceSuitableForOptimization", array(0 => $context["file"]), "method"))) {
                    // line 9
                    echo "    ";
                    echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInternalCssByResource", array(0 => $context["file"]), "method");
                    echo "
  ";
                } else {
                    // line 11
                    echo "    ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "header/parts/parts.css/css_resource.twig", "async" => $this->getAttribute(                    // line 12
$context["file"], "async", array()), "media" => $this->getAttribute(                    // line 13
$context["file"], "media", array()), "url" => $this->getAttribute(                    // line 14
(isset($context["this"]) ? $context["this"] : null), "getResourceURL", array(0 => $this->getAttribute($context["file"], "url", array()), 1 => $context["file"]), "method")))), "html", null, true);
                    // line 15
                    echo "
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "header/parts/parts.css/css_aggregation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  38 => 14,  37 => 13,  36 => 12,  34 => 11,  28 => 9,  25 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head.css", weight="200")*/
/*  #}*/
/* {% if this.doCSSAggregation() %}*/
/* {% for file in this.getAggregateCSSResources() %}*/
/*   {% if this.doCSSOptimization() and this.isResourceSuitableForOptimization(file) %}*/
/*     {{ this.getInternalCssByResource(file)|raw }}*/
/*   {% else %}*/
/*     {{ widget(template='header/parts/parts.css/css_resource.twig',*/
/*       async=file.async,*/
/*       media=file.media,*/
/*       url=this.getResourceURL(file.url, file)*/
/*     ) }}*/
/*   {% endif %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* */
