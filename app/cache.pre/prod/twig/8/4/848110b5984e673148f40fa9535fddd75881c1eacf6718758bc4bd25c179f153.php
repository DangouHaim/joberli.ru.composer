<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_9da22361e36b21e24abcdd39a0a6a3ecc4ffc22fced4924e0e8facf15170a395 extends Twig_Template
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
                    <span class=\"caption-subject bold uppercase\"> Забыли пароль?</span>
                </div>
            </div>
            <div class=\"portlet body\">

                ";
        // line 13
        if (array_key_exists("invalid_username", $context)) {
            // line 14
            echo "                    <div class=\"alert alert-danger\">
                        <button class=\"close\" data-close=\"alert\"></button>
                        <span>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
            echo "</span>
                    </div>
                ";
        }
        // line 19
        echo "
                <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                    <p>
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </p>
                    <div class=\"form-group\">
                        <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" name=\"username\"/>
                    </div>
                    <div class=\"form-actions\">
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" id=\"register-back-btn\" class=\"btn btn-default\">Назад</a>
                        <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  64 => 28,  58 => 25,  52 => 22,  47 => 20,  44 => 19,  38 => 16,  34 => 14,  32 => 13,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="row">*/
/*     <div class="col-lg-4 col-lg-offset-4">*/
/*         <div class="portlet light">*/
/*             <div class="portlet-title">*/
/*                 <div class="caption">*/
/*                     <i class="icon-login"></i>&nbsp;*/
/*                     <span class="caption-subject bold uppercase"> Забыли пароль?</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="portlet body">*/
/* */
/*                 {% if invalid_username is defined %}*/
/*                     <div class="alert alert-danger">*/
/*                         <button class="close" data-close="alert"></button>*/
/*                         <span>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</span>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                     <p>*/
/*                         {{ 'resetting.request.username'|trans }}*/
/*                     </p>*/
/*                     <div class="form-group">*/
/*                         <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{ 'resetting.request.username'|trans }}" name="username"/>*/
/*                     </div>*/
/*                     <div class="form-actions">*/
/*                         <a href="{{ path('fos_user_security_login') }}" id="register-back-btn" class="btn btn-default">Назад</a>*/
/*                         <button type="submit" class="btn btn-success uppercase pull-right">{{ 'resetting.request.submit'|trans }}</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
