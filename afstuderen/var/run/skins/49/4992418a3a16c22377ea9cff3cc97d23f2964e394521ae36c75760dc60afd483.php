<?php

/* shopping_cart/parts/item.image.twig */
class __TwigTemplate_dc222824f49a0dba8d98d79bd78f827e58ba55a52c1e1e44a3509d0f39e226ea extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "hasImage", array(), "method")) {
            // line 7
            echo "  <td class=\"item-thumbnail\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getImage", array(), "method"), "alt" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "maxWidth" => "80", "maxHeight" => "80", "centerImage" => "0"))), "html", null, true);
            echo "</a></td>
";
        }
        // line 9
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "hasImage", array(), "method")) {
            // line 10
            echo "  <td class=\"item-thumbnail\">&nbsp;</td>
";
        }
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  29 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : thumbnail*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="20")*/
/*  #}*/
/* {% if this.item.hasImage() %}*/
/*   <td class="item-thumbnail"><a href="{{ this.item.getURL() }}">{{ widget('\\XLite\\View\\Image', image=this.item.getImage(), alt=this.item.getName(), maxWidth='80', maxHeight='80', centerImage='0') }}</a></td>*/
/* {% endif %}*/
/* {% if not this.item.hasImage() %}*/
/*   <td class="item-thumbnail">&nbsp;</td>*/
/* {% endif %}*/
/* */
