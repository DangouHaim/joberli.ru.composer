<?php

/* AdBundle:AdCategory:index.html.twig */
class __TwigTemplate_57464bd5ed9f7ab86e292f1d6d99225352b8d4d70b73c1e59f3d745615ff552e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:AdCategory:index.html.twig", 1);
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
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption font-green-sharp\">
                        <i class=\"icon-speech font-green-sharp\"></i>
                        <span class=\"caption-subject bold uppercase\"> Категории </span>
                        <span class=\"caption-helper\">объявлений</span>
                    </div>
                    <div class=\"actions\">
                        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("adcategory_new");
        echo "\" class=\"btn btn-circle btn-default btn-sm\">
                            <i class=\"fa fa-plus\"></i> Добавить </a>
                        <a href=\"javascript:;\" class=\"btn btn-circle btn-default btn-icon-only fullscreen\" data-original-title=\"\" title=\"\"></a>
                    </div>
                </div>
                <div class=\"portlet-body\">
                    <table class=\"table table-condensed table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Ссылка</th>
                            <th>Родитель</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "                            <tr>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($this->getAttribute($context["entity"], "path", array()), "path", array()), "child_slug" => $this->getAttribute($this->getAttribute($context["entity"], "path", array()), "child", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "slug", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 37
            if ($this->getAttribute($context["entity"], "parent", array())) {
                // line 38
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "parent", array()), "title", array()), "html", null, true);
                echo "
                                    ";
            }
            // line 40
            echo "                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <a class=\"btn btn-link btn-xs\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($this->getAttribute($context["entity"], "path", array()), "path", array()), "child_slug" => $this->getAttribute($this->getAttribute($context["entity"], "path", array()), "child", array()))), "html", null, true);
            echo "\">
                                            <i class=\"glyphicon glyphicon-eye-open\"></i>
                                        </a>
                                        <a class=\"btn btn-link btn-xs\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"glyphicon glyphicon-edit\"></i>
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "AdBundle:AdCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  104 => 46,  98 => 43,  93 => 40,  87 => 38,  85 => 37,  80 => 35,  74 => 34,  70 => 33,  67 => 32,  63 => 31,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption font-green-sharp">*/
/*                         <i class="icon-speech font-green-sharp"></i>*/
/*                         <span class="caption-subject bold uppercase"> Категории </span>*/
/*                         <span class="caption-helper">объявлений</span>*/
/*                     </div>*/
/*                     <div class="actions">*/
/*                         <a href="{{ path('adcategory_new') }}" class="btn btn-circle btn-default btn-sm">*/
/*                             <i class="fa fa-plus"></i> Добавить </a>*/
/*                         <a href="javascript:;" class="btn btn-circle btn-default btn-icon-only fullscreen" data-original-title="" title=""></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet-body">*/
/*                     <table class="table table-condensed table-striped">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>#</th>*/
/*                             <th>Название</th>*/
/*                             <th>Ссылка</th>*/
/*                             <th>Родитель</th>*/
/*                             <th></th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for entity in entities %}*/
/*                             <tr>*/
/*                                 <td>{{ entity.id }}</td>*/
/*                                 <td><a href="{{ path('adcategory_show', { 'slug': entity.path.path, 'child_slug': entity.path.child }) }}">{{ entity.title }}</a></td>*/
/*                                 <td>{{ entity.slug }}</td>*/
/*                                 <td>*/
/*                                     {% if entity.parent %}*/
/*                                         {{ entity.parent.title }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div class="btn-group">*/
/*                                         <a class="btn btn-link btn-xs" href="{{ path('adcategory_show', { 'slug': entity.path.path, 'child_slug': entity.path.child }) }}">*/
/*                                             <i class="glyphicon glyphicon-eye-open"></i>*/
/*                                         </a>*/
/*                                         <a class="btn btn-link btn-xs" href="{{ path('adcategory_edit', { 'id': entity.id }) }}">*/
/*                                             <i class="glyphicon glyphicon-edit"></i>*/
/*                                         </a>*/
/*                                     </div>*/
/* */
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
