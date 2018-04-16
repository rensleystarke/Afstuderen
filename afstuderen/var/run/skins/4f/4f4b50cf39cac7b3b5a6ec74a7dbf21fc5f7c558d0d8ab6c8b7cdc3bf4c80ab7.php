<?php

/* modules/XC/ProductComparison/header_indicator.twig */
class __TwigTemplate_f75822e6c28d4b4c02556095e65a0c56c64aeaac37049818c54dee2e9173e89d extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<div class=\"header_product-comparison compare-indicator ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIndicatorClasses", array(), "method"), "html", null, true);
        echo "\">
\t<a ";
        // line 2
        if ( !(isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo "href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCompareURL", array(), "method"), "html", null, true);
            echo "\" ";
        }
        echo " data-target=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCompareURL", array(), "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLinkHelpMessage", array(), "method"), "html", null, true);
        echo "\">
\t\t<span class=\"counter\">";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getComparedCount", array(), "method") > 0)) ? ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getComparedCount", array(), "method")) : ("")), "html", null, true);
        echo "</span>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ProductComparison/header_indicator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="header_product-comparison compare-indicator {{ this.getIndicatorClasses() }}">*/
/* 	<a {% if not disabled %}href="{{ this.getCompareURL() }}" {% endif %} data-target="{{ this.getCompareURL() }}" title="{{ this.getLinkHelpMessage() }}">*/
/* 		<span class="counter">{{ this.getComparedCount() > 0 ? this.getComparedCount() : "" }}</span>*/
/* 	</a>*/
/* </div>*/
/* */
