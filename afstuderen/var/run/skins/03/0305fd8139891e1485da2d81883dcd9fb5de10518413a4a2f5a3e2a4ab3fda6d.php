<?php

/* header/parts/preloaded_labels.twig */
class __TwigTemplate_064882881e19066ad6279bbd22eb49424e93c6c9182d039fa0ffa5e2ad7d9fd6 extends \XLite\Core\Templating\Twig\Template
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
<script>
  window.xlite_preloaded_labels =";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreloadedLabelsJSON", array(), "method");
        echo ";
</script>
";
    }

    public function getTemplateName()
    {
        return "header/parts/preloaded_labels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1500")*/
/*  #}*/
/* */
/* <script>*/
/*   window.xlite_preloaded_labels ={{ this.getPreloadedLabelsJSON()|raw }};*/
/* </script>*/
/* */
