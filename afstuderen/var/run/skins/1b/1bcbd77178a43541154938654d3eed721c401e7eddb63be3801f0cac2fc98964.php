<?php

/* header/parts/meta_upgrade_insecure.twig */
class __TwigTemplate_fe46a26f27755cb91af30205e699b8e809a5205a4d4734ba76548ff431187f7b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "useUpgradeInsecure", array(), "method")) {
            // line 8
            echo "  <meta http-equiv=\"Content-Security-Policy\" content=\"upgrade-insecure-requests\">
";
        }
    }

    public function getTemplateName()
    {
        return "header/parts/meta_upgrade_insecure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="700")*/
/*  #}*/
/* */
/* {% if this.useUpgradeInsecure() %}*/
/*   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">*/
/* {% endif %}*/
/* */
