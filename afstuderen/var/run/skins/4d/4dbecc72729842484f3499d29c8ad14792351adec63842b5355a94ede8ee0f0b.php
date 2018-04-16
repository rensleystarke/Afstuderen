<?php

/* signin/parts/anonymous.heading.twig */
class __TwigTemplate_549e5288cfaa34a1eb3f0b88b11bd83b3086aefce45e74874cc6b037d6c02b1c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No account yet?")), "html", null, true);
        echo "</h3>
    <h5 class=\"subheading\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Just enter email address")), "html", null, true);
        echo "</h5>
</div>";
    }

    public function getTemplateName()
    {
        return "signin/parts/anonymous.heading.twig";
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
/*     <h3 class="heading">{{ t('No account yet?') }}</h3>*/
/*     <h5 class="subheading">{{ t('Just enter email address')}}</h5>*/
/* </div>*/
