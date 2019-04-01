<?php

/* FOSUserBundle:Balance:replenish.html.twig */
class __TwigTemplate_51e799260587ed5231ba1b37f16f02e2533b689386ef78c9b9815c0a495e8c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "FOSUserBundle:Balance:replenish.html.twig", 1);
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
        <div class=\"col-lg-12 user-balance-replenish-status\">

        </div>
    </div>
    <form id=\"user-balance-replenish\" action=\"\" method=\"post\">
        <div class=\"row\">
            <div class=\"col-lg-offset-3 col-lg-6 portlet light\">
                <div class=\"input-group input-group-lg\">
                    <input class=\"form-control\" type=\"number\" name=\"amount\" placeholder=\"Сумма\">
                <span class=\"input-group-btn\">
                <button class=\"btn btn-success\" type=\"submit\">Внести</button>
                </span>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 22
    public function block_script($context, array $blocks = array())
    {
        // line 23
        echo "    <script>
        \$('#user-balance-replenish').ajaxForm({
            success: function (data) {
                \$('input[name=amount]').val('');
                if (data.success) {
                    \$('.user-balance-replenish-status').html('' +
                            '<div class=\"alert alert-success\">' +
                            'На ваш баланс была зачислена сумма \$' + data.amount + ' и теперь составляет \$' +
                            data.balance +
                            '</div>');
                }
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Balance:replenish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  53 => 22,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12 user-balance-replenish-status">*/
/* */
/*         </div>*/
/*     </div>*/
/*     <form id="user-balance-replenish" action="" method="post">*/
/*         <div class="row">*/
/*             <div class="col-lg-offset-3 col-lg-6 portlet light">*/
/*                 <div class="input-group input-group-lg">*/
/*                     <input class="form-control" type="number" name="amount" placeholder="Сумма">*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-success" type="submit">Внести</button>*/
/*                 </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock content %}*/
/* {% block script %}*/
/*     <script>*/
/*         $('#user-balance-replenish').ajaxForm({*/
/*             success: function (data) {*/
/*                 $('input[name=amount]').val('');*/
/*                 if (data.success) {*/
/*                     $('.user-balance-replenish-status').html('' +*/
/*                             '<div class="alert alert-success">' +*/
/*                             'На ваш баланс была зачислена сумма $' + data.amount + ' и теперь составляет $' +*/
/*                             data.balance +*/
/*                             '</div>');*/
/*                 }*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
