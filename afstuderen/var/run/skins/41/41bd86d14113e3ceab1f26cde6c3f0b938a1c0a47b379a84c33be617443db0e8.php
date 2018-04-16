<?php

/* layout/content/category_description.twig */
class __TwigTemplate_dd0d1c9a3a6e1e192075a70b6a10aa64abc16b2305bb6aaf0d8125f5cd22b486 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 5
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDescription", array(), "method") || $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInInlineEditorMode", array(), "method"))) {
            // line 6
            echo "<div class=\"category-description\" ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCategory", array(), "method"), "getFieldMetadata", array(0 => "description"), "method")), "method");
            echo ">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDescription", array(), "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/content/category_description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Category page*/
/*  #}*/
/* */
/* {% if this.getDescription() or this.isInInlineEditorMode() %}*/
/* <div class="category-description" {{ this.printTagAttributes(this.getCategory().getFieldMetadata('description'))|raw }}>{{ this.getDescription()|raw }}</div>*/
/* {% endif %}*/
/* */
