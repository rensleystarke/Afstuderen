<?php

/* modules/XC/CustomerAttachments/cart_item_info_attachment.twig */
class __TwigTemplate_350e3521b3b4c9bd373ca3a5751fcea5b7baeab104756e9c14a4068f1ec44695 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "isCustomerAttachable", array(), "method")) {
            // line 5
            echo "  <p class=\"item-attachment\">
      <input type=\"hidden\" name=\"item_id\" value=\"";
            // line 6
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getItemId", array(), "method"), "html", null, true);
            echo "\" />
      <a class=\"customer-attachment\" href=\"cart.php?target=customer_attachments&item_id=";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getItemId", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Attach files")), "html", null, true);
            echo "</a>
      ";
            // line 8
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttachedFilesQuantity", array(), "method")) {
                // line 9
                echo "        <span class=\"files-attached\">";
                echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("X file(s) attached", array("quantity" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttachedFilesQuantity", array(), "method"))));
                echo "</span>
      ";
            }
            // line 11
            echo "      ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAttachmentNeed", array(), "method")) {
                // line 12
                echo "        <span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You have to attach file")), "html", null, true);
                echo "</span>
      ";
            }
            // line 14
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/CustomerAttachments/cart_item_info_attachment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  45 => 12,  42 => 11,  36 => 9,  34 => 8,  28 => 7,  24 => 6,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Open popup link*/
/*  #}*/
/* {% if this.item.isCustomerAttachable() %}*/
/*   <p class="item-attachment">*/
/*       <input type="hidden" name="item_id" value="{{ this.item.getItemId() }}" />*/
/*       <a class="customer-attachment" href="cart.php?target=customer_attachments&item_id={{ this.item.getItemId() }}">{{ t('Attach files') }}</a>*/
/*       {% if this.getAttachedFilesQuantity() %}*/
/*         <span class="files-attached">{{ t('X file(s) attached', {'quantity': this.getAttachedFilesQuantity()})|raw }}</span>*/
/*       {% endif %}*/
/*       {% if this.isAttachmentNeed() %}*/
/*         <span>{{ t('You have to attach file') }}</span>*/
/*       {% endif %}*/
/*   </p>*/
/* {% endif %}*/
