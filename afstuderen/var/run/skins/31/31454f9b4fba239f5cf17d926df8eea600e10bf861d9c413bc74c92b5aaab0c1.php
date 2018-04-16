<?php

/* authorization/parts/field.button.twig */
class __TwigTemplate_7225a1d4033da1e62406a4a4aa2b82fe7cc50c863c7e4ef5cbd33953f70c28a4 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<tr>
    <td>
        ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.popup.links"))), "html", null, true);
        echo "
        ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sign in"))))), "html", null, true);
        echo "
    </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "authorization/parts/field.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # Field : button*/
/*  #*/
/*  # @ListChild (list="customer.signin.fields", weight="400")*/
/*  # @ListChild (list="customer.signin.popup.fields", weight="400")*/
/*  #}*/
/* */
/* <tr>*/
/*     <td>*/
/*         {{ widget_list('customer.signin.popup.links') }}*/
/*         {{ widget('\\XLite\\View\\Button\\Submit', label=t('Sign in')) }}*/
/*     </td>*/
/* </tr>*/
/* */
/* */
