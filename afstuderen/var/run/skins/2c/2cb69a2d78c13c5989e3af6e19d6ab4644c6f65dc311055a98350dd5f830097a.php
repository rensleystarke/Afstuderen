<?php

/* layout/header/header_settings/email.twig */
class __TwigTemplate_264bf9bee1b467a34ba4ef0aefc19dddf09b5cbc1b4f939631b213407bc291cc extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLogged", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileLogin", array(), "method"))) {
            // line 9
            echo "\t<ul class='quick-links'>
\t\t<li class=\"account-email\">
\t\t\t<span>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileLogin", array(), "method"), "html", null, true);
            echo "</span>
\t\t</li>
\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header_settings/email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Log out link*/
/*  #*/
/*  # @ListChild (list="slidebar.additional-menu", weight="-100")*/
/*  # @ListChild (list="layout.header.right.settings", weight="-100")*/
/*  #}*/
/* */
/* {% if this.isLogged() and this.getProfileLogin() %}*/
/* 	<ul class='quick-links'>*/
/* 		<li class="account-email">*/
/* 			<span>{{ this.getProfileLogin() }}</span>*/
/* 		</li>*/
/* 	</ul>*/
/* {% endif %}*/
/* */
