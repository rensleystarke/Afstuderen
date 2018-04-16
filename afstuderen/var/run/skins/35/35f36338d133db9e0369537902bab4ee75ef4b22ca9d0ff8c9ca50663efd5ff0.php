<?php

/* modules/XC/Reviews/average_rating/form.twig */
class __TwigTemplate_6ba32d9a1acb93f729c1888c6e4c34a8910748d73748be5a29fc03eaf7351ca2 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.product.rating.form.content"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/average_rating/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 8,);
    }
}
/* {##*/
/*  # Rating*/
/*  #*/
/*  # @ListChild (list="reviews.product.rating", weight="100")*/
/*  # @ListChild (list="reviews.page.rating", weight="100")*/
/*  # @ListChild (list="reviews.tab.rating", weight="200")*/
/*  #}*/
/* {{ widget_list('reviews.product.rating.form.content') }}*/
/* */
