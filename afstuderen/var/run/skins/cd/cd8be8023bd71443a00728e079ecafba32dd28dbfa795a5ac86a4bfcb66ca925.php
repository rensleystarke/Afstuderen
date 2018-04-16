<?php

/* modules/CDev/Paypal/banner/cartPage/nearCheckoutButton.twig */
class __TwigTemplate_0c2f11d90c2760b22a3e94f377f1bd57f2bee33a316c89b4f147a2c74ce940ad extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Banner", "page" => "cartPage", "position" => "C"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/banner/cartPage/nearCheckoutButton.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Paypal Credit banner*/
/*  #*/
/*  # @ListChild (list="cart.panel", weight="15")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Banner', page='cartPage', position='C') }}*/
