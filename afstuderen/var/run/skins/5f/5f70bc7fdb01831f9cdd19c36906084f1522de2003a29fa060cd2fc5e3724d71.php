<?php

/* layout/content/main.center.right.twig */
class __TwigTemplate_71fac0517548f1d6403029b86db3118be2bb5db5d5f6648ab6d97598b33fd35f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "isSidebarSecondVisible", array(), "method")) {
            // line 8
            echo "  <div id=\"sidebar-second\" class=\"column sidebar\">
    <div class=\"section\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Layout\\Customer\\SidebarSecond", "group" => "sidebar"))), "html", null, true);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/content/main.center.right.twig";
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
/*  # Right sidebar*/
/*  #*/
/*  # @ListChild (list="layout.main.center", weight="300")*/
/*  #}*/
/* */
/* {% if this.layout.isSidebarSecondVisible() %}*/
/*   <div id="sidebar-second" class="column sidebar">*/
/*     <div class="section">*/
/*       {{ widget('XLite\\View\\Layout\\Customer\\SidebarSecond', group='sidebar') }}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
