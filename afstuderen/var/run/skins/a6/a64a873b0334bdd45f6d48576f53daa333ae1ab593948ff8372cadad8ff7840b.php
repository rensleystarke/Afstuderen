<?php

/* modules/CDev/GoSocial/page/parts/share.twig */
class __TwigTemplate_e8ccf56c4be1b42a34b8e496e6a7c75553cdcb4c7686e3b7147c5e92205b6555 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "showSocialButtons", array())) {
            // line 7
            echo "  <div class=\"share clearfix\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "buttons.share"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/GoSocial/page/parts/share.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Share buttons*/
/*  #*/
/*  # @ListChild (list="static_page.info", weight="100000")*/
/*  #}*/
/* {% if this.page.showSocialButtons %}*/
/*   <div class="share clearfix">*/
/*     {{ widget_list('buttons.share') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
