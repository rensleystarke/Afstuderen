<?php

/* layout/footer/main.footer.twig */
class __TwigTemplate_578973f3596722e868b91feca7d4659ea7102024c6530a52b6052132ac4a3716 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"footer-area\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.footer.before"))), "html", null, true);
        echo "
    <div class=\"container\">
        ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.footer"))), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/footer/main.footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Footer*/
/*  #*/
/*  # @ListChild (list="layout.footer", weight="500")*/
/*  #}*/
/* */
/* <div id="footer-area">*/
/*     {{ widget_list('layout.main.footer.before') }}*/
/*     <div class="container">*/
/*         {{ widget_list('layout.main.footer') }}*/
/*     </div>*/
/* </div>*/
/* */
