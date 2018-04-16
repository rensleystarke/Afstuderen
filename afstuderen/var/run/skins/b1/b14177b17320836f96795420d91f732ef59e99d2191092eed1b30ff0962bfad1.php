<?php

/* layout/content/center_top.twig */
class __TwigTemplate_a92f5fa2ee5c55b2388813cc033452503f589a09e94e5a9d3d2ff1ce487520c4 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "center"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "layout/content/center_top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Center widgets switcher*/
/*  #}*/
/* */
/* {{ widget_list('center') }}*/
