<?php

/* @Ad/AdOrder/block/status.html.twig */
class __TwigTemplate_7c6dd9ad608a84a4be00684e8c21262d6ee96cfc85f8ccfe522e7057d292afb0 extends Twig_Template
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
        // line 1
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 0))) {
            // line 2
            echo "    <span class=\"badge badge-info\">Ожидание</span>
";
        } elseif (($this->getAttribute(        // line 3
(isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 1))) {
            // line 4
            echo "    <span class=\"badge badge-success\">В процессе</span>
";
        } elseif (($this->getAttribute(        // line 5
(isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 2))) {
            // line 6
            echo "    <span class=\"badge badge-default\">Заказ закрыт</span>
";
        } else {
            // line 8
            echo "    ";
            if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "seller", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                // line 9
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_pay", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"badge badge-default tooltips\" title=\"Оплатить\">Не оплачен</a>
    ";
            } else {
                // line 11
                echo "        <span class=\"badge badge-default\">Не оплачен</span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@Ad/AdOrder/block/status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  38 => 9,  35 => 8,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if order.payStatus and order.status == 0 %}*/
/*     <span class="badge badge-info">Ожидание</span>*/
/* {% elseif order.payStatus and order.status == 1 %}*/
/*     <span class="badge badge-success">В процессе</span>*/
/* {% elseif order.payStatus and order.status == 2 %}*/
/*     <span class="badge badge-default">Заказ закрыт</span>*/
/* {% else %}*/
/*     {% if order.seller == app.user %}*/
/*         <a href="{{ path('ad_order_pay', {'id': order.id}) }}" class="badge badge-default tooltips" title="Оплатить">Не оплачен</a>*/
/*     {% else %}*/
/*         <span class="badge badge-default">Не оплачен</span>*/
/*     {% endif %}*/
/* {% endif %}*/
