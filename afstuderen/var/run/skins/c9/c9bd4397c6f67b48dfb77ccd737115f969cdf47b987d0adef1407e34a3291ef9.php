<?php

/* header/meta.twig */
class __TwigTemplate_f3859f117325fe0f7a65140940484b2e974b74a5373aa4a872687df79c201b44 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMetaResources", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 8
            echo "  ";
            echo $context["meta"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "header/meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Head list meta tags*/
/*  #*/
/*  # @ListChild (list="head")*/
/*  #}*/
/* */
/* {% for meta in this.getMetaResources() %}*/
/*   {{ meta|raw }}*/
/* {% endfor %}*/
/* */
