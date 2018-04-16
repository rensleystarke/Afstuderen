<?php

/* signin/parts/login.heading.twig */
class __TwigTemplate_71594616b4e82887ede513d5838452a2f2c41c958327d08a3cda4fc5e8071561 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"signin-wrapper-heading\">
    <h3 class=\"heading\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Login to your account")), "html", null, true);
        echo "</h3>
    <h5 class=\"subheading\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("to enjoy checkout")), "html", null, true);
        echo "</h5>
</div>";
    }

    public function getTemplateName()
    {
        return "signin/parts/login.heading.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Continue as anonymous heading*/
/*  #}*/
/*  */
/* <div class="signin-wrapper-heading">*/
/*     <h3 class="heading">{{ t('Login to your account') }}</h3>*/
/*     <h5 class="subheading">{{ t('to enjoy checkout')}}</h5>*/
/* </div>*/
