<?php

/* common/surcharge.twig */
class __TwigTemplate_c2563c378ffed36919687416340489749e0e13bc0f724c9961865be2e5c6f82f extends \XLite\Core\Templating\Twig\Template
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
<span class=\"surcharge\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "surcharge.common"))), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "common/surcharge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Surcharge widget*/
/*  #}*/
/* */
/* <span class="surcharge">*/
/*   {{ widget_list('surcharge.common') }}*/
/* </span>*/
/* */
