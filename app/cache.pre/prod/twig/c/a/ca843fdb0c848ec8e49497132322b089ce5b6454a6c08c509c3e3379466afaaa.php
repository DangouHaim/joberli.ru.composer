<?php

/* @User/User/shortProfile.html.twig */
class __TwigTemplate_d78a9c9bd7e4277144bcf2e30817a2c6fceaa645c28e24429e957a2a88be9015 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-lg-12 text-center\">
        <div class=\"portlet light shortPrfofile\">
            <div class=\"portlet-body\">
                <p>
                    <a style=\"font-size: 18px;\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">
                        <img class=\"img-circle\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatarImg", array()), "ava_user_page")), "html", null, true);
        echo "\" alt=\"\"/>
                    </a>

                    ";
        // line 10
        echo twig_include($this->env, $context, "AdBundle:Level:labelProfile.html.twig", array("user" => (isset($context["user"]) ? $context["user"] : null)));
        echo "
                </p>
                <p>
                    <a style=\"font-size: 18px;\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">
                        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "
                    </a>
                </p>
                <p>
                    ";
        // line 18
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isOnline", array())) {
            // line 19
            echo "                    <p>
                        <span class=\"text-mutted\">Online</span>
                    </p>
                    ";
        }
        // line 23
        echo "                    <span class=\"text-mutted\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array()), "html", null, true);
        echo " уровень</span>
                </p>
                ";
        // line 25
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())))) {
            // line 26
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("msg_create_dialog", array("recipient" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" data-target=\"#ajax-modal\" data-toggle=\"modal\" class=\"btn btn-block btn-default btn-lg\">
                        <i class=\"fa fa-envelope-o\"></i>&nbsp;Написать сообщение
                    </a>
                ";
        }
        // line 30
        echo "                <hr/>
                <div class=\"text-center\">
                    <ul class=\"social-icons social-icons-color\" style=\"display: inline-block\">
                        <li>
                            <a href=\"javascript:;\" data-original-title=\"vk\" class=\"vk\">
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" data-original-title=\"Goole Plus\" class=\"googleplus\">
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" data-original-title=\"facebook\" class=\"facebook\">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@User/User/shortProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  69 => 26,  67 => 25,  61 => 23,  55 => 19,  53 => 18,  46 => 14,  42 => 13,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-lg-12 text-center">*/
/*         <div class="portlet light shortPrfofile">*/
/*             <div class="portlet-body">*/
/*                 <p>*/
/*                     <a style="font-size: 18px;" href="{{ path('user_page', {'id': user.id}) }}">*/
/*                         <img class="img-circle" src="{{ asset( user.avatarImg | imagine_filter('ava_user_page') ) }}" alt=""/>*/
/*                     </a>*/
/* */
/*                     {{ include('AdBundle:Level:labelProfile.html.twig', {'user': user}) }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a style="font-size: 18px;" href="{{ path('user_page', {'id': user.id}) }}">*/
/*                         {{ user.username }}*/
/*                     </a>*/
/*                 </p>*/
/*                 <p>*/
/*                     {% if user.isOnline %}*/
/*                     <p>*/
/*                         <span class="text-mutted">Online</span>*/
/*                     </p>*/
/*                     {% endif %}*/
/*                     <span class="text-mutted">{{ user.level }} уровень</span>*/
/*                 </p>*/
/*                 {% if  is_granted('ROLE_USER') and app.user.id != user.id %}*/
/*                     <a href="{{ path('msg_create_dialog', {'recipient': user.id}) }}" data-target="#ajax-modal" data-toggle="modal" class="btn btn-block btn-default btn-lg">*/
/*                         <i class="fa fa-envelope-o"></i>&nbsp;Написать сообщение*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 <hr/>*/
/*                 <div class="text-center">*/
/*                     <ul class="social-icons social-icons-color" style="display: inline-block">*/
/*                         <li>*/
/*                             <a href="javascript:;" data-original-title="vk" class="vk">*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" data-original-title="Goole Plus" class="googleplus">*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" data-original-title="facebook" class="facebook">*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* </div>*/
