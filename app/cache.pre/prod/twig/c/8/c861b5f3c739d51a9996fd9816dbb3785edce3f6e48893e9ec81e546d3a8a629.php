<?php

/* @Ad/AdOrder/remove.html.twig */
class __TwigTemplate_75400feadc4a2227200accb29c87e1d4e31da617ba8a35110d12dc17d30b3ab0 extends Twig_Template
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
    <h4 class=\"modal-title\">Удаление заказа #";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "</h4>
</div>
<div class=\"modal-body\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <p>
                Вы действительно хотите удалить #";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo " заказ?
            </p>
        </div>
    </div>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Отмена</button>
    <button type=\"button\" class=\"btn blue\" onclick=\"adOrderRemove(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo ")\">Удалить</button>
</div>";
    }

    public function getTemplateName()
    {
        return "@Ad/AdOrder/remove.html.twig";
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
/*     <h4 class="modal-title">Удаление заказа #{{ order.id }}</h4>*/
/* </div>*/
/* <div class="modal-body">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <p>*/
/*                 Вы действительно хотите удалить #{{ order.id }} заказ?*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="modal-footer">*/
/*     <button type="button" class="btn default" data-dismiss="modal">Отмена</button>*/
/*     <button type="button" class="btn blue" onclick="adOrderRemove({{ order.id }})">Удалить</button>*/
/* </div>*/
