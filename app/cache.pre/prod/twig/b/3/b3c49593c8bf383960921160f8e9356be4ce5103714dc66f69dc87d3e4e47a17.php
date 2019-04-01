<?php

/* AdBundle:AdOrder:index.html.twig */
class __TwigTemplate_438911ecd2a4bce8e31b3cdf2aceba5528f881f6dc4b64beae9368739aa6c9af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:AdOrder:index.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption caption-md\">
                        Покупки
                    </div>
                    <div class=\"actions\">
                        <div class=\"btn-group btn-group-devided\">
                            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ad_order");
        echo "?payStatus=0\" class=\"btn btn-transparent grey-salsa btn-circle btn-sm
                            ";
        // line 18
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "payStatus"), "method") == 0) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "payStatus"), "method") != null))) {
            // line 19
            echo "                            active
                            ";
        }
        // line 21
        echo "                            \">
                                Не оплаченные
                            </a>
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ad_order");
        echo "\" class=\"btn btn-transparent grey-salsa btn-circle btn-sm
                            ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "payStatus"), "method") == null)) {
            // line 26
            echo "                            active
                            ";
        }
        // line 28
        echo "                            \">
                                Оплаченые
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"portlet-body\">
                    ";
        // line 35
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 36
            echo "                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Цена</th>
                                <th>Продавец</th>
                                <th>Статус</th>
                                <th>Дни</th>
                                <th>Дата</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
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
                // line 52
                echo "                                <tr id=\"adOrder";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        <a class=\"tooltips\" title=\"Подробнее\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\">
                                            ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                                        </a>
                                    </td>
                                    <td>\$";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "amount", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        <a class=\"tooltips\" title=\"страница пользователя\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute($this->getAttribute($context["item"], "venditore", array()), "id", array()))), "html", null, true);
                echo "\">
                                            ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "venditore", array()), "username", array()), "html", null, true);
                echo "
                                        </a>
                                    </td>
                                    <td>
                                        ";
                // line 66
                echo twig_include($this->env, $context, "@Ad/AdOrder/block/status.html.twig", array("order" => $context["item"]));
                echo "
                                    </td>
                                    <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "executDaysAmount", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateCreated", array()), "d.m.Y H:i"), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 71
                if ($this->getAttribute($context["item"], "payStatus", array())) {
                    // line 72
                    echo "
                                        ";
                } else {
                    // line 74
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_pay", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-xs btn-success\" title=\"Оплатить\">Оплатить</a>
                                        ";
                }
                // line 76
                echo "                                    </td>
                                    <td>
                                        ";
                // line 78
                if ($this->getAttribute($context["item"], "payStatus", array())) {
                    // line 79
                    echo "
                                        ";
                } else {
                    // line 81
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_remove", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                    echo "\" data-target=\"#ajax-modal\" data-toggle=\"modal\" class=\"close tooltips\" title=\"Удалить\"></a>
                                        ";
                }
                // line 83
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
            // line 86
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 89
            echo "                        <div class=\"alert alert-info\">
                            Вы еще не заказывали
                        </div>
                    ";
        }
        // line 93
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 98
    public function block_level_scripts($context, array $blocks = array())
    {
        // line 99
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/js/adOrder.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AdBundle:AdOrder:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 99,  235 => 98,  227 => 93,  221 => 89,  216 => 86,  200 => 83,  194 => 81,  190 => 79,  188 => 78,  184 => 76,  178 => 74,  174 => 72,  172 => 71,  167 => 69,  163 => 68,  158 => 66,  151 => 62,  147 => 61,  142 => 59,  136 => 56,  132 => 55,  127 => 53,  122 => 52,  105 => 51,  88 => 36,  86 => 35,  77 => 28,  73 => 26,  71 => 25,  67 => 24,  62 => 21,  58 => 19,  56 => 18,  52 => 17,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block script %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption caption-md">*/
/*                         Покупки*/
/*                     </div>*/
/*                     <div class="actions">*/
/*                         <div class="btn-group btn-group-devided">*/
/*                             <a href="{{ path('ad_order') }}?payStatus=0" class="btn btn-transparent grey-salsa btn-circle btn-sm*/
/*                             {% if app.request.query.get('payStatus') == 0 and app.request.query.get('payStatus') != null  %}*/
/*                             active*/
/*                             {% endif %}*/
/*                             ">*/
/*                                 Не оплаченные*/
/*                             </a>*/
/*                             <a href="{{ path('ad_order') }}" class="btn btn-transparent grey-salsa btn-circle btn-sm*/
/*                             {% if app.request.query.get('payStatus') == null %}*/
/*                             active*/
/*                             {% endif %}*/
/*                             ">*/
/*                                 Оплаченые*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet-body">*/
/*                     {% if orders %}*/
/*                         <table class="table">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>#</th>*/
/*                                 <th>Название</th>*/
/*                                 <th>Цена</th>*/
/*                                 <th>Продавец</th>*/
/*                                 <th>Статус</th>*/
/*                                 <th>Дни</th>*/
/*                                 <th>Дата</th>*/
/*                                 <th></th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for item in orders %}*/
/*                                 <tr id="adOrder{{ item.id }}">*/
/*                                     <td>{{ item.id }}</td>*/
/*                                     <td>*/
/*                                         <a class="tooltips" title="Подробнее" href="{{ path('ad_order_show', {'id': item.id}) }}">*/
/*                                             {{ item.title }}*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td>${{ item.amount }}</td>*/
/*                                     <td>*/
/*                                         <a class="tooltips" title="страница пользователя" href="{{ path('user_page', {'id': item.venditore.id}) }}">*/
/*                                             {{ item.venditore.username }}*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         {{ include('@Ad/AdOrder/block/status.html.twig', {'order': item}) }}*/
/*                                     </td>*/
/*                                     <td>{{ item.executDaysAmount }}</td>*/
/*                                     <td>{{ item.dateCreated|date('d.m.Y H:i') }}</td>*/
/*                                     <td>*/
/*                                         {% if item.payStatus %}*/
/* */
/*                                         {% else %}*/
/*                                             <a href="{{ path('ad_order_pay', {'id': item.id}) }}" class="btn btn-xs btn-success" title="Оплатить">Оплатить</a>*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         {% if item.payStatus %}*/
/* */
/*                                         {% else %}*/
/*                                             <a href="{{ path('ad_order_remove', {'id': item.id}) }}" data-target="#ajax-modal" data-toggle="modal" class="close tooltips" title="Удалить"></a>*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     {% else %}*/
/*                         <div class="alert alert-info">*/
/*                             Вы еще не заказывали*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block level_scripts %}*/
/*     <script src="{{ asset('bundles/ad/js/adOrder.js') }}"></script>*/
/* {% endblock %}*/
/* */
