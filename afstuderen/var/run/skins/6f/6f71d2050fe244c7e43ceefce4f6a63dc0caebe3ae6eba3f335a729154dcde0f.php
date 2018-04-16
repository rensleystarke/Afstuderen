<?php

/* authorization/checkout/authorization.twig */
class __TwigTemplate_7bceb9038bf68402b146886232e7f07880f2c67d89032d8f74310596a8444f58 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Login\\Customer\\Main");        // line 6
        echo "
<table class=\"login-form\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.fields"))), "html", null, true);
        echo "
</table>

";
        $this->endForm();        // line 12
        echo "
";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.after"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "authorization/checkout/authorization.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  33 => 12,  27 => 8,  23 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Login*/
/*  #}*/
/* */
/* {% form '\\XLite\\View\\Form\\Login\\Customer\\Main' %}*/
/* */
/* <table class="login-form">*/
/*   {{ widget_list('customer.signin.fields') }}*/
/* </table>*/
/* */
/* {% endform %}*/
/* */
/* {{ widget_list('customer.signin.after') }}*/
/* */
