<?php

/* @Ad/AdOrder/adopt.html.twig */
class __TwigTemplate_ba860389ff31f863193939c45e98cb80dacbf732e5de0dadabbe9b4b1bad35bb extends Twig_Template
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
        echo "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
    <h4 class=\"modal-title\">Принять заказ #";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "</h4>
</div>
<div class=\"modal-body\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <p>
                Вы действительно хотите выполнить заказ #";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "?
            </p>
        </div>
    </div>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Отмена</button>
    <button type=\"button\" class=\"btn blue\" onclick=\"adOrderAdopt(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo ")\">Принять</button>
</div>";
    }

    public function getTemplateName()
    {
        return "@Ad/AdOrder/adopt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  32 => 9,  23 => 3,  19 => 1,);
    }
}
/* <div class="modal-header">*/
/*     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>*/
/*     <h4 class="modal-title">Принять заказ #{{ order.id }}</h4>*/
/* </div>*/
/* <div class="modal-body">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <p>*/
/*                 Вы действительно хотите выполнить заказ #{{ order.id }}?*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="modal-footer">*/
/*     <button type="button" class="btn default" data-dismiss="modal">Отмена</button>*/
/*     <button type="button" class="btn blue" onclick="adOrderAdopt({{ order.id }})">Принять</button>*/
/* </div>*/
