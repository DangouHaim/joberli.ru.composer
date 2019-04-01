<?php

/* AdBundle:AdOrder:pay.html.twig */
class __TwigTemplate_a6d94bb25ede57ce1a21ec337cecd0f4a59659650dc7682d0d0b49b0d2f2c49b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:AdOrder:pay.html.twig", 1);
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
            <h1>Оплата: Заказ №";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-12 ad-order-pay-status\">

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4 portlet light\">
            <img style=\"width: 100%;\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "ad", array()), "cover", array()), "html", null, true);
        echo "\" width=\"303\" height=\"180\" alt=\"\"/>

            <dl>
                <dt>Название услуги</dt>
                <dd>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
        echo "</dd>

                <dt>Дни на выполнения</dt>
                <dd>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "executDaysAmount", array()), "html", null, true);
        echo "</dd>

                <dt>Цена</dt>
                <dd>\$ ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "</dd>
            ";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "subAd", array())) > 0)) {
            // line 29
            echo "            <table class=\"table table-striped table-hover table-condensed\">
                <dt>Доп. Услуги</dt>
                <dd>
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "subAd", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "                <tr>
                    <th>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</th>
                    <td>\$";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </dd>
            </table>
            ";
        }
        // line 41
        echo "            </dl>

        </div>
        
        <div class=\"col-lg-4\">
            <div class=\"note note-info note-shadow\">
                <p>
                    На Вашем балансе <strong>\$";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "seller", array()), "userData", array()), "balance", array()), "html", null, true);
        echo "</strong>
                </p>
            </div>
            <a onclick=\"ad_order_pay()\" class=\"btn btn-block btn-lg btn-success\"><i class=\"fa fa-credit-card\"></i> Оплатить</a>
        </div>
    </div>
";
    }

    // line 56
    public function block_script($context, array $blocks = array())
    {
        // line 57
        echo "    <script>
        function ad_order_pay() {
            \$.ajax({
                url:'";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_order_pay", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
        echo "',
                type: 'post',
                data: {action:'pay'},
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        \$('.ad-order-pay-status').html('<div class=\"alert alert-success\">' +
                                'Средства зачислены успешно' +
                                '</div>');
                    } else {
                        \$('.ad-order-pay-status').html('<div class=\"alert alert-danger\">' + data.msg + '</div>');
                    }
                }
            })
        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "AdBundle:AdOrder:pay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 60,  128 => 57,  125 => 56,  114 => 48,  105 => 41,  100 => 38,  91 => 35,  87 => 34,  84 => 33,  80 => 32,  75 => 29,  73 => 28,  69 => 27,  63 => 24,  57 => 21,  50 => 17,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1>Оплата: Заказ №{{ order.id }}</h1>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-12 ad-order-pay-status">*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-lg-4 portlet light">*/
/*             <img style="width: 100%;" src="{{ order.ad.cover }}" width="303" height="180" alt=""/>*/
/* */
/*             <dl>*/
/*                 <dt>Название услуги</dt>*/
/*                 <dd>{{ order.title }}</dd>*/
/* */
/*                 <dt>Дни на выполнения</dt>*/
/*                 <dd>{{ order.executDaysAmount }}</dd>*/
/* */
/*                 <dt>Цена</dt>*/
/*                 <dd>$ {{ order.amount }}</dd>*/
/*             {% if order.subAd|length > 0 %}*/
/*             <table class="table table-striped table-hover table-condensed">*/
/*                 <dt>Доп. Услуги</dt>*/
/*                 <dd>*/
/*                 {% for item in order.subAd %}*/
/*                 <tr>*/
/*                     <th>{{ item.title }}</th>*/
/*                     <td>${{ item.price }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </dd>*/
/*             </table>*/
/*             {% endif %}*/
/*             </dl>*/
/* */
/*         </div>*/
/*         */
/*         <div class="col-lg-4">*/
/*             <div class="note note-info note-shadow">*/
/*                 <p>*/
/*                     На Вашем балансе <strong>${{ order.seller.userData.balance }}</strong>*/
/*                 </p>*/
/*             </div>*/
/*             <a onclick="ad_order_pay()" class="btn btn-block btn-lg btn-success"><i class="fa fa-credit-card"></i> Оплатить</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock content %}*/
/* */
/* {% block script %}*/
/*     <script>*/
/*         function ad_order_pay() {*/
/*             $.ajax({*/
/*                 url:'{{ path("ad_order_pay", {"id": order.id}) }}',*/
/*                 type: 'post',*/
/*                 data: {action:'pay'},*/
/*                 dataType: 'json',*/
/*                 success: function (data) {*/
/*                     if (data.success) {*/
/*                         $('.ad-order-pay-status').html('<div class="alert alert-success">' +*/
/*                                 'Средства зачислены успешно' +*/
/*                                 '</div>');*/
/*                     } else {*/
/*                         $('.ad-order-pay-status').html('<div class="alert alert-danger">' + data.msg + '</div>');*/
/*                     }*/
/*                 }*/
/*             })*/
/*         }*/
/* */
/*     </script>*/
/* {% endblock script %}*/
