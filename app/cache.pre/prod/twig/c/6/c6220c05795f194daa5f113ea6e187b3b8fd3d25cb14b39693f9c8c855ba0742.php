<?php

/* AdBundle:AdOrder:show.html.twig */
class __TwigTemplate_b03f27a0feafd0fda1bc07867f1deb517e61f52e0176d823306447dd24df8544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:AdOrder:show.html.twig", 1);
        $this->blocks = array(
            'level_style' => array($this, 'block_level_style'),
            'level_scripts' => array($this, 'block_level_scripts'),
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
    public function block_level_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/admin/pages/css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/css/ad-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 8
    public function block_level_scripts($context, array $blocks = array())
    {
        // line 9
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/plugins/bootstrap-rating-master/bootstrap-rating.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/js/adOrder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/message/js/message.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"portlet light\">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-puzzle font-grey-gallery\"></i>
\t\t\t\t\t\t\t\t<span class=\"caption-subject bold font-grey-gallery uppercase\">
\t\t\t\t\t\t\t\t    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "
                                </span>
                                <span class=\"caption-helper\">
                                    #";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "
                                    ";
        // line 29
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "task", array())) {
            // line 30
            echo "                                     до ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "task", array()), "endDate", array()), "d.m.Y H:i"), "html", null, true);
            echo "
                                    ";
        }
        // line 32
        echo "                                    &nbsp;&nbsp;&nbsp;
                                </span>
                                
                                ";
        // line 35
        echo twig_include($this->env, $context, "@Ad/AdOrder/block/status.html.twig", array("order" => (isset($context["order"]) ? $context["order"] : null)));
        echo "
                            </div>

                            <div class=\"actions\">
                                ";
        // line 39
        if ((($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 0)) && ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "venditore", array())))) {
            // line 40
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_adopt", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
            echo "\" data-target=\"#ajax-modal\" data-toggle=\"modal\" class=\"btn btn-success tooltips\" title=\"Принять заказ\">
                                        <i class=\"glyphicon glyphicon-ok\"></i>
                                    </a>
                                ";
        } elseif ((($this->getAttribute(        // line 43
(isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 1)) && ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "seller", array())))) {
            // line 44
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_finish", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
            echo "\" data-target=\"#ajax-modal\" data-toggle=\"modal\" class=\"btn btn-success tooltips\" title=\"Закрыть заказ\">
                                        Подтвердить выполнение
                                    </a>
                                ";
        }
        // line 48
        echo "                            </div>
                        </div>

                        
                        <div class=\"portlet-body\">
                            <div class=\"row\" style=\"margin-bottom: 15px;\">

                                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                    <div class=\"font-grey-mint font-sm\">
                                        Сумма заказа
                                    </div>
                                    <div class=\"uppercase font-hg font-red-flamingo\">
                                        ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "price", array()), "html", null, true);
        echo " <span class=\"font-lg font-grey-mint\">\$</span>
                                    </div>
                                </div>

                                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                    <div class=\"font-grey-mint font-sm\">
                                        Дней на выполнение
                                    </div>
                                    <div class=\"uppercase font-hg font-red-flamingo\">
                                        ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "executDays", array()), "html", null, true);
        echo "
                                    </div>
                                </div>

                                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                    <div class=\"font-grey-mint font-sm\">
                                        Осталось дней
                                    </div>
                                    <div class=\"uppercase font-hg font-red-flamingo\">
                                        ";
        // line 78
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 1))) {
            // line 79
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "daysLeft", array()), "html", null, true);
            echo "
                                        ";
        } else {
            // line 81
            echo "                                            -
                                        ";
        }
        // line 83
        echo "                                    </div>
                                </div>

                                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                    <div class=\"font-grey-mint font-sm\">
                                        Текущий статус
                                    </div>

                                    ";
        // line 91
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 0))) {
            // line 92
            echo "                                        <div class=\"uppercase font-hg font-blue\">
                                            Ожидание
                                        </div>
                                    ";
        } elseif (($this->getAttribute(        // line 95
(isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 1))) {
            // line 96
            echo "                                        <div class=\"uppercase font-hg font-green\">
                                            В процессе
                                        </div>
                                    ";
        } elseif (($this->getAttribute(        // line 99
(isset($context["order"]) ? $context["order"] : null), "payStatus", array()) && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == 2))) {
            // line 100
            echo "                                        <div class=\"uppercase font-hg font-grey\">
                                            Выполнен
                                        </div>
                                    ";
        }
        // line 104
        echo "
                                </div>
                            </div>
                            

                            <div class=\"row\">
                                <div class=\"col-lg-12 text-center\">
                                    <img style=\"max-width: 770px; max-height: 439px;\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "ad", array()), "cover", array())), "ad_slider_show"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            
                            
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <p>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "ad", array()), "description", array()), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Наименовани</th>
                                            <th>Колличество</th>
                                            <th>Срок</th>
                                            <th>Сумма</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
        echo "</th>
                                            <th>1</th>
                                            <th>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "executDays", array()), "html", null, true);
        echo "</th>
                                            <th>7</th>
                                        </tr>
                                        ";
        // line 140
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "subAd", array())) {
            // line 141
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "subAd", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 142
                echo "                                                <tr>
                                                    <td>";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</td>
                                                    <td>1</td>
                                                    <td>";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "execut_days", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                echo "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                                        ";
        }
        // line 150
        echo "                                        <tr>
                                            <th></th>
                                            <th>Итого:</th>
                                            <th>";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "executDaysAmount", array()), "html", null, true);
        echo "</th>
                                            <th>";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "</th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"portlet light\">
                        <div class=\"portlet-body\">
                            ";
        // line 170
        if (array_key_exists("dialog", $context)) {
            // line 171
            echo "                                <div style=\"height: 400px; overflow-y: scroll; width: auto;\" id=\"dialogBodyContainer\">
                                    ";
            // line 172
            echo twig_include($this->env, $context, "@Message/Message/block/messages.html.twig", array("messages" => $this->getAttribute((isset($context["dialog"]) ? $context["dialog"] : null), "messages", array())));
            echo "
                                </div>

                                <h3>";
            // line 175
            echo $this->env->getExtension('translator')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
            echo "</h3>

                                <form id=\"formSendMessage\" action=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["dialog"]) ? $context["dialog"] : null), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                                    <div class=\"form-group\">
                                        ";
            // line 179
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                    ";
            // line 181
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                                    <input type=\"submit\" class=\"btn btn-primary pull-right\" />
                                </form>
                                <div class=\"clearfix\"></div>
                            ";
        } else {
            // line 186
            echo "                                <div class=\"alert alert-info alert-dismissable\">
                                    Диалог еще не был создан
                                </div>
                            ";
        }
        // line 190
        echo "                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"col-lg-4\">

            ";
        // line 199
        echo twig_include($this->env, $context, "@User/User/shortProfile.html.twig", array("user" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "venditore", array())));
        echo "

            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption\">
                        Жалобы
                    </div>
                </div>
                <div class=\"portlet-body\">
                    <form action=\"\">
                        <div class=\"form-group\">
                            <label>Сообщение</label>
                            <textarea name=\"\" class=\"form-control\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <a class=\"btn btn-primary pull-right\">Пожаловаться</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>





