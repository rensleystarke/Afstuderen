<?php

/* jscontainer/parts/register_resources.twig */
class __TwigTemplate_01ae2234e79d40d586440acaa660ddca489113063dbd7dce3d5f85e85c799f18 extends \XLite\Core\Templating\Twig\Template
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
        echo "<script>
  (function () {
    var resources = ";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResourceRegistry", array(), "method");
        echo ";

    if (window.CoreAMD !== undefined) {
      require('js/core', function (core) {
        core.registerResources(resources);
      });
    } else {
      document.addEventListener('amd-ready', function (event) {
        require('js/core', function (core) {
          core.registerResources(resources);
        });
      });
    }
  })();
</script>
";
    }

    public function getTemplateName()
    {
        return "jscontainer/parts/register_resources.twig";
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
/*  # Cached JS part*/
/*  #*/
/*  # @ListChild (list="jscontainer.js", weight="300")*/
/*  #}*/
/* <script>*/
/*   (function () {*/
/*     var resources = {{ this.getResourceRegistry()|raw }};*/
/* */
/*     if (window.CoreAMD !== undefined) {*/
/*       require('js/core', function (core) {*/
/*         core.registerResources(resources);*/
/*       });*/
/*     } else {*/
/*       document.addEventListener('amd-ready', function (event) {*/
/*         require('js/core', function (core) {*/
/*           core.registerResources(resources);*/
/*         });*/
/*       });*/
/*     }*/
/*   })();*/
/* </script>*/
/* */
