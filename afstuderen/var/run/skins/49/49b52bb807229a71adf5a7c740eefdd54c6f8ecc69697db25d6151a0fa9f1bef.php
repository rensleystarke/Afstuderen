<?php

/* common/price_plain_only.twig */
class __TwigTemplate_4fab16e5f6b85388570b6ac1e753b92d32b66de4a8df9d9d72c11f72154a464b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-price ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFingerprint", array(), "method"), "html", null, true);
        echo "\">
  <ul class=\"product-price\">
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.plain_price_only"))), "html", null, true);
        echo "
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "common/price_plain_only.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Price widget*/
/*  #}*/
/* */
/* <div class="product-price {{ this.getFingerprint() }}">*/
/*   <ul class="product-price">*/
/*     {{ widget_list('product.plain_price_only') }}*/
/*   </ul>*/
/* </div>*/
