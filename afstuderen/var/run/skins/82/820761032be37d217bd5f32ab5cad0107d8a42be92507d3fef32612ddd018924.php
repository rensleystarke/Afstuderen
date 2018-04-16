<?php

/* layout/content/main.center.center.twig */
class __TwigTemplate_b8a0e7635189554553d1020babc72a7c38cbe064d36e0846869c62a4dea2df82 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"content\" class=\"column\">
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTrialNoticeAutoDisplay", array(), "method")) {
            // line 9
            echo "    <iframe src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildUrl", array(0 => "trial_notice"), "method"), "html", null, true);
            echo "\" class=\"trial-notice\" frameborder=\"0\" scrolling=\"no\" width=\"752\" height=\"387\" style=\"margin: 0 auto; display: block;\" onload=\"this.style.height = this.contentWindow.document.body.scrollHeight + 'px';\"></iframe>
  ";
        }
        // line 11
        echo "  <div class=\"section\">
    <a id=\"main-content\"></a>
    ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ListContainer", "inner" => "layout/content/center.twig", "group" => "center"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/content/main.center.center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Center box*/
/*  #*/
/*  # @ListChild (list="layout.main.center", weight="200")*/
/*  #}*/
/* */
/* <div id="content" class="column">*/
/*   {% if this.isTrialNoticeAutoDisplay() %}*/
/*     <iframe src="{{ this.buildUrl('trial_notice') }}" class="trial-notice" frameborder="0" scrolling="no" width="752" height="387" style="margin: 0 auto; display: block;" onload="this.style.height = this.contentWindow.document.body.scrollHeight + 'px';"></iframe>*/
/*   {% endif %}*/
/*   <div class="section">*/
/*     <a id="main-content"></a>*/
/*     {{ widget('XLite\\View\\ListContainer', inner='layout/content/center.twig', group='center') }}*/
/*   </div>*/
/* </div>*/
/* */
