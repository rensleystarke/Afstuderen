<?php

/* location/location.twig */
class __TwigTemplate_346b8c8ca008c96681c5842640a55e53c715abbdbda8280ccef9bdcaf49505b4 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"breadcrumb\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNodes", array(), "method"));
        foreach ($context['_seq'] as $context["index"] => $context["node"]) {
            // line 6
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "display", array(), "method"), "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "location/location.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Breadcrumbs*/
/*  #}*/
/* <ul class="breadcrumb">*/
/*   {% for index, node in this.getNodes() %}*/
/*     {{ node.display() }}*/
/*   {% endfor %}*/
/* </ul>*/
/* */
