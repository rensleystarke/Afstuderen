<?php

/* layout/header/main.header.twig */
class __TwigTemplate_5517c31bae856c5f93b14e3ba1b2e4f7b0ff7e00f8baf53c19717be9365b380a extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"header-area\">
  <div class=\"desktop-header\">
  \t<div class=\"container\">
\t    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header"))), "html", null, true);
        echo "
\t  </div>
  </div>
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.mobile"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/header/main.header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="layout.main", weight="200")*/
/*  #}*/
/* <div id="header-area">*/
/*   <div class="desktop-header">*/
/*   	<div class="container">*/
/* 	    {{ widget_list('layout.header') }}*/
/* 	  </div>*/
/*   </div>*/
/*   {{ widget_list('layout.header.mobile') }}*/
/* </div>*/
/* */
