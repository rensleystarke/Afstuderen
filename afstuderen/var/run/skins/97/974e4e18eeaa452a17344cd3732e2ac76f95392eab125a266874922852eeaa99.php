<?php

/* layout/header/header.right.twig */
class __TwigTemplate_3e77324a12b402b46497dd0b5f7768b57d5e8c865da75fe8a0acd8cd9cceb420 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutLayout", array(), "method")) {
            // line 7
            echo "  <div id=\"header\" class=\"header-right-bar\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.right", "displayMode" => "horizontal"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header right box*/
/*  #*/
/*  # @ListChild (list="layout.header", weight="200")*/
/*  #}*/
/* {% if not this.isCheckoutLayout() %}*/
/*   <div id="header" class="header-right-bar">*/
/*     {{ widget_list('layout.header.right', displayMode='horizontal') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
