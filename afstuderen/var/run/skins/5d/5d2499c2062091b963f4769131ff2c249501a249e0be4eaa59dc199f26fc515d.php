<?php

/* signin/parts/continue.button.twig */
class __TwigTemplate_1fa44da7410db41c5a09a24b247f90fe9474bd89fc9b082982d3054ac39e36e1 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"buttons-row\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Continue")), "style" => "anonymous-continue-button"))), "html", null, true);
        echo "
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "signin/parts/continue.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Field : email*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title.continue", weight="110")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="buttons-row">*/
/*     {{ widget('XLite\\View\\Button\\Submit', label=t('Continue'), style='anonymous-continue-button') }}*/
/*   </td>*/
/* </tr>*/
