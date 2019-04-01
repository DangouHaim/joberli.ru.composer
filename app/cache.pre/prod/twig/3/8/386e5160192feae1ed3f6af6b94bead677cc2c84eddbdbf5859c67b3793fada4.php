<?php

/* AdBundle:AdTask:index.html.twig */
class __TwigTemplate_c6eae4eff9d2d1370d6b69ce3b97f8afacef18fe6e3f507b98961c4c19a9f809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/main.html.twig", "AdBundle:AdTask:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Core/main.html.twig";
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
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption caption-md\">
                        Список задач
                    </div>
                    <div class=\"actions\">
                        <div class=\"btn-group btn-group-devided\">
                            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ad_order");
        echo "\" class=\"btn btn-transparent grey-salsa btn-circle btn-sm
                            ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "payStatus"), "method") == null)) {
            // line 15
            echo "                            active
                            ";
        }
        // line 17
        echo "                            \">
                                Активные
                            </a>
                            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ad_order");
        echo "?payStatus=0\" class=\"btn btn-transparent grey-salsa btn-circle btn-sm
                            ";
        // line 21
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "payStatus"), "method") == 0) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "payStatus"), "method") != null))) {
            // line 22
            echo "                            active
                            ";
        }
        // line 24
        echo "                            \">
                                Архив
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"portlet-body\">
                    ";
        // line 31
        if ((isset($context["task"]) ? $context["task"] : null)) {
            // line 32
            echo "                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>День старта</th>
                                <th>Последний день</th>
                                <th>Заказчик</th>
                                <th>Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["task"]) ? $context["task"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 45
                echo "                                <tr id=\"adOrder";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        <a class=\"tooltips\" title=\"Подробнее\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_show", array("id" => $this->getAttribute($this->getAttribute($context["item"], "order", array()), "id", array()))), "html", null, true);
                echo "\">
                                            ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "order", array()), "title", array()), "html", null, true);
                echo "
                                        </a>
                                    </td>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "startDate", array()), "d.m.Y H:i"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "endDate", array()), "d.m.Y H:i"), "html", null, true);
                echo "</td>
                                    <td>
                                        <a class=\"tooltips\" title=\"страница пользователя\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "order", array()), "seller", array()), "id", array()))), "html", null, true);
                echo "\">
                                            ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "order", array()), "seller", array()), "username", array()), "html", null, true);
                echo "
                                        </a>
                                    </td>
                                    <td>\$";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "order", array()), "price", array()), "html", null, true);
                echo "</td>
                                </tr>
                            ";
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
                            Не выполненых задач нет
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

    public function getTemplateName()
    {
        return "AdBundle:AdTask:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 69,  149 => 65,  144 => 62,  135 => 59,  129 => 56,  125 => 55,  120 => 53,  116 => 52,  110 => 49,  106 => 48,  101 => 46,  96 => 45,  92 => 44,  78 => 32,  76 => 31,  67 => 24,  63 => 22,  61 => 21,  57 => 20,  52 => 17,  48 => 15,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Core/main.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption caption-md">*/
/*                         Список задач*/
/*                     </div>*/
/*                     <div class="actions">*/
/*                         <div class="btn-group btn-group-devided">*/
/*                             <a href="{{ path('ad_order') }}" class="btn btn-transparent grey-salsa btn-circle btn-sm*/
/*                             {% if app.request.query.get('payStatus') == null %}*/
/*                             active*/
/*                             {% endif %}*/
/*                             ">*/
/*                                 Активные*/
/*                             </a>*/
/*                             <a href="{{ path('ad_order') }}?payStatus=0" class="btn btn-transparent grey-salsa btn-circle btn-sm*/
/*                             {% if app.request.query.get('payStatus') == 0 and app.request.query.get('payStatus') != null  %}*/
/*                             active*/
/*                             {% endif %}*/
/*                             ">*/
/*                                 Архив*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet-body">*/
/*                     {% if task %}*/
/*                         <table class="table">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>#</th>*/
/*                                 <th>Название</th>*/
/*                                 <th>День старта</th>*/
/*                                 <th>Последний день</th>*/
/*                                 <th>Заказчик</th>*/
/*                                 <th>Цена</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for item in task %}*/
/*                                 <tr id="adOrder{{ item.id }}">*/
/*                                     <td>{{ item.id }}</td>*/
/*                                     <td>*/
/*                                         <a class="tooltips" title="Подробнее" href="{{ path('ad_order_show', {'id': item.order.id}) }}">*/
/*                                             {{ item.order.title }}*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td>{{ item.startDate|date('d.m.Y H:i') }}</td>*/
/*                                     <td>{{ item.endDate|date('d.m.Y H:i') }}</td>*/
/*                                     <td>*/
/*                                         <a class="tooltips" title="страница пользователя" href="{{ path('user_page', {'id': item.order.seller.id}) }}">*/
/*                                             {{ item.order.seller.username }}*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td>${{ item.order.price }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     {% else %}*/
/*                         <div class="alert alert-info">*/
/*                             Не выполненых задач нет*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock content %}*/
