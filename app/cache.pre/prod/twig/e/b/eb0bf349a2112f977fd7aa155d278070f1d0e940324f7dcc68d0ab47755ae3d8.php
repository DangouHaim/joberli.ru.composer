<?php

/* FOSUserBundle:User:index.html.twig */
class __TwigTemplate_9c58317b957d0221f42db5327f15d20ff73c503519db79961845e2f4a6bcb59f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "FOSUserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'page_cover' => array($this, 'block_page_cover'),
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
    public function block_page_cover($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"row\" style=\"background: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "coverImg", array()), "user_page_cover")), "html", null, true);
        echo "); background-size: cover; height: 400px;
            padding-top: 150px; margin-bottom: -230px; -webkit-filter: brightness(0.7);\">
            <div class=\"col-lg-12 text-center\">
            </div>
        </div>
        <h1 style=\"font-family: days; font-size: 50px; color: #fff;position: relative;text-align: center;top: -10px;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</h1>
    </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"row\" >
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-body\">
                    <div class=\"row\" style=\"margin-top: -100px;\">
                        <div class=\"col-lg-3\">
                                ";
        // line 20
        if (array_key_exists("avatar_form", $context)) {
            // line 21
            echo "                                    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["avatar_form"]) ? $context["avatar_form"] : null), 'form_start');
            echo "
                                        <label for=\"core_userbundle_userdata_avatar\" style=\"cursor:pointer;\" class=\"tooltips\" data-container=\"body\"
                                                title=\"Сменить фото\">
                                            <img class=\"img-circle\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatarImg", array())), "ava_user_page"), "html", null, true);
            echo "\" alt=\"\"/>
                                        ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avatar_form"]) ? $context["avatar_form"] : null), "avatar", array()), 'widget', array("attr" => array("style" => "display:none;", "onchange" => "this.form.submit()")));
            echo "
                                        </label>
                                    ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["avatar_form"]) ? $context["avatar_form"] : null), 'widget');
            echo "
                                    ";
            // line 28
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["avatar_form"]) ? $context["avatar_form"] : null), 'form_end');
            echo "
                                ";
        } else {
            // line 30
            echo "                                    <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatarImg", array())), "ava_user_page"), "html", null, true);
            echo "\" alt=\"\"/>
                                ";
        }
        // line 32
        echo "                        </div>
                        <div class=\"col-lg-1 pull-right\">
                            ";
        // line 34
        if (array_key_exists("cover_form", $context)) {
            // line 35
            echo "                                ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["cover_form"]) ? $context["cover_form"] : null), 'form_start');
            echo "
                                <label for=\"core_userbundle_userdata_cover\" style=\"cursor:pointer;color: #A5A5A5;display: block;background: #000;text-align: center;width: 70px;height: 70px;line-height: 80px;border-radius: 50%;opacity: 0.6;\" class=\"tooltips\" data-container=\"body\"
                                       title=\"Сменить обложку\">
                                    <i style=\"font-size: 28px;\" class=\"fa fa-camera\"></i>
                                    ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cover_form"]) ? $context["cover_form"] : null), "cover", array()), 'widget', array("attr" => array("style" => "display:none;", "onchange" => "this.form.submit()")));
            echo "
                                </label>
                                ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["cover_form"]) ? $context["cover_form"] : null), 'widget');
            echo "
                                ";
            // line 42
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["cover_form"]) ? $context["cover_form"] : null), 'form_end');
            echo "
                            ";
        }
        // line 44
        echo "                        </div>
                    </div>
                    ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "userData", array()), "about", array())) {
            // line 47
            echo "                    <div class=\"row\">
                        <div class=\"col-lg-8\" style=\"  font: 400 16px/24px 'Helvetica Neue', Helvetica, Arial, sans-serif;\">
                            <h2 style=\"font-weight: bold; font-family: days;\">О ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
            echo "</h2>
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "userData", array()), "about", array()), "html", null, true);
            echo "
                        </div>
                    </div>
                    ";
        }
        // line 54
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 58
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AdBundle:Ad:getByUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 58,  143 => 54,  136 => 50,  132 => 49,  128 => 47,  126 => 46,  122 => 44,  117 => 42,  113 => 41,  108 => 39,  100 => 35,  98 => 34,  94 => 32,  88 => 30,  83 => 28,  79 => 27,  74 => 25,  70 => 24,  63 => 21,  61 => 20,  53 => 14,  50 => 13,  43 => 10,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block page_cover %}*/
/*     <div class="container-fluid">*/
/*         <div class="row" style="background: url({{ asset(user.coverImg | imagine_filter('user_page_cover')) }}); background-size: cover; height: 400px;*/
/*             padding-top: 150px; margin-bottom: -230px; -webkit-filter: brightness(0.7);">*/
/*             <div class="col-lg-12 text-center">*/
/*             </div>*/
/*         </div>*/
/*         <h1 style="font-family: days; font-size: 50px; color: #fff;position: relative;text-align: center;top: -10px;">{{ user.username }}</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="row" >*/
/*         <div class="col-lg-12">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-body">*/
/*                     <div class="row" style="margin-top: -100px;">*/
/*                         <div class="col-lg-3">*/
/*                                 {% if avatar_form is defined %}*/
/*                                     {{ form_start(avatar_form) }}*/
/*                                         <label for="core_userbundle_userdata_avatar" style="cursor:pointer;" class="tooltips" data-container="body"*/
/*                                                 title="Сменить фото">*/
/*                                             <img class="img-circle" src="{{ asset(user.avatarImg)|imagine_filter('ava_user_page') }}" alt=""/>*/
/*                                         {{ form_widget(avatar_form.avatar, {'attr': {'style': 'display:none;', 'onchange': 'this.form.submit()'}}) }}*/
/*                                         </label>*/
/*                                     {{ form_widget(avatar_form) }}*/
/*                                     {{ form_end(avatar_form) }}*/
/*                                 {% else %}*/
/*                                     <img class="img-circle" src="{{ asset(user.avatarImg)|imagine_filter('ava_user_page') }}" alt=""/>*/
/*                                 {% endif %}*/
/*                         </div>*/
/*                         <div class="col-lg-1 pull-right">*/
/*                             {% if cover_form is defined %}*/
/*                                 {{ form_start(cover_form) }}*/
/*                                 <label for="core_userbundle_userdata_cover" style="cursor:pointer;color: #A5A5A5;display: block;background: #000;text-align: center;width: 70px;height: 70px;line-height: 80px;border-radius: 50%;opacity: 0.6;" class="tooltips" data-container="body"*/
/*                                        title="Сменить обложку">*/
/*                                     <i style="font-size: 28px;" class="fa fa-camera"></i>*/
/*                                     {{ form_widget(cover_form.cover, {'attr': {'style': 'display:none;', 'onchange': 'this.form.submit()'}}) }}*/
/*                                 </label>*/
/*                                 {{ form_widget(cover_form) }}*/
/*                                 {{ form_end(cover_form) }}*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     {% if user.userData.about %}*/
/*                     <div class="row">*/
/*                         <div class="col-lg-8" style="  font: 400 16px/24px 'Helvetica Neue', Helvetica, Arial, sans-serif;">*/
/*                             <h2 style="font-weight: bold; font-family: days;">О {{ user.username }}</h2>*/
/*                             {{ user.userData.about }}*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     {{ render(controller('AdBundle:Ad:getByUser', {'id': user.id})) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
