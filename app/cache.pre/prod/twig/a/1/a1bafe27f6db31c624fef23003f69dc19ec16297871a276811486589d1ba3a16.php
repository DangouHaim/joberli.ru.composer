<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_41d94880ea77ba6ce72f40d5cf8705450b933dd2fbb9cf0b50aeed64298b4df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "      <div class=\"row\">
        <div class=\"col-lg-4 col-lg-offset-4\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption\">
                        <i class=\"icon-login\"></i>&nbsp;
                        <span class=\"caption-subject bold uppercase\"> Авторизация</span>
                    </div>
                </div>
                <div class=\"portlet body\">

                    ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 18
            echo "                        <div class=\"alert alert-danger\">
                            <button class=\"close\" data-close=\"alert\"></button>
                            <span>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</span>
                        </div>
                    ";
        }
        // line 23
        echo "
                    <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\" role=\"form\">

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                        <div class=\"form-group\">
                            <label for=\"inputUsername\" class=\"col-md-3 control-label\">Логин:</label>
                            <div class=\"col-md-8\">
                                <div class=\"input-icon right\">
                                    <i class=\"fa fa-envelope\"></i>
                                    <input type=\"text\" class=\"form-control\" id=\"inputUsername\"  name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputPassword1\" class=\"col-md-3 control-label\">Пароль:</label>
                            <div class=\"col-md-8\">
                                <div class=\"input-icon right\">
                                    <i class=\"fa fa-user\"></i>
                                    <input type=\"password\" class=\"form-control\" id=\"inputPassword1\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-3 col-md-8\">
                                <div class=\"checkbox\">
                                    <label class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <button type=\"submit\" class=\"btn green\">Войти</button><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"btn btn-link\">Забыли пароль?</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=\"create-account\">
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" id=\"register-btn\" class=\"btn blue btn btn-block btn-lg uppercase\">Регистрация</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 64,  107 => 57,  97 => 50,  86 => 42,  74 => 33,  64 => 26,  59 => 24,  56 => 23,  50 => 20,  46 => 18,  44 => 17,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*       <div class="row">*/
/*         <div class="col-lg-4 col-lg-offset-4">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption">*/
/*                         <i class="icon-login"></i>&nbsp;*/
/*                         <span class="caption-subject bold uppercase"> Авторизация</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet body">*/
/* */
/*                     {% if error %}*/
/*                         <div class="alert alert-danger">*/
/*                             <button class="close" data-close="alert"></button>*/
/*                             <span>{{ error.messageKey|trans(error.messageData, 'security') }}</span>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                     <form action="{{ path("fos_user_security_check") }}" method="post" class="form-horizontal" role="form">*/
/* */
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="inputUsername" class="col-md-3 control-label">Логин:</label>*/
/*                             <div class="col-md-8">*/
/*                                 <div class="input-icon right">*/
/*                                     <i class="fa fa-envelope"></i>*/
/*                                     <input type="text" class="form-control" id="inputUsername"  name="_username" value="{{ last_username }}" required="required">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="inputPassword1" class="col-md-3 control-label">Пароль:</label>*/
/*                             <div class="col-md-8">*/
/*                                 <div class="input-icon right">*/
/*                                     <i class="fa fa-user"></i>*/
/*                                     <input type="password" class="form-control" id="inputPassword1" placeholder="{{ 'security.login.password'|trans }}" id="password" name="_password" required="required">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-offset-3 col-md-8">*/
/*                                 <div class="checkbox">*/
/*                                     <label class="checkbox">*/
/*                                         <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>{{ 'security.login.remember_me'|trans }}*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-offset-3 col-md-9">*/
/*                                 <button type="submit" class="btn green">Войти</button><a href="{{ path('fos_user_resetting_request') }}" class="btn btn-link">Забыли пароль?</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/* */
/*                 <div class="create-account">*/
/*                     <a href="{{ path('fos_user_registration_register') }}" id="register-btn" class="btn blue btn btn-block btn-lg uppercase">Регистрация</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
