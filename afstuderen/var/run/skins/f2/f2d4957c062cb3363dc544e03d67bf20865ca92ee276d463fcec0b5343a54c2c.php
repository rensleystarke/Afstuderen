<?php

/* modules/XC/NewsletterSubscriptions/form/parts/error.twig */
class __TwigTemplate_f2f0bc3b9196c64bbee4aaaa308c07479374d5c014e4a8ee5713c33ba26fa66c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getErrorMessage", array(), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NewsletterSubscriptions/form/parts/error.twig";
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
/*  # @ListChild (list="NewsletterSubscriptions.footer.error-block", weight="100")*/
/*  #}*/
/* */
/* {{ this.getErrorMessage() }}*/
/* */
