<?php

/* modules/XC/ProductComparison/comparison_table/body.twig */
class __TwigTemplate_6cec1782ba8f65aaef2b8d36068ff660d9524861ebe2c5c8889864b64e423f90 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"compare\">
  ";
        // line 6
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductsCount", array(), "method") > 0)) {
            // line 7
            echo "    <table class=\"comparison-table\">
      <tbody class=\"header\">
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "comparison_table.header"))), "html", null, true);
            echo "
      </tbody>
      <tbody class=\"header-hidden\">
      <tr>
        <td style=\"";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStyle", array(), "method"), "html", null, true);
            echo "\">&nbsp;</td>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProducts", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 15
                echo "          <td style=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStyle", array(), "method"), "html", null, true);
                echo "\">&nbsp;</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </tr>
      </tbody>
      <tbody class=\"header-fixed\">
      ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "comparison_table.header_fixed"))), "html", null, true);
            echo "
      </tbody>
      <tbody class=\"data\">
      ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "comparison_table.data"))), "html", null, true);
            echo "
      </tbody>
    </table>
  ";
        } else {
            // line 27
            echo "    <span class=\"empty-notice\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No products have been selected for comparison.")), "html", null, true);
            echo "</span>
  ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ProductComparison/comparison_table/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  71 => 27,  64 => 23,  58 => 20,  53 => 17,  44 => 15,  40 => 14,  36 => 13,  29 => 9,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Body*/
/*  #}*/
/* */
/* <div id="compare">*/
/*   {% if this.getProductsCount() > 0 %}*/
/*     <table class="comparison-table">*/
/*       <tbody class="header">*/
/*       {{ widget_list('comparison_table.header') }}*/
/*       </tbody>*/
/*       <tbody class="header-hidden">*/
/*       <tr>*/
/*         <td style="{{ this.getStyle() }}">&nbsp;</td>*/
/*         {% for product in this.getProducts() %}*/
/*           <td style="{{ this.getStyle() }}">&nbsp;</td>*/
/*         {% endfor %}*/
/*       </tr>*/
/*       </tbody>*/
/*       <tbody class="header-fixed">*/
/*       {{ widget_list('comparison_table.header_fixed') }}*/
/*       </tbody>*/
/*       <tbody class="data">*/
/*       {{ widget_list('comparison_table.data') }}*/
/*       </tbody>*/
/*     </table>*/
/*   {% else %}*/
/*     <span class="empty-notice">{{ t('No products have been selected for comparison.') }}</span>*/
/*   {% endif %}*/
/* </div>*/
/* */
