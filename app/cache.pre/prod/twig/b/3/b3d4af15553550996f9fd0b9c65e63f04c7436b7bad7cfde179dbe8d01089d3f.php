<?php

/* AdBundle:Ad:new.html.twig */
class __TwigTemplate_25022e6155fb81406ed5968def598b51a6591c7349ef12657ffe7b22236bd741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:Ad:new.html.twig", 1);
        $this->blocks = array(
            'level_style' => array($this, 'block_level_style'),
            'level_scripts' => array($this, 'block_level_scripts'),
            'script' => array($this, 'block_script'),
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

    // line 2
    public function block_level_style($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery-tags-input/jquery.tagsinput.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 5
    public function block_level_scripts($context, array $blocks = array())
    {
        // line 6
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/js/create_ad.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jQuery.MultiFile.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 11
    public function block_script($context, array $blocks = array())
    {
        // line 12
        echo "    <script>
        \$('#core_adbundle_ad_tags').tagsInput({
            width: 'auto',
            'onAddTag': function () {
            }
        });
    </script>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 22
        if (array_key_exists("photos", $context)) {
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Новое объявление</h1>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("enctype" => "multipart/form-data")));
        echo "
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-body\">

                    <div class=\"row\">
                        <div class=\"col-lg-6 pull-right\">
                            <h3 class=\"form-section\">Допоолнение услуги</h3>
                            <hr>
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subAd", array()), 'widget');
        echo "
                        </div>
                        <div class=\"col-lg-6\">
                            <h3 class=\"form-section\">Основная информация</h3>
                            <hr>
                            <div class=\"form-group\">
                                <label for=\"\">Категория</label>

                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <select onchange=\"loadChildCategory()\" class=\"form-control\" name=\"category\" required>
                                            <option value=\"\">Выберите категорию</option>
                                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            echo "                                                <option value=\"";
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
        echo "                                        </select>
                                    </div>
                                    <div class=\"col-lg-6\" id=\"child_cat_select\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"\">Фото</label>
                                <input type=\"file\" name=\"photos[]\" class=\"form-control multi with-preview\" accept=\"jpg|png|jpeg\"/>
                                <div class=\"multi\">
                                    ";
        // line 66
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "photos", array(), "any", true, true)) {
            // line 67
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "photos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 68
                echo "                                            <div class=\"ad-gallery-item\" id=\"AdPh";
                echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"ad-gallery-item__remove\">
                                                    <a onclick=\"delAdImage(";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "id", array()), "html", null, true);
                echo ")\">x</a>
                                                </div>
                                                <div class=\"ad-gallery-item__title\">
                                                    ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["photo"], "photo", array()), "originalName", array()), "html", null, true);
                echo "
                                                </div>
                                                <div class=\"ad-gallery-item__img\">
                                                    <img style=\"max-width: 100px; min-height: 100px;\" src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["photo"], "photo", array()), "path", array()), "html", null, true);
                echo "\"/>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                    ";
        }
        // line 81
        echo "                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                        </div>
                    </div>

                </div>
            </div>
            ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdBundle:Ad:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 90,  188 => 84,  183 => 81,  180 => 80,  170 => 76,  164 => 73,  158 => 70,  152 => 68,  147 => 67,  145 => 66,  132 => 55,  121 => 53,  117 => 52,  102 => 40,  90 => 31,  81 => 24,  78 => 23,  76 => 22,  73 => 20,  62 => 12,  59 => 11,  53 => 8,  49 => 7,  44 => 6,  41 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* {% block level_style %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/metronic/plugins/jquery-tags-input/jquery.tagsinput.css') }}"/>*/
/* {% endblock %}*/
/* {% block level_scripts %}*/
/*     <script src="{{ asset('bundles/metronic/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}" type="text/javascript"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/ad/js/create_ad.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/core/js/jQuery.MultiFile.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/*     <script>*/
/*         $('#core_adbundle_ad_tags').tagsInput({*/
/*             width: 'auto',*/
/*             'onAddTag': function () {*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* {% block content -%}*/
/* */
/*     {% if photos is defined %}*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1>Новое объявление</h1>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}*/
/*         <div class="col-lg-12">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-body">*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-lg-6 pull-right">*/
/*                             <h3 class="form-section">Допоолнение услуги</h3>*/
/*                             <hr>*/
/*                             {{ form_widget(form.subAd) }}*/
/*                         </div>*/
/*                         <div class="col-lg-6">*/
/*                             <h3 class="form-section">Основная информация</h3>*/
/*                             <hr>*/
/*                             <div class="form-group">*/
/*                                 <label for="">Категория</label>*/
/* */
/*                                 <div class="row">*/
/*                                     <div class="col-lg-6">*/
/*                                         <select onchange="loadChildCategory()" class="form-control" name="category" required>*/
/*                                             <option value="">Выберите категорию</option>*/
/*                                             {% for item in category %}*/
/*                                                 <option value="{{ item.id }}">{{ item.title }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                     <div class="col-lg-6" id="child_cat_select">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label for="">Фото</label>*/
/*                                 <input type="file" name="photos[]" class="form-control multi with-preview" accept="jpg|png|jpeg"/>*/
/*                                 <div class="multi">*/
/*                                     {% if entity.photos is defined %}*/
/*                                         {% for photo in entity.photos %}*/
/*                                             <div class="ad-gallery-item" id="AdPh{{ photo.id }}">*/
/*                                                 <div class="ad-gallery-item__remove">*/
/*                                                     <a onclick="delAdImage({{ photo.id }})">x</a>*/
/*                                                 </div>*/
/*                                                 <div class="ad-gallery-item__title">*/
/*                                                     {{ photo.photo.originalName }}*/
/*                                                 </div>*/
/*                                                 <div class="ad-gallery-item__img">*/
/*                                                     <img style="max-width: 100px; min-height: 100px;" src="{{ photo.photo.path }}"/>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                                 <div class="clearfix"></div>*/
/*                             </div>*/
/*                             {{ form_widget(form) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             {{ form_end(form) }}*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
