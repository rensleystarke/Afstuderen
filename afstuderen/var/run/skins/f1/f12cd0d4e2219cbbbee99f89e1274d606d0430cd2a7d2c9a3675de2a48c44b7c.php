<?php

/* layout/header/header.bar.links.logged.twig */
class __TwigTemplate_8e02644f4e414013f6d1395d02b52a2336f4d87e670395d46c528ad871858656 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLogged", array(), "method") &&  !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutLayout", array(), "method"))) {
            // line 8
            echo "  <div class=\"dropdown header_bar-my_account\">
    <a data-toggle=\"dropdown\" data-target=\"#\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("My account")), "html", null, true);
            echo "</a>
    <ul class=\"account-links dropdown-menu\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.bar.links.logged"))), "html", null, true);
            echo "
    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header.bar.links.logged.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header bar account links*/
/*  #*/
/*  # @ListChild (list="layout.header.bar", weight="100")*/
/*  #}*/
/* */
/* {% if this.isLogged() and not this.isCheckoutLayout() %}*/
/*   <div class="dropdown header_bar-my_account">*/
/*     <a data-toggle="dropdown" data-target="#">{{ t('My account') }}</a>*/
/*     <ul class="account-links dropdown-menu">*/
/*       {{ widget_list('layout.header.bar.links.logged') }}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
