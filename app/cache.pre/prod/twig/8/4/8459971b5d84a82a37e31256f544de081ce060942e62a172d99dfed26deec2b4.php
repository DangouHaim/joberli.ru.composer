<?php

/* FOSUserBundle:User:settings.html.twig */
class __TwigTemplate_5711b37f310622488e151f9f770855a364656e067495ac6e8a21b43dbc84ece0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "FOSUserBundle:User:settings.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_cover' => array($this, 'block_page_cover'),
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
        echo "    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption font-green-sharp\">
                        <i class=\"icon-settings font-green-sharp\"></i>
                        <span class=\"caption-subject bold uppercase\">Настройка профиля</span>
                        <span class=\"caption-helper hide\"></span>
                    </div>
                </div>
                <div class=\"portlet-body\">
                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_page_cover($context, array $blocks = array())
    {
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  63 => 24,  53 => 17,  49 => 16,  45 => 15,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-4">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption font-green-sharp">*/
/*                         <i class="icon-settings font-green-sharp"></i>*/
/*                         <span class="caption-subject bold uppercase">Настройка профиля</span>*/
/*                         <span class="caption-helper hide"></span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet-body">*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_widget(form) }}*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block page_cover %}*/
/* */
/* {% endblock %}*/
/* */
/* */
