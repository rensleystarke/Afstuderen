<?php

/* authorization/parts/field.message.twig */
class __TwigTemplate_0b4491cc2c0aef14b01bd5c24d4ddd22c372e820104141b48b395f523f15a083 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 8
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "valid", array())) {
            // line 9
            echo "  <tr>
      <td class=\"error-message\">
        ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Invalid login or password")), "html", null, true);
            echo "
        <a href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "recover_password")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Forgot password")), "html", null, true);
            echo "?</a>
      </td>
  </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "authorization/parts/field.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Field : username*/
/*  #*/
/*  # @ListChild (list="customer.signin.fields", weight="300")*/
/*  # @ListChild (list="customer.signin.popup.fields", weight="300")*/
/*  #}*/
/* */
/* {% if not this.valid %}*/
/*   <tr>*/
/*       <td class="error-message">*/
/*         {{ t('Invalid login or password') }}*/
/*         <a href="{{ url('recover_password') }}">{{ t('Forgot password') }}?</a>*/
/*       </td>*/
/*   </tr>*/
/* {% endif %}*/
/* */
