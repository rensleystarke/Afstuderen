<?php

/* shopping_cart/parts/box.estimator.twig */
class __TwigTemplate_15a5f59d86491ccdb7d5290ce7cdd08ff7481d5555586a4578a9937880135130 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"estimator\" data-deferred=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shouldDeferLoad", array(), "method"), "html", null, true);
        echo "\">

  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShippingEstimate", array(), "method")) {
            // line 7
            echo "
    <ul>
      <li>
        <span class=\"section\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping")), "html", null, true);
            echo ":</span>
        ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ShippingEstimator\\SelectedMethod"))), "html", null, true);
            echo "
      </li>
      <li>
        <span class=\"section\">";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Estimated for")), "html", null, true);
            echo ":</span>
        ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEstimateAddress", array(), "method"), "html", null, true);
            echo "
      </li>
    </ul>

    <div class=\"link\">
      <a href=\"";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "shipping_estimate")), "html", null, true);
            echo "\" class=\"estimate\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Change method")), "html", null, true);
            echo "</a>
    </div>

  ";
        } else {
            // line 24
            echo "
    ";
            // line 25
            $this->startForm("XLite\\View\\Form\\Cart\\ShippingEstimator\\Open");            // line 26
            echo "      <div class=\"buttons\">
        ";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Submit", "label" => "Estimate shipping cost", "style" => "estimate"))), "html", null, true);
            echo "
      </div>
    ";
            $this->endForm();            // line 30
            echo "
  ";
        }
        // line 32
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/box.estimator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  75 => 30,  70 => 27,  67 => 26,  66 => 25,  63 => 24,  54 => 20,  46 => 15,  42 => 14,  36 => 11,  32 => 10,  27 => 7,  25 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Shipping estimator box*/
/*  #}*/
/* <div class="estimator" data-deferred="{{ this.shouldDeferLoad() }}">*/
/* */
/*   {% if this.isShippingEstimate() %}*/
/* */
/*     <ul>*/
/*       <li>*/
/*         <span class="section">{{ t('Shipping') }}:</span>*/
/*         {{ widget('XLite\\View\\ShippingEstimator\\SelectedMethod') }}*/
/*       </li>*/
/*       <li>*/
/*         <span class="section">{{ t('Estimated for') }}:</span>*/
/*         {{ this.getEstimateAddress() }}*/
/*       </li>*/
/*     </ul>*/
/* */
/*     <div class="link">*/
/*       <a href="{{ url('shipping_estimate') }}" class="estimate">{{ t('Change method') }}</a>*/
/*     </div>*/
/* */
/*   {% else %}*/
/* */
/*     {% form 'XLite\\View\\Form\\Cart\\ShippingEstimator\\Open' %}*/
/*       <div class="buttons">*/
/*         {{ widget('XLite\\View\\Button\\Submit', label='Estimate shipping cost', style='estimate') }}*/
/*       </div>*/
/*     {% endform %}*/
/* */
/*   {% endif %}*/
/* */
/* </div>*/
/* */
