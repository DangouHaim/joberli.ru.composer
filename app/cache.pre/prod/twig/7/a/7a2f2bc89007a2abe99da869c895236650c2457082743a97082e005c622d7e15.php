<?php

/* AdBundle:AdCategory:new.html.twig */
class __TwigTemplate_8266729b872921111789e0b136c7359da2e9d8ae70915a433c7ab51378f59015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:AdCategory:new.html.twig", 1);
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
        echo "<div class=\"row\">
        <div class=\"col-lg-12\">
            <ul class=\"page-breadcrumb breadcrumb\">
                <li>
                    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("core_index");
        echo "\">Домой</a>
                    <i class=\"fa fa-circle\"></i>
                </li>
                <li>
                    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("adcategory");
        echo "\">Категории</a>
                    <i class=\"fa fa-circle\"></i>
                </li>
                <li>
                    <a href=\"#\">Добавление категории</a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"portlet light\">
                <div class=\"portlet-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    <div class=\"form-group\">
                        <label for=\"\">Название</label>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 30
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors')) {
            // line 31
            echo "                            <div class=\"help-block text-danger\">
                                ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 35
        echo "                    </div>

                    <div class=\"form-group\">
                        <label for=\"purse\">Обложка</label>
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cover", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 40
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cover", array()), 'errors')) {
            // line 41
            echo "                            <div class=\"help-block text-danger\">
                                ";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cover", array()), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 45
        echo "                    </div>

                    <div class=\"form-group\">
                        <label for=\"\">Выбрерите родительскую категорию</label>
                        ";
        // line 49
        if (array_key_exists("category", $context)) {
            // line 50
            echo "                            <select name=\"category\" id=\"\" class=\"form-control\">
                                <option value=\"0\">Выберите категорию</option>
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </select>

                        ";
        }
        // line 58
        echo "                    </div>

                    <div class=\"form-group\">
                        <label for=\"\">Описание</label>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 63
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors')) {
            // line 64
            echo "                            <div class=\"help-block text-danger\">
                                ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 68
        echo "                    </div>

                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

                    ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdBundle:AdCategory:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 72,  160 => 70,  156 => 68,  150 => 65,  147 => 64,  145 => 63,  141 => 62,  135 => 58,  130 => 55,  119 => 53,  115 => 52,  111 => 50,  109 => 49,  103 => 45,  97 => 42,  94 => 41,  92 => 40,  88 => 39,  82 => 35,  76 => 32,  73 => 31,  71 => 30,  67 => 29,  61 => 26,  44 => 12,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <ul class="page-breadcrumb breadcrumb">*/
/*                 <li>*/
/*                     <a href="{{ path('core_index') }}">Домой</a>*/
/*                     <i class="fa fa-circle"></i>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('adcategory') }}">Категории</a>*/
/*                     <i class="fa fa-circle"></i>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Добавление категории</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-4">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-body">*/
/*                     {{ form_start(form) }}*/
/*                     <div class="form-group">*/
/*                         <label for="">Название</label>*/
/*                         {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*                         {% if (form_errors(form.title)) %}*/
/*                             <div class="help-block text-danger">*/
/*                                 {{ form_errors(form.title) }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="purse">Обложка</label>*/
/*                         {{ form_widget(form.cover, {'attr': {'class': 'form-control'}}) }}*/
/*                         {% if (form_errors(form.cover)) %}*/
/*                             <div class="help-block text-danger">*/
/*                                 {{ form_errors(form.cover) }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="">Выбрерите родительскую категорию</label>*/
/*                         {% if category is defined %}*/
/*                             <select name="category" id="" class="form-control">*/
/*                                 <option value="0">Выберите категорию</option>*/
/*                                 {% for item in category %}*/
/*                                     <option value="{{ item.id }}">{{ item.title }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/* */
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="">Описание</label>*/
/*                         {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}*/
/*                         {% if (form_errors(form.description)) %}*/
/*                             <div class="help-block text-danger">*/
/*                                 {{ form_errors(form.description) }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
