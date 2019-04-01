<?php

/* AdBundle:AdCategory:levelManager.html.twig */
class __TwigTemplate_9dbfbc38752f05d329af17e0b33572cd45dc51a8bfcbebcc44f5835c518a5ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:AdCategory:levelManager.html.twig", 1);
        $this->blocks = array(
            'level_style' => array($this, 'block_level_style'),
            'level_plugins' => array($this, 'block_level_plugins'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
            'script_init' => array($this, 'block_script_init'),
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
    public function block_level_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery-nestable/jquery.nestable.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 6
    public function block_level_plugins($context, array $blocks = array())
    {
        // line 7
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery-nestable/jquery.nestable.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- BEGIN PORTLET-->
            <div class=\"portlet light\">
                <div class=\"portlet-body\">
                    <div class=\"dd\" id=\"nestable_list_1\">
                        ";
        // line 17
        if (array_key_exists("categories", $context)) {
            // line 18
            echo "                        <ol class=\"dd-list\">
                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "                            <li class=\"dd-item\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                <div class=\"dd-handle\">
                                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                                </div>
                                ";
                // line 24
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "child", array())) > 0)) {
                    // line 25
                    echo "                                <ol class=\"dd-list\">
                                    ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "child", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item_child"]) {
                        // line 27
                        echo "                                    <li class=\"dd-item\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item_child"], "id", array()), "html", null, true);
                        echo "\">
                                        <div class=\"dd-handle\">
                                            ";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item_child"], "title", array()), "html", null, true);
                        echo "
                                        </div>
                                    </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                                </ol>
                                ";
                }
                // line 35
                echo "                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            <li class=\"dd-item\" data-id=\"999999999\">
                                <div class=\"dd-handle\">
                                    Прочее
                                    ";
            // line 40
            if ((twig_length_filter($this->env, (isset($context["categories_other"]) ? $context["categories_other"] : null)) > 0)) {
                // line 41
                echo "                                    <ol class=\"dd-list\">
                                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories_other"]) ? $context["categories_other"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    echo "                                            <li class=\"dd-item\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\">
                                                <div class=\"dd-handle\">
                                                    ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "
                                                </div>
                                            </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                                    </ol>
                                    ";
            }
            // line 51
            echo "                                </div>
                            </li>
                        </ol>
                        ";
        }
        // line 55
        echo "                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
