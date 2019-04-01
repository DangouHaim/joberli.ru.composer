<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f3d9ac78be61988f2f84d85fdb010ab27f51f703ba60dbbafcb1c18d9c48ac3c extends Twig_Template
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
        // line 2
        echo "<div class=\"row\">
    <div class=\"col-lg-4 col-lg-offset-4\">
        <div class=\"portlet light\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-login\"></i>&nbsp;
                    <span class=\"caption-subject bold uppercase\"> Регистрация</span>
                </div>
            </div>
            <div class=\"portlet body\">

                ";
        // line 13
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors')) {
            // line 14
            echo "                    <div class=\"alert alert-danger\">
                        <button class=\"close\" data-close=\"alert\"></button>
                        <span>";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "</span>
                    </div>
                ";
        }
        // line 19
        echo "
                <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                    <p class=\"hint\">
                        Заполните форму:
                    </p>
                    <div class=\"form-group\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label', array("label_attr" => array("class" => "control-label visible-ie8 visible-ie9")));
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "control-label visible-ie8 visible-ie9")));
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => $this->env->getExtension('translator')->trans("form.email", array(), "FOSUserBundle"))));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label visible-ie8 visible-ie9")));
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => $this->env->getExtension('translator')->trans("form.password", array(), "FOSUserBundle"))));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label visible-ie8 visible-ie9")));
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => $this->env->getExtension('translator')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "
                    </div>

                    <div class=\"form-actions\">
                        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" id=\"register-back-btn\" class=\"btn btn-default\">Назад</a>
                        <button type=\"submit\" id=\"register-submit-btn\" class=\"btn btn-success uppercase pull-right\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    </div>
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  102 => 43,  98 => 42,  91 => 38,  87 => 37,  81 => 34,  77 => 33,  71 => 30,  67 => 29,  61 => 26,  57 => 25,  47 => 20,  44 => 19,  38 => 16,  34 => 14,  32 => 13,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="row">*/
/*     <div class="col-lg-4 col-lg-offset-4">*/
/*         <div class="portlet light">*/
/*             <div class="portlet-title">*/
/*                 <div class="caption">*/
/*                     <i class="icon-login"></i>&nbsp;*/
/*                     <span class="caption-subject bold uppercase"> Регистрация</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="portlet body">*/
/* */
/*                 {% if form_errors(form) %}*/
/*                     <div class="alert alert-danger">*/
/*                         <button class="close" data-close="alert"></button>*/
/*                         <span>{{ form_errors(form) }}</span>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*                     <p class="hint">*/
/*                         Заполните форму:*/
/*                     </p>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.username, null, {'label_attr': {'class': 'control-label visible-ie8 visible-ie9'}}) }}*/
/*                         {{ form_widget(form.username, {'attr': {'class': 'form-control placeholder-no-fix', 'placeholder': 'form.username'|trans }}) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.email, null, {'label_attr': {'class': 'control-label visible-ie8 visible-ie9'}}) }}*/
/*                         {{ form_widget(form.email, {'attr': {'class': 'form-control placeholder-no-fix', 'placeholder': 'form.email'|trans }}) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.plainPassword.first, null, {'label_attr': {'class': 'control-label visible-ie8 visible-ie9'}}) }}*/
/*                         {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control placeholder-no-fix', 'placeholder': 'form.password'|trans }}) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.plainPassword.second, null, {'label_attr': {'class': 'control-label visible-ie8 visible-ie9'}}) }}*/
/*                         {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control placeholder-no-fix', 'placeholder': 'form.password_confirmation'|trans }}) }}*/
/*                     </div>*/
/* */
/*                     <div class="form-actions">*/
/*                         <a href="{{ path('fos_user_security_login') }}" id="register-back-btn" class="btn btn-default">Назад</a>*/
/*                         <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">{{ 'registration.submit'|trans }}</button>*/
/*                     </div>*/
/*                     {{ form_widget(form) }}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
