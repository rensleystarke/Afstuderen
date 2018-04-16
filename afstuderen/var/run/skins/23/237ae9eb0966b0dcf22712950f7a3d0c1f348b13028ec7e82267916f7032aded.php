<?php

/* modules/CDev/VolumeDiscounts/cart_promo.twig */
class __TwigTemplate_033514c1fb041d08fd91860ee450f0fb86d62328fd228e0c985a0141a17a4413 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasNextDiscount", array(), "method")) {
            // line 6
            echo "  <li class=\"volume-discounts\">
  
  <div class=\"volume-discounts-promo\">
  
    <div class=\"banner\">
      <div class=\"banner-box\">-";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNextDiscountValue", array(), "method"), "html", null, true);
            echo "</div>
    </div>
  
    <span class=\"next\">";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Get X off for order amount over Y", array("X" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNextDiscountValue", array(), "method"), "Y" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNextDiscountSubtotal", array(), "method")))), "html", null, true);
            echo "</span>
  
  </div>
  
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/VolumeDiscounts/cart_promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  31 => 11,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Promo block content for cart page*/
/*  #}*/
/* */
/* {% if this.hasNextDiscount() %}*/
/*   <li class="volume-discounts">*/
/*   */
/*   <div class="volume-discounts-promo">*/
/*   */
/*     <div class="banner">*/
/*       <div class="banner-box">-{{ this.getNextDiscountValue() }}</div>*/
/*     </div>*/
/*   */
/*     <span class="next">{{ t('Get X off for order amount over Y', {'X': this.getNextDiscountValue(), 'Y': this.getNextDiscountSubtotal()}) }}</span>*/
/*   */
/*   </div>*/
/*   */
/*   </li>*/
/* {% endif %}*/
/* */
