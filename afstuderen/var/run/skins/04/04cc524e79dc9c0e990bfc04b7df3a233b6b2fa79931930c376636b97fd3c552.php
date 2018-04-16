<?php

/* modules/CDev/Coupons/cart_coupons.twig */
class __TwigTemplate_15eb27e4a2c63df0015d82bc680c5ea5d0c71fa482ffaa43fc301141c924dbe2 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"coupons clearfix\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCouponPanelVisible", array(), "method")) {
            // line 7
            echo "    ";
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCoupons", array(), "method")) {
                // line 8
                echo "      <div class=\"new more\"><a href=\"#\"><span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Have a discount coupon?")), "html", null, true);
                echo "</span></a></div>
    ";
            }
            // line 10
            echo "    ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCoupons", array(), "method")) {
                // line 11
                echo "      <div class=\"new add\"><a href=\"#\"><span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Have more coupons?")), "html", null, true);
                echo "</span></a></div>
    ";
            }
            // line 13
            echo "
    <div class=\"add-coupon clearfix\" style=\"display: none;\">
      ";
            // line 15
            $this->startForm("\\XLite\\Module\\CDev\\Coupons\\View\\Form\\Customer\\AddCoupon");            // line 16
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text", "fieldName" => "code", "required" => "true", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Enter code")), "maxlength" => "16", "fieldOnly" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFieldOnly", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Coupon code"))))), "html", null, true);
            echo "
        ";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\CDev\\Coupons\\View\\Button\\AddCoupon"))), "html", null, true);
            echo "
      ";
            $this->endForm();            // line 19
            echo "    </div>

  ";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Coupons/cart_coupons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  57 => 19,  53 => 17,  48 => 16,  47 => 15,  43 => 13,  37 => 11,  34 => 10,  28 => 8,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Cart coupons*/
/*  #}*/
/* */
/* <div class="coupons clearfix">*/
/*   {% if this.isCouponPanelVisible() %}*/
/*     {% if not this.getCoupons() %}*/
/*       <div class="new more"><a href="#"><span>{{ t('Have a discount coupon?') }}</span></a></div>*/
/*     {% endif %}*/
/*     {% if this.getCoupons() %}*/
/*       <div class="new add"><a href="#"><span>{{ t('Have more coupons?') }}</span></a></div>*/
/*     {% endif %}*/
/* */
/*     <div class="add-coupon clearfix" style="display: none;">*/
/*       {% form '\\XLite\\Module\\CDev\\Coupons\\View\\Form\\Customer\\AddCoupon' %}*/
/*         {{ widget('XLite\\View\\FormField\\Input\\Text', fieldName='code', required='true', placeholder=t('Enter code'), maxlength='16', fieldOnly=this.isFieldOnly(), label=t('Coupon code')) }}*/
/*         {{ widget('XLite\\Module\\CDev\\Coupons\\View\\Button\\AddCoupon') }}*/
/*       {% endform %}*/
/*     </div>*/
/* */
/*   {% endif %}*/
/* </div>*/
/* */
