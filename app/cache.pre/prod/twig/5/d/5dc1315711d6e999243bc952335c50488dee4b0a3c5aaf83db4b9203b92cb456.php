<?php

/* AdBundle:Ad:search.html.twig */
class __TwigTemplate_3a18e1c219b998c27a70a0f573be7b22b0893d29a42a97e651140d8e3e4b87f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:Ad:search.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
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
        <div class=\"col-lg-12\">
            <div class=\"page-header\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</h1>
            </div>
        </div>
    </div>

    ";
        // line 12
        if (array_key_exists("ads", $context)) {
            // line 13
            echo "    <div class=\"row\">
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
            // line 23
            if (array_key_exists("category", $context)) {
                // line 24
                echo "                            <ul class=\"nav nav-pills nav-stacked\">
                                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    echo "                                    <li>
                                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], 0, array()), "path", array()), "path", array()), "child_slug" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], 0, array()), "path", array()), "child", array()))), "html", null, true);
                    echo "?q=";
                    echo twig_escape_filter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true);
                    echo "\">
                                            ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], 0, array()), "title", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["item"]), "html", null, true);
                    echo ")
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "
                            </ul>
                        ";
            }
            // line 35
            echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-9\">
            <div class=\"row\">

                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "                    ";
                echo twig_include($this->env, $context, "AdBundle:Ad:adShort.html.twig", array("ad" => $context["item"], "class" => "col-lg-4"));
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </div>
        </div>
    </div>
    ";
        } else {
            // line 49
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-info\">
                    Введите ключевые слова для поиска
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 59
    public function block_script($context, array $blocks = array())
    {
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdBundle:Ad:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 60,  155 => 59,  143 => 49,  137 => 45,  120 => 43,  103 => 42,  94 => 35,  89 => 32,  77 => 28,  71 => 27,  68 => 26,  64 => 25,  61 => 24,  59 => 23,  47 => 13,  45 => 12,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="page-header">*/
/*                 <h1>{{ page.title }}</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if ads is defined %}*/
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
/*                         {% if category is defined %}*/
/*                             <ul class="nav nav-pills nav-stacked">*/
/*                                 {% for item in category %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('adcategory_show', {'slug': item.0.path.path, 'child_slug':item.0.path.child}) }}?q={{ q }}">*/
/*                                             {{ item.0.title }} ({{ item|length }})*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/* */
/*                             </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-9">*/
/*             <div class="row">*/
/* */
/*                 {% for item in ads %}*/
/*                     {{ include('AdBundle:Ad:adShort.html.twig', {'ad': item, 'class' : 'col-lg-4'}) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="alert alert-info">*/
/*                     Введите ключевые слова для поиска*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/* */
/* {% endblock %}*/
/* */
/* */
