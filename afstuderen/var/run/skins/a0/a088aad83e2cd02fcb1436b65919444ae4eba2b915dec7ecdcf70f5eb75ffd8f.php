<?php

/* checkout/body.twig */
class __TwigTemplate_ea8e8d0ecc405e717e03624e42c2a2f7369bfb661144de92ac00336f5acfe700 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout-block\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutAvailable", array(), "method")) {
            // line 7
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.main"))), "html", null, true);
            echo "
  ";
        } else {
            // line 9
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Signin"))), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "checkout/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  31 => 9,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Checkout widget body*/
/*  #}*/
/* */
/* <div class="checkout-block">*/
/*   {% if this.isCheckoutAvailable() %}*/
/*     {{ widget_list('checkout.main') }}*/
/*   {% else %}*/
/*     {{ widget('\\XLite\\View\\Signin') }}*/
/*   {% endif %}*/
/* </div>*/
/* */
