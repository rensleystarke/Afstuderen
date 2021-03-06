<?php

/* modules/XC/ThemeTweaker/themetweaker/custom_css/css.twig */
class __TwigTemplate_19978af0d5dd62f341f3295d9d765e6dce26d1b52ca879781207b1e10c969373 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInCustomCssMode", array(), "method")) {
            // line 8
            echo "
    ";
            // line 9
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCustomCssEnabled", array(), "method")) {
                // line 10
                echo "        <style rel=\"stylesheet\" media=\"screen\" data-custom-css>
        ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCustomCssText", array(), "method"), "html", null, true);
                echo "
        </style>
    ";
            } else {
                // line 14
                echo "        <script data-custom-css>
        ";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCustomCssText", array(), "method"), "html", null, true);
                echo "
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker/custom_css/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  38 => 14,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head.css", weight="9999")*/
/*  #}*/
/* */
/* {% if this.isInCustomCssMode() %}*/
/* */
/*     {% if this.isCustomCssEnabled() %}*/
/*         <style rel="stylesheet" media="screen" data-custom-css>*/
/*         {{ this.getCustomCssText() }}*/
/*         </style>*/
/*     {% else %}*/
/*         <script data-custom-css>*/
/*         {{ this.getCustomCssText() }}*/
/*         </script>*/
/*     {% endif %}*/
/* {% endif %}*/
