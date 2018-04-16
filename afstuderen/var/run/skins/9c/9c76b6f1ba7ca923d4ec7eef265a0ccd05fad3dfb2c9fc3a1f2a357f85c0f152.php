<?php

/* modules/Amazon/PayWithAmazon/login/signin/signin.checkout.twig */
class __TwigTemplate_b825b37b7433ac83259f31420c7d8ab0aeb739ab25f53b5683a2187a4ed20214 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget", "placement" => "signin", "separatorText" => "or proceed with", "separatorPosition" => "before"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/Amazon/PayWithAmazon/login/signin/signin.checkout.twig";
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
/* {{ widget('\\XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget', placement='signin', separatorText='or proceed with', separatorPosition='before') }}*/
