<?php

/* signin/signin_title.twig */
class __TwigTemplate_97d50d089596f9b24533fc3e87dc745080b0e1ced4980a51bc3c552e78305a1e extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"signin-anonymous-title-description\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSigninAnonymousTitle", array(), "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "signin/signin_title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title", weight="20")*/
/*  #}*/
/* <div class="signin-anonymous-title-description">{{ this.getSigninAnonymousTitle()|raw }}</div>*/
/* */
