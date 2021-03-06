<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/head/head.title.twig */
class __TwigTemplate_1cc612368e80fd64ae7715029c48001c57d36b7b6958cd9099c4fd7e955704dc extends \XLite\Core\Templating\Twig\Template
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
<td class=\"title-wrapper\">
    <div class=\"packing-slip-title\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPackingSlipTitle", array(), "method"), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPrintableOrderNumber", array(), "method"), "html", null, true);
        echo "</div>
    <div class=\"packing-slip-title-data\">
        <div class=\"packing-slip-title-data-item packing-slip-packing-date\">
            <strong class=\"date-title\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Packing date")), "html", null, true);
        echo "</strong>
            <span class=\"date-value\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPackingSlipDateTime", array(), "method"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"packing-slip-title-data-item packing-slip-shipping-method\">
            <strong class=\"date-title\">";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping")), "html", null, true);
        echo "</strong>
            <span class=\"date-value\">";
        // line 16
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShippingMethodName", array(), "method");
        echo "</span>
        </div>
        <div class=\"packing-slip-title-data-item packing-slip-order-date\">
            <strong class=\"date-title\">";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Order date")), "html", null, true);
        echo "</strong>
            <span class=\"date-value\">";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatTime", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getDate", array(), "method")), "method"), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentTransactionData", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "          <div class=\"packing-slip-title-data-item payment-sub-data\">
              <strong class=\"date-title\">";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["item"], "title", array()))), "html", null, true);
            echo "</strong>
              <span class=\"date-value\">";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
            echo "</span>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/head/head.title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  71 => 25,  67 => 24,  64 => 23,  60 => 22,  55 => 20,  51 => 19,  45 => 16,  41 => 15,  35 => 12,  31 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice : header : address box*/
/*  #*/
/*  # @ListChild (list="packing_slip.head", weight="10")*/
/*  #}*/
/* */
/* <td class="title-wrapper">*/
/*     <div class="packing-slip-title">{{ this.getPackingSlipTitle() }} {{ this.order.getPrintableOrderNumber() }}</div>*/
/*     <div class="packing-slip-title-data">*/
/*         <div class="packing-slip-title-data-item packing-slip-packing-date">*/
/*             <strong class="date-title">{{ t('Packing date') }}</strong>*/
/*             <span class="date-value">{{ this.getPackingSlipDateTime() }}</span>*/
/*         </div>*/
/*         <div class="packing-slip-title-data-item packing-slip-shipping-method">*/
/*             <strong class="date-title">{{ t('Shipping') }}</strong>*/
/*             <span class="date-value">{{ this.getShippingMethodName()|raw }}</span>*/
/*         </div>*/
/*         <div class="packing-slip-title-data-item packing-slip-order-date">*/
/*             <strong class="date-title">{{ t('Order date') }}</strong>*/
/*             <span class="date-value">{{ this.formatTime(this.order.getDate()) }}</span>*/
/*         </div>*/
/*         {% for item in this.order.getPaymentTransactionData(1) %}*/
/*           <div class="packing-slip-title-data-item payment-sub-data">*/
/*               <strong class="date-title">{{ t(item.title) }}</strong>*/
/*               <span class="date-value">{{ item.value }}</span>*/
/*           </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </td>*/
/* */
