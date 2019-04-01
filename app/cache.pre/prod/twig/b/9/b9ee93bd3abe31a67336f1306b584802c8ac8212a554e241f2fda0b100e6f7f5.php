<?php

/* FOSUserBundle:User:editSettings.html.twig */
class __TwigTemplate_0a284171376594a7a696cfb7984c88863e758365401da76e039e24f02eb65cb4 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSettings"]) ? $context["formSettings"] : null), 'form_start', array("attr" => array("id" => "user_bundle_user_admin_settings_type")));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSettings"]) ? $context["formSettings"] : null), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSettings"]) ? $context["formSettings"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:editSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ form_start(formSettings, {'attr': {'id': 'user_bundle_user_admin_settings_type'}}) }}*/
/* {{ form_widget(formSettings) }}*/
/* {{ form_end(formSettings) }}*/
