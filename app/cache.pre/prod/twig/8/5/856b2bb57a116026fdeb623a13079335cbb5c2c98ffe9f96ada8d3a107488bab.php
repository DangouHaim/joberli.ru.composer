<?php

/* FOSUserBundle:User:manager.html.twig */
class __TwigTemplate_1fdc1bef9210e9cc0e9ea76552d744649638db4ab7b999974a83544f20fd8048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "FOSUserBundle:User:manager.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-body\">
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Почта</th>
                            <th>Последний раз заходил</th>
                            <th>Роль</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 20
        if (array_key_exists("users", $context)) {
            // line 21
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                                <tr>
                                    <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "lastLogin", array())), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["roleItem"]) {
                    // line 29
                    echo "                                            <span class=\"label label-default\" style=\"font-size: 12px;\">";
                    echo twig_escape_filter($this->env, $context["roleItem"], "html", null, true);
                    echo "</span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roleItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                                    </td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"true\">
                                                <i class=\"fa fa-cog\"></i> <i class=\"fa fa-angle-down\"></i>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                <li>
                                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\">
                                                        Редактировать
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                        ";
        }
        // line 49
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
        return "FOSUserBundle:User:manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  114 => 48,  99 => 39,  89 => 31,  80 => 29,  76 => 28,  71 => 26,  67 => 25,  63 => 24,  59 => 23,  56 => 22,  51 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="portlet light">*/
/*                 <div class="portlet-body">*/
/*                     <table class="table">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>#</th>*/
/*                             <th>Имя</th>*/
/*                             <th>Почта</th>*/
/*                             <th>Последний раз заходил</th>*/
/*                             <th>Роль</th>*/
/*                             <th></th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% if users is defined %}*/
/*                             {% for item in users %}*/
/*                                 <tr>*/
/*                                     <td>{{ item.id }}</td>*/
/*                                     <td>{{ item.username }}</td>*/
/*                                     <td>{{ item.email }}</td>*/
/*                                     <td>{{ item.lastLogin|date }}</td>*/
/*                                     <td>*/
/*                                         {% for roleItem in item.roles %}*/
/*                                             <span class="label label-default" style="font-size: 12px;">{{ roleItem }}</span>*/
/*                                         {% endfor %}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <div class="btn-group">*/
/*                                             <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">*/
/*                                                 <i class="fa fa-cog"></i> <i class="fa fa-angle-down"></i>*/
/*                                             </button>*/
/*                                             <ul class="dropdown-menu" role="menu">*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('user_edit', {'id': item.id}) }}">*/
/*                                                         Редактировать*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
