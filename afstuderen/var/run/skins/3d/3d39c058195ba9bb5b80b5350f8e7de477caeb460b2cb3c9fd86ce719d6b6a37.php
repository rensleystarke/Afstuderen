<?php

/* button/buttons_separator.twig */
class __TwigTemplate_ca150242482cfcb1b1b8f9b14e1ac1819f6aa3eda626bda0f1d82620f5518a9c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCartTotalsBlock", array(), "method")) {
            echo "<li class=\"button buttons-separator\">";
        }
        // line 6
        echo "<div class=\"buttons-separator\">
  <span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("- OR -")), "html", null, true);
        echo "</span>
</div>
";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCartTotalsBlock", array(), "method")) {
            echo "</li>";
        }
    }

    public function getTemplateName()
    {
        return "button/buttons_separator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  29 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Checkout buttons separator template*/
/*  #}*/
/* */
/* {% if this.isCartTotalsBlock() %}<li class="button buttons-separator">{% endif %}*/
/* <div class="buttons-separator">*/
/*   <span>{{ t('- OR -') }}</span>*/
/* </div>*/
/* {% if this.isCartTotalsBlock() %}</li>{% endif %}*/
/* */
