<?php

/* 404.twig */
class __TwigTemplate_6fc9ccd3d31290edc999f309047ec5dbd78e9c3e9d7ef2d74d0a2540f32de753 extends \XLite\Core\Templating\Twig\Template
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
        echo "<h2 class=\"page-not-found\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Page not found")), "html", null, true);
        echo "</h2>
<p>";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The requested page could not be found.")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # 404 Page not found widget*/
/*  #}*/
/* <h2 class="page-not-found">{{ t('Page not found') }}</h2>*/
/* <p>{{ t('The requested page could not be found.') }}</p>*/
/* */
