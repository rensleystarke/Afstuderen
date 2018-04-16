<?php

/* shopping_cart/parts/button.clear.twig */
class __TwigTemplate_45f9479d6510f5d143f0e61cf42fc59c545954eece32896efbfc66846c89d8d8 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Cart\\Clear");        // line 7
        echo "  <a
    href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart", "clear")), "html", null, true);
        echo "\"
    onclick=\"javascript: return confirm('";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You are sure to clear your cart?")), "html", null, true);
        echo "') && !jQuery(this).parents('form').eq(0).submit();\"
    class=\"clear-bag\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Clear bag")), "html", null, true);
        echo "</a>
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/button.clear.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  23 => 8,  20 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Clear bag button*/
/*  #*/
/*  # @ListChild (list="cart.buttons", weight="20")*/
/*  #}*/
/* {% form '\\XLite\\View\\Form\\Cart\\Clear' %}*/
/*   <a*/
/*     href="{{ url('cart', 'clear') }}"*/
/*     onclick="javascript: return confirm('{{ t('You are sure to clear your cart?') }}') && !jQuery(this).parents('form').eq(0).submit();"*/
/*     class="clear-bag">{{ t('Clear bag') }}</a>*/
/* {% endform %}*/
/* */
