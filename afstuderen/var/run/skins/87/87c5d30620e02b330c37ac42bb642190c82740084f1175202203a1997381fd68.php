<?php

/* layout/content/main.location.twig */
class __TwigTemplate_e394242868655d76da5f401a1704b402dcd6bdf75ff61e5a7318671227e98035 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTitleVisible", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"))) {
            // line 5
            echo "<div id=\"breadcrumb\">
    ";
            // line 6
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.breadcrumb"))), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/content/main.location.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Location (breadcrumbs)*/
/*  #}*/
/* {% if this.isTitleVisible() and this.getTitle() %}*/
/* <div id="breadcrumb">*/
/*     {{ widget_list('layout.main.breadcrumb') }}*/
/* </div>*/
/* {% endif %}*/
/* */
