<?php

/* contact_us/template.twig */
class __TwigTemplate_f665052c702a227dce24939d9c19ca56585ac21437ae33ee735ac30a7cc235de extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<div class=\"contact_us-container\">
\t<h4>";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Contact us")), "html", null, true);
        echo "</h4>
\t";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "contact_us.parts"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "contact_us/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="contact_us-container">*/
/* 	<h4>{{ t('Contact us') }}</h4>*/
/* 	{{ widget_list('contact_us.parts') }}*/
/* </div>*/