";
    }

    // line 63
    public function block_script($context, array $blocks = array())
    {
        // line 64
        echo "    <script>
        var UINestable = function () {

            var updateOutput = function (e) {
                var list = e.length ? e : \$(e.target),
                        output = list.data('output');
                if (window.JSON) {
                    \$.ajax({
                        url: '";
        // line 72
        echo $this->env->getExtension('routing')->getPath("adcategory_levelmanager");
        echo "',
                        type: 'post',
                        dataType: 'json',
                        data: {list:list.nestable('serialize')},
                        success: function (data) {

                        }
                        , error: function() {

                        }
                    });
                    output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            };


            return {
                //main function to initiate the module
                init: function () {

                    // activate Nestable for list 1
                    \$('#nestable_list_1').nestable({
                        group: 1
                    })
                            .on('change', updateOutput);

                    // output initial serialised data
                    updateOutput(\$('#nestable_list_1').data('output', \$('#nestable_list_1_output')));

                    \$('#nestable_list_menu').on('click', function (e) {
                        var target = \$(e.target),
                                action = target.data('action');
                        if (action === 'expand-all') {
                            \$('.dd').nestable('expandAll');
                        }
                        if (action === 'collapse-all') {
                            \$('.dd').nestable('collapseAll');
                        }
                    });


                }

            };

        }();
    </script>
";
    }

    // line 122
    public function block_script_init($context, array $blocks = array())
    {
        // line 123
        echo "    UINestable.init();
";
    }

    public function getTemplateName()
    {
        return "AdBundle:AdCategory:levelManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 123,  236 => 122,  182 => 72,  172 => 64,  169 => 63,  159 => 55,  153 => 51,  149 => 49,  139 => 45,  133 => 43,  129 => 42,  126 => 41,  124 => 40,  119 => 37,  112 => 35,  108 => 33,  98 => 29,  92 => 27,  88 => 26,  85 => 25,  83 => 24,  78 => 22,  72 => 20,  68 => 19,  65 => 18,  63 => 17,  55 => 11,  52 => 10,  45 => 7,  42 => 6,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block level_style %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/metronic/plugins/jquery-nestable/jquery.nestable.css') }}"/>*/
/* {% endblock %}*/
/* {% block level_plugins %}*/
/*     <script type="text/javascript" src="{{ asset('bundles/metronic/plugins/jquery-nestable/jquery.nestable.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <!-- BEGIN PORTLET-->*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-body">*/
/*                     <div class="dd" id="nestable_list_1">*/
/*                         {% if categories is defined %}*/
/*                         <ol class="dd-list">*/
/*                             {% for item in categories %}*/
/*                             <li class="dd-item" data-id="{{ item.id }}">*/
/*                                 <div class="dd-handle">*/
/*                                     {{ item.title }}*/
/*                                 </div>*/
/*                                 {% if item.child|length > 0 %}*/
/*                                 <ol class="dd-list">*/
/*                                     {% for item_child in item.child %}*/
/*                                     <li class="dd-item" data-id="{{ item_child.id }}">*/
/*                                         <div class="dd-handle">*/
/*                                             {{ item_child.title }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     {% endfor %}*/
/*                                 </ol>*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                             {% endfor %}*/
/*                             <li class="dd-item" data-id="999999999">*/
/*                                 <div class="dd-handle">*/
/*                                     Прочее*/
/*                                     {% if categories_other|length > 0 %}*/
/*                                     <ol class="dd-list">*/
/*                                         {% for item in categories_other %}*/
/*                                             <li class="dd-item" data-id="{{ item.id }}">*/
/*                                                 <div class="dd-handle">*/
/*                                                     {{ item.title }}*/
/*                                                 </div>*/
/*                                             </li>*/
/*                                         {% endfor %}*/
/*                                     </ol>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ol>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- END PORTLET-->*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/*     <script>*/
/*         var UINestable = function () {*/
/* */
/*             var updateOutput = function (e) {*/
/*                 var list = e.length ? e : $(e.target),*/
/*                         output = list.data('output');*/
/*                 if (window.JSON) {*/
/*                     $.ajax({*/
/*                         url: '{{ path('adcategory_levelmanager') }}',*/
/*                         type: 'post',*/
/*                         dataType: 'json',*/
/*                         data: {list:list.nestable('serialize')},*/
/*                         success: function (data) {*/
/* */
/*                         }*/
/*                         , error: function() {*/
/* */
/*                         }*/
/*                     });*/
/*                     output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));*/
/*                 } else {*/
/*                     output.val('JSON browser support required for this demo.');*/
/*                 }*/
/*             };*/
/* */
/* */
/*             return {*/
/*                 //main function to initiate the module*/
/*                 init: function () {*/
/* */
/*                     // activate Nestable for list 1*/
/*                     $('#nestable_list_1').nestable({*/
/*                         group: 1*/
/*                     })*/
/*                             .on('change', updateOutput);*/
/* */
/*                     // output initial serialised data*/
/*                     updateOutput($('#nestable_list_1').data('output', $('#nestable_list_1_output')));*/
/* */
/*                     $('#nestable_list_menu').on('click', function (e) {*/
/*                         var target = $(e.target),*/
/*                                 action = target.data('action');*/
/*                         if (action === 'expand-all') {*/
/*                             $('.dd').nestable('expandAll');*/
/*                         }*/
/*                         if (action === 'collapse-all') {*/
/*                             $('.dd').nestable('collapseAll');*/
/*                         }*/
/*                     });*/
/* */
/* */
/*                 }*/
/* */
/*             };*/
/* */
/*         }();*/
/*     </script>*/
/* {% endblock %}*/
/* {% block script_init %}*/
/*     UINestable.init();*/
/* {% endblock %}*/
