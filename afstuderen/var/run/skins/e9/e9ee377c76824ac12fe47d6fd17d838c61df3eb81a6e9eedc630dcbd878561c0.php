<?php

/* location/home.twig */
class __TwigTemplate_c84b6e1f88c64c7f6c24911c773c94cfb717895fa74d276a927624f6ef96cd1d extends \XLite\Core\Templating\Twig\Template
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
<li class=\"location-node\">
    <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method"), "html", null, true);
        echo "\" class=\"location-title home-link\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method");
        echo "</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "location/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Home location node*/
/*  #}*/
/* */
/* <li class="location-node">*/
/*     <a href="{{ this.getLink() }}" class="location-title home-link">{{ this.getName()|raw }}</a>*/
/* </li>*/
/* */
