<?php

/* mini_cart/horizontal/parts/item.name.twig */
class __TwigTemplate_a3ffd8e0a0d1b4dd9d7626053d20f793627278b0740aec1cdac5c6f2f0a4da8a extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"item-name\">
\t<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
        echo "</a>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "minicart.horizontal.item.name", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "mini_cart/horizontal/parts/item.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Display horizontal minicart item name*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.item", weight="10")*/
/*  #}*/
/* <div class="item-name">*/
/* 	<a href="{{ this.item.getURL() }}">{{ this.item.getName() }}</a>*/
/* 	{{ widget_list('minicart.horizontal.item.name', item=this.item) }}*/
/* </div>*/
/* */