";
    }

    public function getTemplateName()
    {
        return "AdBundle:AdOrder:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 199,  356 => 190,  350 => 186,  342 => 181,  337 => 179,  332 => 177,  327 => 175,  321 => 172,  318 => 171,  316 => 170,  297 => 154,  293 => 153,  288 => 150,  285 => 149,  276 => 146,  272 => 145,  267 => 143,  264 => 142,  259 => 141,  257 => 140,  251 => 137,  246 => 135,  226 => 118,  216 => 111,  207 => 104,  201 => 100,  199 => 99,  194 => 96,  192 => 95,  187 => 92,  185 => 91,  175 => 83,  171 => 81,  165 => 79,  163 => 78,  151 => 69,  139 => 60,  125 => 48,  117 => 44,  115 => 43,  108 => 40,  106 => 39,  99 => 35,  94 => 32,  88 => 30,  86 => 29,  82 => 28,  76 => 25,  65 => 16,  62 => 15,  56 => 11,  52 => 10,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block level_style %}*/
/*     <link href="{{ asset('bundles/metronic/admin/pages/css/timeline.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/ad/css/ad-style.css') }}" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
/* */
/* {% block level_scripts %}*/
/*     <script src="{{ asset('bundles/ad/plugins/bootstrap-rating-master/bootstrap-rating.js') }}"></script>*/
/*     <script src="{{ asset('bundles/ad/js/adOrder.js') }}"></script>*/
/*     <script src="{{ asset('bundles/message/js/message.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-8">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="portlet light">*/
/*                         <div class="portlet-title">*/
/*                             <div class="caption">*/
/*                                 <i class="icon-puzzle font-grey-gallery"></i>*/
/* 								<span class="caption-subject bold font-grey-gallery uppercase">*/
/* 								    {{ page.title }}*/
/*                                 </span>*/
/*                                 <span class="caption-helper">*/
/*                                     #{{ order.id }}*/
/*                                     {% if order.task %}*/
/*                                      до {{ order.task.endDate|date('d.m.Y H:i') }}*/
/*                                     {% endif %}*/
/*                                     &nbsp;&nbsp;&nbsp;*/
/*                                 </span>*/
/*                                 */
/*                                 {{ include('@Ad/AdOrder/block/status.html.twig', {'order': order}) }}*/
/*                             </div>*/
/* */
/*                             <div class="actions">*/
/*                                 {% if order.payStatus and order.status == 0 and app.user == order.venditore %}*/
/*                                     <a href="{{ path('ad_order_adopt', {'id': order.id}) }}" data-target="#ajax-modal" data-toggle="modal" class="btn btn-success tooltips" title="Принять заказ">*/
/*                                         <i class="glyphicon glyphicon-ok"></i>*/
/*                                     </a>*/
/*                                 {% elseif order.payStatus and order.status == 1 and app.user == order.seller %}*/
/*                                     <a href="{{ path('ad_order_finish', {'id': order.id}) }}" data-target="#ajax-modal" data-toggle="modal" class="btn btn-success tooltips" title="Закрыть заказ">*/
/*                                         Подтвердить выполнение*/
/*                                     </a>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         */
/*                         <div class="portlet-body">*/
/*                             <div class="row" style="margin-bottom: 15px;">*/
/* */
/*                                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                                     <div class="font-grey-mint font-sm">*/
/*                                         Сумма заказа*/
/*                                     </div>*/
/*                                     <div class="uppercase font-hg font-red-flamingo">*/
/*                                         {{ order.price }} <span class="font-lg font-grey-mint">$</span>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                                     <div class="font-grey-mint font-sm">*/
/*                                         Дней на выполнение*/
/*                                     </div>*/
/*                                     <div class="uppercase font-hg font-red-flamingo">*/
/*                                         {{ order.executDays }}*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                                     <div class="font-grey-mint font-sm">*/
/*                                         Осталось дней*/
/*                                     </div>*/
/*                                     <div class="uppercase font-hg font-red-flamingo">*/
/*                                         {% if order.payStatus and order.status == 1 %}*/
/*                                         {{ order.daysLeft }}*/
/*                                         {% else %}*/
/*                                             -*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                                     <div class="font-grey-mint font-sm">*/
/*                                         Текущий статус*/
/*                                     </div>*/
/* */
/*                                     {% if order.payStatus and order.status == 0 %}*/
/*                                         <div class="uppercase font-hg font-blue">*/
/*                                             Ожидание*/
/*                                         </div>*/
/*                                     {% elseif order.payStatus and order.status == 1 %}*/
/*                                         <div class="uppercase font-hg font-green">*/
/*                                             В процессе*/
/*                                         </div>*/
/*                                     {% elseif order.payStatus and order.status == 2 %}*/
/*                                         <div class="uppercase font-hg font-grey">*/
/*                                             Выполнен*/
/*                                         </div>*/
/*                                     {% endif %}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             */
/* */
/*                             <div class="row">*/
/*                                 <div class="col-lg-12 text-center">*/
/*                                     <img style="max-width: 770px; max-height: 439px;" src="{{ asset(order.ad.cover)|imagine_filter('ad_slider_show') }}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/*                             */
/*                             */
/*                             <div class="row">*/
/*                                 <div class="col-lg-12">*/
/*                                     <p>{{ order.ad.description }}</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <hr>*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-12">*/
/*                                     <table class="table">*/
/*                                         <thead>*/
/*                                         <tr>*/
/*                                             <th>Наименовани</th>*/
/*                                             <th>Колличество</th>*/
/*                                             <th>Срок</th>*/
/*                                             <th>Сумма</th>*/
/*                                         </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         <tr>*/
/*                                             <th>{{ order.title }}</th>*/
/*                                             <th>1</th>*/
/*                                             <th>{{ order.executDays }}</th>*/
/*                                             <th>7</th>*/
/*                                         </tr>*/
/*                                         {% if order.subAd %}*/
/*                                             {% for item in order.subAd %}*/
/*                                                 <tr>*/
/*                                                     <td>{{ item.title }}</td>*/
/*                                                     <td>1</td>*/
/*                                                     <td>{{ item.execut_days }}</td>*/
/*                                                     <td>{{ item.price }}</td>*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                         {% endif %}*/
/*                                         <tr>*/
/*                                             <th></th>*/
/*                                             <th>Итого:</th>*/
/*                                             <th>{{ order.executDaysAmount }}</th>*/
/*                                             <th>{{ order.amount }}</th>*/
/*                                         </tr>*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="portlet light">*/
/*                         <div class="portlet-body">*/
/*                             {% if dialog is defined %}*/
/*                                 <div style="height: 400px; overflow-y: scroll; width: auto;" id="dialogBodyContainer">*/
/*                                     {{ include('@Message/Message/block/messages.html.twig', {'messages': dialog.messages}) }}*/
/*                                 </div>*/
/* */
/*                                 <h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>*/
/* */
/*                                 <form id="formSendMessage" action="{{ url('fos_message_thread_view', {'threadId': dialog.id}) }}" method="post">*/
/*                                     <div class="form-group">*/
/*                                         {{ form_widget(form.body, {'attr': {'class': 'form-control'}}) }}*/
/*                                     </div>*/
/*                                     {{ form_widget(form) }}*/
/*                                     <input type="submit" class="btn btn-primary pull-right" />*/
/*                                 </form>*/
/*                                 <div class="clearfix"></div>*/
/*                             {% else %}*/
/*                                 <div class="alert alert-info alert-dismissable">*/
/*                                     Диалог еще не был создан*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="col-lg-4">*/
/* */
/*             {{ include('@User/User/shortProfile.html.twig', {'user': order.venditore}) }}*/
/* */
/*             <div class="portlet light">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption">*/
/*                         Жалобы*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet-body">*/
/*                     <form action="">*/
/*                         <div class="form-group">*/
/*                             <label>Сообщение</label>*/
/*                             <textarea name="" class="form-control"></textarea>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <a class="btn btn-primary pull-right">Пожаловаться</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
