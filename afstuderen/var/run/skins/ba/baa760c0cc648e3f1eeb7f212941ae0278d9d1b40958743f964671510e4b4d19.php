<?php

/* modules/QSL/SpecialOffersBase/shopping_cart/item_subtotal/body.twig */
class __TwigTemplate_47540780f20eb294e630c35eae942166d43b50df766f84f9535f6416a296b519 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<td class=\"item-subtotal\">
    ";
        // line 2
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasSurcharges", array(), "method")) {
            // line 3
            echo "      <div class=\"subtotal\">
          ";
            // line 4
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getDisplayTotal", array(), "method"), "currency" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrency", array(), "method")))), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasSurcharges", array(), "method")) {
            // line 8
            echo "      <div class=\"subtotal subtotal-with-surcharges\">
          <div>
              <del>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubtotal", array(), "method"), "currency" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrency", array(), "method")))), "html", null, true);
            echo "</del>
          </div>
          <div>
              ";
            // line 13
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFreeItem", array(), "method")) {
                // line 14
                echo "                <span class=\"modified-subtotal\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Free")), "html", null, true);
                echo "!</span>
              ";
            }
            // line 16
            echo "              ";
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFreeItem", array(), "method")) {
                // line 17
                echo "                <span class=\"modified-subtotal\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTotal", array(), "method"), "currency" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrency", array(), "method")))), "html", null, true);
                echo "</span>
              ";
            }
            // line 19
            echo "              <div class=\"including-modifiers\" style=\"display: none;\">
                  <table class=\"including-modifiers\">
                      ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurcharges", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["surcharge"]) {
                // line 22
                echo "                        <tr>
                            <td class=\"name\">";
                // line 23
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "label", array()), "html", null, true);
                echo ":&nbsp;</td>
                            <td class=\"value\">";
                // line 24
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["surcharge"], "value", array()), "currency" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrency", array(), "method")))), "html", null, true);
                echo "</td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surcharge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                  </table>
              </div>
              ";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.item.specialoffer.surcharges", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
            echo "
          </div>
      </div>
    ";
        }
        // line 33
        echo "    ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.item.actions", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
        echo "
</td>";
    }

    public function getTemplateName()
    {
        return "modules/QSL/SpecialOffersBase/shopping_cart/item_subtotal/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  91 => 29,  87 => 27,  78 => 24,  74 => 23,  71 => 22,  67 => 21,  63 => 19,  57 => 17,  54 => 16,  48 => 14,  46 => 13,  40 => 10,  36 => 8,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <td class="item-subtotal">*/
/*     {% if not this.hasSurcharges() %}*/
/*       <div class="subtotal">*/
/*           {{ widget('XLite\\View\\Surcharge', surcharge=this.item.getDisplayTotal(), currency=this.getCurrency()) }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if this.hasSurcharges() %}*/
/*       <div class="subtotal subtotal-with-surcharges">*/
/*           <div>*/
/*               <del>{{ widget('XLite\\View\\Surcharge', surcharge=this.getSubtotal(), currency=this.getCurrency()) }}</del>*/
/*           </div>*/
/*           <div>*/
/*               {% if this.isFreeItem() %}*/
/*                 <span class="modified-subtotal">{{ t('Free') }}!</span>*/
/*               {% endif %}*/
/*               {% if not this.isFreeItem() %}*/
/*                 <span class="modified-subtotal">{{ widget('XLite\\View\\Surcharge', surcharge=this.getTotal(), currency=this.getCurrency()) }}</span>*/
/*               {% endif %}*/
/*               <div class="including-modifiers" style="display: none;">*/
/*                   <table class="including-modifiers">*/
/*                       {% for surcharge in this.getSurcharges() %}*/
/*                         <tr>*/
/*                             <td class="name">{{ surcharge.label }}:&nbsp;</td>*/
/*                             <td class="value">{{ widget('XLite\\View\\Surcharge', surcharge=surcharge.value, currency=this.getCurrency()) }}</td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                   </table>*/
/*               </div>*/
/*               {{ widget_list('cart.item.specialoffer.surcharges', item=this.item) }}*/
/*           </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {{ widget_list('cart.item.actions', item=this.item) }}*/
/* </td>*/
