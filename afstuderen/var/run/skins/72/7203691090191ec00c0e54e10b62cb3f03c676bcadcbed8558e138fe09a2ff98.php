<?php

/* modules/CDev/Paypal/login/signin/signin.checkout.paypal.twig */
class __TwigTemplate_f526cce2bf8e4bcf8872fffc2ec5e8afd91d2e78e325b06d9799389fa0a13193 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget", "placement" => "signin", "separatorText" => "or proceed with", "separatorPosition" => "before"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/login/signin/signin.checkout.paypal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }
}
/* {##*/
/*  # Sign in: SocialLogin widget*/
/*  #}*/
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget', placement='signin', separatorText='or proceed with', separatorPosition='before') }}*/
/* */
