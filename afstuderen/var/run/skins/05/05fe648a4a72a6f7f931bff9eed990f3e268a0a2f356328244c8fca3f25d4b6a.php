<?php

/* /var/www/next/output/xcart/src/skins/admin/product/search/parts/by_conditions_parts/by_sku.twig */
class __TwigTemplate_7eac6b91ba27970031a1bf5afeef79032b9d8c8c72f522c40ae8d787ffb2534a extends \XLite\Core\Templating\Twig\Template
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
<li>
  <input type=\"checkbox\" name=\"by_sku\" id=\"by-sku\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "by_sku"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"by-sku\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("SKU")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/product/search/parts/by_conditions_parts/by_sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="product.search.conditions.by-keywords", weight="20")*/
/*  #}*/
/* */
/* <li>*/
/*   <input type="checkbox" name="by_sku" id="by-sku" value="Y" {% if this.getCondition('by_sku') %} checked="checked" {% endif %} />*/
/*   <label for="by-sku">{{ t('SKU') }}</label>*/
/* </li>*/
/* */
