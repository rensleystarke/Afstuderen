<?php

/* layout/content/main.center.left.twig */
class __TwigTemplate_03cce8aaf5bc3390f7037a0ced1933d5f7318b3d6ea8479555946844424435d0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "isSidebarFirstVisible", array(), "method")) {
            // line 8
            echo "  <div id=\"sidebar-first\" class=\"column sidebar\">
    <div class=\"section\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Layout\\Customer\\SidebarFirst", "group" => "sidebar"))), "html", null, true);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/content/main.center.left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Left sidebar*/
/*  #*/
/*  # @ListChild (list="layout.main.center", weight="100")*/
/*  #}*/
/* */
/* {% if this.layout.isSidebarFirstVisible() %}*/
/*   <div id="sidebar-first" class="column sidebar">*/
/*     <div class="section">*/
/*       {{ widget('XLite\\View\\Layout\\Customer\\SidebarFirst', group='sidebar') }}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
