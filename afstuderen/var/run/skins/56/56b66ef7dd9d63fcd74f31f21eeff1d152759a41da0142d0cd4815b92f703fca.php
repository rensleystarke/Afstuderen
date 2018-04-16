<?php

/* modules/XC/NewsletterSubscriptions/form/parts/success.twig */
class __TwigTemplate_9819e3b1729e536d57d08bb7d54a6ba8cb12968a4358fa7a7870713e17efc9a3 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSuccessMessage", array(), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NewsletterSubscriptions/form/parts/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Subscribe block*/
/*  #*/
/*  # @ListChild (list="NewsletterSubscriptions.footer.success-block", weight="100")*/
/*  #}*/
/* */
/* {{ this.getSuccessMessage() }}*/
/* */
