<?php

/* signin/parts/continue.email.twig */
class __TwigTemplate_d24ecd02fdddbc0e71b771304daca75bfd17931b53375b0cc71677b5809512fc extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"email-field field\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "required" => "true", "fieldName" => "email", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "fieldOnly" => "false"))), "html", null, true);
        echo "
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "signin/parts/continue.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Field : email*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title.continue", weight="100")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="email-field field">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', required='true', fieldName='email', label=t('Email'), fieldOnly='false') }}*/
/*   </td>*/
/* </tr>*/
