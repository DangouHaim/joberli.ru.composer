<?php

/* FOSMessageBundle:Message:createDialog.html.twig */
class __TwigTemplate_16a5f31ed55d06f95f2667402be56473bbf33841e4935c3bda2754836bc36bd7 extends Twig_Template
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
    <h4 class=\"modal-title\">Написать сообщение</h4>
</div>
<form id=\"createDialogForm\" method=\"post\" id=\"\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("msg_create_dialog", array("recipient" => $this->getAttribute((isset($context["recipient"]) ? $context["recipient"] : null), "id", array()))), "html", null, true);
        echo "\">
    <div class=\"modal-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4>Сообщение</h4>
                <div class=\"form-group\">
                    Получатель: <b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipient"]) ? $context["recipient"] : null), "username", array()), "html", null, true);
        echo "</b>
                </div>
                <div class=\"form-group\">
                    <textarea name=\"message\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control\"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Отмена</button>
        <button type=\"submit\" class=\"btn blue\">Отправить сообщение</button>
    </div>
</form>
<script>
    \$('#createDialogForm').ajaxForm({
        dataTape: 'json',
        success: function () {
            \$('#ajax-modal').modal('hide');
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:createDialog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  25 => 5,  19 => 1,);
    }
}
/* <div class="modal-header">*/
/*     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>*/
/*     <h4 class="modal-title">Написать сообщение</h4>*/
/* </div>*/
/* <form id="createDialogForm" method="post" id="" action="{{ path('msg_create_dialog', {'recipient': recipient.id}) }}">*/
/*     <div class="modal-body">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4>Сообщение</h4>*/
/*                 <div class="form-group">*/
/*                     Получатель: <b>{{ recipient.username }}</b>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <textarea name="message" id="" cols="30" rows="7" class="form-control"></textarea>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <button type="button" class="btn default" data-dismiss="modal">Отмена</button>*/
/*         <button type="submit" class="btn blue">Отправить сообщение</button>*/
/*     </div>*/
/* </form>*/
/* <script>*/
/*     $('#createDialogForm').ajaxForm({*/
/*         dataTape: 'json',*/
/*         success: function () {*/
/*             $('#ajax-modal').modal('hide');*/
/*         }*/
/*     });*/
/* </script>*/
