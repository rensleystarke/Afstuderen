<?php

/* header/parts/parts.css/css_resource.twig */
class __TwigTemplate_7d221492078bf812334060a8dedc12c0269f0045d18ad52687af329e0a196348 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "async", array())) {
            // line 6
            echo "  <link href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "url", array()), "html", null, true);
            echo "\"
        rel=\"preload\"
        as=\"style\" onload='this.onload=null;this.rel=\"stylesheet\"'
        type=\"text/css\"
        media=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "media", array()), "html", null, true);
            echo "\" />
  <noscript>
    <link href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "url", array()), "html", null, true);
            echo "\"
          rel=\"stylesheet\"
          type=\"text/css\"
          media=\"";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "media", array()), "html", null, true);
            echo "\" />
  </noscript>
";
        } else {
            // line 18
            echo "  <link href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "url", array()), "html", null, true);
            echo "\"
        rel=\"stylesheet\"
        type=\"text/css\"
        media=\"";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "media", array()), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "header/parts/parts.css/css_resource.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  49 => 18,  43 => 15,  37 => 12,  32 => 10,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # CSS resource*/
/*  #}*/
/* */
/* {% if this.async %}*/
/*   <link href="{{ this.url }}"*/
/*         rel="preload"*/
/*         as="style" onload='this.onload=null;this.rel="stylesheet"'*/
/*         type="text/css"*/
/*         media="{{ this.media }}" />*/
/*   <noscript>*/
/*     <link href="{{ this.url }}"*/
/*           rel="stylesheet"*/
/*           type="text/css"*/
/*           media="{{ this.media }}" />*/
/*   </noscript>*/
/* {% else %}*/
/*   <link href="{{ this.url }}"*/
/*         rel="stylesheet"*/
/*         type="text/css"*/
/*         media="{{ this.media }}" />*/
/* {% endif %}*/
/* */
