<?php

/* items_list/product/parts/common.product-thumbnail.twig */
class __TwigTemplate_dff09c5a256f8530b3ca52a0d78808f909f30ea64f4e3c588da80216dfda888e extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo "<a
  href=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
        echo "\"
  class=\"product-thumbnail lazy-load\">
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImage", array(), "method"), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconHeight", array(), "method"), "alt" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconAlt", array(), "method"), "className" => "photo"))), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.product-thumbnail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 12,  22 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Item thumbnail*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info.photo", weight="10")*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.info.photo", weight="10")*/
/*  # @ListChild (list="itemsList.product.big_thumbnails.customer.info.photo", weight="10")*/
/*  # @ListChild (list="productBlock.info.photo", weight="100")*/
/*  #}*/
/* <a*/
/*   href="{{ this.getProductURL(this.categoryId) }}"*/
/*   class="product-thumbnail lazy-load">*/
/*   {{ widget('\\XLite\\View\\Image', image=this.product.getImage(), maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), alt=this.getIconAlt(), className='photo') }}*/
/* </a>*/
/* */
