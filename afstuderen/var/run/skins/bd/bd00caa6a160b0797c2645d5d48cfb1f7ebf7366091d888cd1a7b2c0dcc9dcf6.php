<?php

/* layout/footer/powered_by.twig */
class __TwigTemplate_5e21da51cc45a4d6f7ed0766cee0593c9fc18c61223900e90c90763c9e5ccb6e extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<div class=\"powered-by\">
  <p class=\"copyright\">&copy; ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCompanyYear", array(), "method"), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_name", array()), "html", null, true);
        echo ". ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("All rights reserved.")), "html", null, true);
        echo "</p>
  <p class=\"powered-by-label\">";
        // line 9
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessage", array(), "method");
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/footer/powered_by.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  26 => 8,  22 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Powered by box*/
/*  #}*/
/* */
/* {# Modification of this template or removal of the "Powered by X-Cart" label are forbidden for X-Cart Free Edition. #}*/
/* */
/* <div class="powered-by">*/
/*   <p class="copyright">&copy; {{ this.getCompanyYear() }} {{ this.config.Company.company_name }}. {{ t('All rights reserved.') }}</p>*/
/*   <p class="powered-by-label">{{ this.getMessage()|raw }}</p>*/
/* </div>*/
/* */
