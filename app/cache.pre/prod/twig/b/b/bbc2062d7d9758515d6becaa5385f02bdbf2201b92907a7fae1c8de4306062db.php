<?php

/* AdBundle:Sale:index.html.twig */
class __TwigTemplate_6f5f686e6ea5c6c44fd0918ce34a56d1f7e4be48adf98549b13be58a7df3c7e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:Sale:index.html.twig", 1);
        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'content' => array($this, 'block_content'),
            'level_scripts' => array($this, 'block_level_scripts'),
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
    public function block_script($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\" style=\"margin-bottom: 20px;\">
        <div class=\"col-lg-12\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ad_new");
        echo "\" class=\"btn btn-success\">Добавить услугу</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-2\">
        ";
        // line 15
        echo twig_include($this->env, $context, "@Ad/Sale/block/menu.html.twig");
        echo "
        </div>
        <div class=\"col-lg-10\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption\">
                        Продажи
                    </div>
                </div>
                <div class=\"portlet-body\">
                    ";
        // line 25
        if ((isset($context["sales"]) ? $context["sales"] : null)) {
            // line 26
            echo "                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Статус</th>
                                <th>Цена</th>
                                <th>Заказчик</th>
                                <th>Дни</th>
                                <th>Дата</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sales"]) ? $context["sales"] : null));
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
                // line 41
                echo "                                <tr id=\"adOrder";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                                    <td class=\"status\">";
                // line 43
                echo twig_include($this->env, $context, "@Ad/AdOrder/block/status.html.twig", array("order" => $context["item"]));
                echo "</td>
                                    <td>
                                        <a class=\"tooltips\" title=\"Подробнее\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\">
                                            ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                                        </a>
                                    </td>
                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                echo "</td>
                                    <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute($this->getAttribute($context["item"], "seller", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "seller", array()), "username", array()), "html", null, true);
                echo "</a></td>
                                    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "executDays", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateCreated", array()), "d.m.Y H:i"), "html", null, true);
                echo "</td>
                                    <td class=\"actions\">
                                        ";
                // line 54
                if ((($this->getAttribute($context["item"], "status", array()) == 0) && $this->getAttribute($context["item"], "payStatus", array()))) {
                    // line 55
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_adopt", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                    echo "\" data-target=\"#ajax-modal\" data-toggle=\"modal\"  class=\"btn btn-success btn-xs tooltips\" title=\"Принять заказ\">
                                                <i class=\"glyphicon glyphicon-ok\"></i>
                                            </a>
                                        ";
                }
                // line 59
                echo "                                    </td>
                                </tr>
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
            // line 62
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 65
            echo "                        <div class=\"alert alert-info\">
                            Вы еще ничего не продали
                        </div>
                    ";
        }
        // line 69
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 75
    public function block_level_scripts($context, array $blocks = array())
    {
        // line 76
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/js/adOrder.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AdBundle:Sale:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 76,  189 => 75,  181 => 69,  175 => 65,  170 => 62,  154 => 59,  146 => 55,  144 => 54,  139 => 52,  135 => 51,  129 => 50,  125 => 49,  119 => 46,  115 => 45,  110 => 43,  106 => 42,  101 => 41,  84 => 40,  68 => 26,  66 => 25,  53 => 15,  45 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block script %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="row" style="margin-bottom: 20px;">*/
/*         <div class="col-lg-12">*/
/*             <a href="{{ path('ad_new') }}" class="btn btn-success">Добавить услугу</a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-lg-2">*/
/*         {{ include('@Ad/Sale/block/menu.html.twig') }}*/
/*         </div>*/
/*         <div class="col-lg-10">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption">*/
/*                         Продажи*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet-body">*/
/*                     {% if sales %}*/
/*                         <table class="table">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>#</th>*/
/*                                 <th>Название</th>*/
/*                                 <th>Статус</th>*/
/*                                 <th>Цена</th>*/
/*                                 <th>Заказчик</th>*/
/*                                 <th>Дни</th>*/
/*                                 <th>Дата</th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for item in sales %}*/
/*                                 <tr id="adOrder{{ item.id }}">*/
/*                                     <td>{{ item.id }}</td>*/
/*                                     <td class="status">{{ include('@Ad/AdOrder/block/status.html.twig', {'order': item}) }}</td>*/
/*                                     <td>*/
/*                                         <a class="tooltips" title="Подробнее" href="{{ path('ad_order_show', {'id': item.id}) }}">*/
/*                                             {{ item.title }}*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td>{{ item.price }}</td>*/
/*                                     <td><a href="{{ path('user_page', {'id': item.seller.id}) }}">{{ item.seller.username }}</a></td>*/
/*                                     <td>{{ item.executDays }}</td>*/
/*                                     <td>{{ item.dateCreated|date('d.m.Y H:i') }}</td>*/
/*                                     <td class="actions">*/
/*                                         {% if item.status == 0 and item.payStatus %}*/
/*                                             <a href="{{ path('ad_order_adopt', {'id': item.id}) }}" data-target="#ajax-modal" data-toggle="modal"  class="btn btn-success btn-xs tooltips" title="Принять заказ">*/
/*                                                 <i class="glyphicon glyphicon-ok"></i>*/
/*                                             </a>*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     {% else %}*/
/*                         <div class="alert alert-info">*/
/*                             Вы еще ничего не продали*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block level_scripts %}*/
/*     <script src="{{ asset('bundles/ad/js/adOrder.js') }}"></script>*/
/* {% endblock %}*/
/* */
