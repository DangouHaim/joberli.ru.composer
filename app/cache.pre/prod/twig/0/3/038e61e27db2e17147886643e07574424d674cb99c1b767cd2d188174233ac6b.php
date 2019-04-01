<?php

/* FOSUserBundle:User:edit.html.twig */
class __TwigTemplate_3db238e45cedd2e145b071b5a085614c1114cbf438824c84f6fa419973112b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "FOSUserBundle:User:edit.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

    <div class=\"portlet light\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <i class=\"icon-settings font-green-sharp\"></i>
                <span class=\"caption-subject font-green-sharp bold uppercase\">
                Редактирование пользователя ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo " </span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <div class=\"tabbable\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"\">
                        <a href=\"#tab_general\" data-toggle=\"tab\" aria-expanded=\"false\">
                            Основное
                        </a>
                    </li>
                    <li class=\"active\">
                        <a href=\"#tab_meta\" data-toggle=\"tab\" aria-expanded=\"true\">
                            Доп. Информация
                        </a>
                    </li>
                </ul>
                <div class=\"tab-content no-space\">
                    <div class=\"tab-pane\" id=\"tab_general\">
                        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => "user_bundle_user_admin_type")));
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    </div>
                    <div class=\"tab-pane active\" id=\"tab_meta\">
                        ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:User:editSettings", array("id" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "userData", array()), "id", array()))));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  70 => 32,  66 => 31,  62 => 30,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* */
/*     <div class="portlet light">*/
/*         <div class="portlet-title">*/
/*             <div class="caption">*/
/*                 <i class="icon-settings font-green-sharp"></i>*/
/*                 <span class="caption-subject font-green-sharp bold uppercase">*/
/*                 Редактирование пользователя {{ user.username }} </span>*/
/*             </div>*/
/*         </div>*/
/*         <div class="portlet-body">*/
/*             <div class="tabbable">*/
/*                 <ul class="nav nav-tabs">*/
/*                     <li class="">*/
/*                         <a href="#tab_general" data-toggle="tab" aria-expanded="false">*/
/*                             Основное*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         <a href="#tab_meta" data-toggle="tab" aria-expanded="true">*/
/*                             Доп. Информация*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <div class="tab-content no-space">*/
/*                     <div class="tab-pane" id="tab_general">*/
/*                         {{ form_start(form, {'attr': {'id': 'user_bundle_user_admin_type'}}) }}*/
/*                         {{ form_widget(form) }}*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                     <div class="tab-pane active" id="tab_meta">*/
/*                         {{ render(controller('UserBundle:User:editSettings', {'id': user.userData.id})) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
