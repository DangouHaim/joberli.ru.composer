<?php

/* AdBundle:AdCategory:show.html.twig */
class __TwigTemplate_128dfb053f6aeea6ff14b0521cd2de235adee309866739ddef0f9ad266761eb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:AdCategory:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cover", array()), "path", array()), "user_page_cover")), "html", null, true);
        echo "); background-size: cover; height: 400px;
                padding-top: 150px; margin-bottom: -230px; -webkit-filter: brightness(0.7);\">
        </div>
    </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"row
    ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cover", array(), "any", false, true), "fileName", array(), "any", true, true)) {
            // line 14
            echo "    row-category-show__title
    ";
        }
        // line 16
        echo "            \">
       <div class=\"col-lg-12\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</h1>
            ";
        // line 19
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array())) {
            // line 20
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array()), "slug", array()))), "html", null, true);
            echo "\">В ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array()), "title", array()), "html", null, true);
            echo "</a>
            ";
        }
        // line 22
        echo "       </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-3\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption\">
                        Категории
                    </div>
                </div>
                <div class=\"portlet-body todo-project-list-content\" style=\"height: auto;\">
                    <div class=\"todo-project-list\">
                        ";
        // line 35
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array())) {
            // line 36
            echo "                        <a style=\"
                                font-size: 14px;
                                font-weight: 900;
                                color: #525252;
                                display: block;
                                padding: 12px 4px;
                            \" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array()), "slug", array()))), "html", null, true);
            echo "\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array()), "title", array()), "html", null, true);
            echo "
                        </a>
                        <ul class=\"nav nav-pills nav-stacked\">
                            ";
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array(), "any", false, true), "child", array(), "any", true, true)) {
                // line 47
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array()), "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    echo "                                    <li
                                        ";
                    // line 49
                    if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))) {
                        // line 50
                        echo "                                            class=\"active\"
                                        ";
                    }
                    // line 52
                    echo "                                    >
                                        <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                    echo "\">
                                            ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                            ";
            }
            // line 59
            echo "
                        </ul>
                        ";
        } else {
            // line 62
            echo "                        <a style=\"
                                font-size: 14px;
                                font-weight: 900;
                                color: #525252;
                                display: block;
                                padding: 12px 4px;
                            \" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slug", array()))), "html", null, true);
            echo "\">
                            ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
            echo "
                        </a>
                        <ul class=\"nav nav-pills nav-stacked\">
                            ";
            // line 72
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "child", array(), "any", true, true)) {
                // line 73
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 74
                    echo "                                    <li>
                                        <a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                    echo "\">
                                            ";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                            ";
            }
            // line 81
            echo "
                        </ul>
                        ";
        }
        // line 84
        echo "                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-9\" style=\"padding-left: 30px;\">
            <div class=\"portlet light\">
                <div class=\"portlet-body\">
                    <div class=\"tabbable-line\">
                        <ul class=\"nav nav-tabs \">
                            <li class=\"active\">
                                <a href=\"#tab_rating\" data-toggle=\"tab\">
                                    По рейтингу </a>
                            </li>
                            <li>
                                <a href=\"#tab_recomendet\" data-toggle=\"tab\">
                                    Рекомендуемые </a>
                            </li>
                            <li>
                                <a href=\"#tab_new\" data-toggle=\"tab\">
                                    Новые </a>
                            </li>
                        </ul>


                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab_rating\">
                                ";
        // line 111
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AdBundle:Ad:showsCategory", array("categoryId" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))));
        echo "
                            </div>
                            <div class=\"tab-pane\" id=\"tab_recomendet\">
                                Рекомендуемые
                            </div>
                            <div class=\"tab-pane\" id=\"tab_new\">
                                Новые
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdBundle:AdCategory:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 111,  200 => 84,  195 => 81,  192 => 80,  182 => 76,  178 => 75,  175 => 74,  170 => 73,  168 => 72,  162 => 69,  158 => 68,  150 => 62,  145 => 59,  142 => 58,  132 => 54,  128 => 53,  125 => 52,  121 => 50,  119 => 49,  116 => 48,  111 => 47,  109 => 46,  103 => 43,  99 => 42,  91 => 36,  89 => 35,  74 => 22,  66 => 20,  64 => 19,  60 => 18,  56 => 16,  52 => 14,  50 => 13,  47 => 12,  44 => 11,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block page_cover %}*/
/*     <div class="container-fluid">*/
/*         <div class="row" style="background: url({{ asset(entity.cover.path | imagine_filter('user_page_cover')) }}); background-size: cover; height: 400px;*/
/*                 padding-top: 150px; margin-bottom: -230px; -webkit-filter: brightness(0.7);">*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content -%}*/
/*     <div class="row*/
/*     {% if (entity.cover.fileName is defined) %}*/
/*     row-category-show__title*/
/*     {% endif %}*/
/*             ">*/
/*        <div class="col-lg-12">*/
/*             <h1>{{ page.title }}</h1>*/
/*             {% if entity.parent %}*/
/*             <a href="{{ path('adcategory_show', {'slug': entity.parent.slug}) }}">В {{ entity.parent.title }}</a>*/
/*             {% endif %}*/
/*        </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-3">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption">*/
/*                         Категории*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet-body todo-project-list-content" style="height: auto;">*/
/*                     <div class="todo-project-list">*/
/*                         {% if entity.parent %}*/
/*                         <a style="*/
/*                                 font-size: 14px;*/
/*                                 font-weight: 900;*/
/*                                 color: #525252;*/
/*                                 display: block;*/
/*                                 padding: 12px 4px;*/
/*                             " href="{{ path('adcategory_show', {'slug': entity.parent.slug}) }}">*/
/*                             {{ entity.parent.title }}*/
/*                         </a>*/
/*                         <ul class="nav nav-pills nav-stacked">*/
/*                             {% if entity.parent.child is defined %}*/
/*                                 {% for item in entity.parent.child %}*/
/*                                     <li*/
/*                                         {% if item.id == entity.id %}*/
/*                                             class="active"*/
/*                                         {% endif %}*/
/*                                     >*/
/*                                         <a href="{{ path('adcategory_show', {'slug': item.slug}) }}">*/
/*                                             {{ item.title }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/* */
/*                         </ul>*/
/*                         {% else %}*/
/*                         <a style="*/
/*                                 font-size: 14px;*/
/*                                 font-weight: 900;*/
/*                                 color: #525252;*/
/*                                 display: block;*/
/*                                 padding: 12px 4px;*/
/*                             " href="{{ path('adcategory_show', {'slug': entity.slug}) }}">*/
/*                             {{ entity.title }}*/
/*                         </a>*/
/*                         <ul class="nav nav-pills nav-stacked">*/
/*                             {% if entity.child is defined %}*/
/*                                 {% for item in entity.child %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('adcategory_show', {'slug': item.slug}) }}">*/
/*                                             {{ item.title }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/* */
/*                         </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-lg-9" style="padding-left: 30px;">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-body">*/
/*                     <div class="tabbable-line">*/
/*                         <ul class="nav nav-tabs ">*/
/*                             <li class="active">*/
/*                                 <a href="#tab_rating" data-toggle="tab">*/
/*                                     По рейтингу </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#tab_recomendet" data-toggle="tab">*/
/*                                     Рекомендуемые </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#tab_new" data-toggle="tab">*/
/*                                     Новые </a>*/
/*                             </li>*/
/*                         </ul>*/
/* */
/* */
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane active" id="tab_rating">*/
/*                                 {{ render(controller('AdBundle:Ad:showsCategory', {'categoryId': entity.id})) }}*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab_recomendet">*/
/*                                 Рекомендуемые*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab_new">*/
/*                                 Новые*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
