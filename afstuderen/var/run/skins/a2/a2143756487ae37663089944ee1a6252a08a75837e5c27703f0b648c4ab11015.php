<?php

/* signin/body.twig */
class __TwigTemplate_22008934fbb88ab0d330a8d62ffbc9014dc337d9e003d862de64c8eed24bfcfe extends \XLite\Core\Templating\Twig\Template
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
        echo "<div>
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "signin.main"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "signin/body.twig";
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
/*  # Sign-in list*/
/*  #}*/
/* <div>*/
/* {{ widget_list('signin.main') }}*/
/* </div>*/
