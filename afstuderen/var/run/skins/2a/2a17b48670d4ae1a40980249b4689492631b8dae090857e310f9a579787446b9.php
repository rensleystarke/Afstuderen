<?php

/* header/parts/link_css.twig */
class __TwigTemplate_31dabc8d91ea0ed091f22c2846c051acd05bdba4bb12ce0947b03019453fd436 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "head.css"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "header/parts/link_css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1100")*/
/*  #}*/
/* */
/* {{ widget_list('head.css') }}*/
/* */
