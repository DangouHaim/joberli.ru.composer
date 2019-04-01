<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_c02c3ba27baff57f3ba78baabc121ecac7f52cd463851babf81885bfe05cd6b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
        $this->blocks = array(
            'level_style' => array($this, 'block_level_style'),
            'level_scripts' => array($this, 'block_level_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_level_style($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/admin/pages/css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 6
    public function block_level_scripts($context, array $blocks = array())
    {
        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/message/js/message.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
    <div class=\"portlet light\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <i class=\"fa fa-envelope-o\"></i> Диалог: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "subject", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"portlet-body\">
            <div style=\"height: 400px; overflow-y: scroll; width: auto;\" id=\"dialogBodyContainer\">
                ";
        // line 20
        echo twig_include($this->env, $context, "@Message/Message/block/messages.html.twig", array("messages" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "messages", array())));
        echo "
            </div>

            <h3>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

            <form id=\"formSendMessage\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                <input type=\"submit\" class=\"btn btn-primary pull-right\" />
            </form>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  83 => 27,  78 => 25,  73 => 23,  67 => 20,  59 => 15,  53 => 11,  50 => 10,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* {% block level_style %}*/
/* <link href="{{ asset('bundles/metronic/admin/pages/css/timeline.css') }}" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
/* */
/* {% block level_scripts %}*/
/*     <script src="{{ asset('bundles/message/js/message.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="portlet light">*/
/*         <div class="portlet-title">*/
/*             <div class="caption">*/
/*                 <i class="fa fa-envelope-o"></i> Диалог: {{ thread.subject }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="portlet-body">*/
/*             <div style="height: 400px; overflow-y: scroll; width: auto;" id="dialogBodyContainer">*/
/*                 {{ include('@Message/Message/block/messages.html.twig', {'messages': thread.messages}) }}*/
/*             </div>*/
/* */
/*             <h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>*/
/* */
/*             <form id="formSendMessage" action="{{ url('fos_message_thread_view', {'threadId': thread.id}) }}" method="post">*/
/*                 <div class="form-group">*/
/*                     {{ form_widget(form.body, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*                 {{ form_widget(form) }}*/
/*                 <input type="submit" class="btn btn-primary pull-right" />*/
/*             </form>*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
