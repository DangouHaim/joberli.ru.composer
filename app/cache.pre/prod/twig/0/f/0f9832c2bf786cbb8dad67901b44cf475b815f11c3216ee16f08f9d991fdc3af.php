<?php

/* @Ad/Sale/block/menu.html.twig */
class __TwigTemplate_02b9aa0be1f7ad89e66511d401d53d0b6de9688f5735e1714b3ec699dd89e18c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"btn-group-vertical\" role=\"group\" aria-label=\"Vertical button group\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ad_order_sale");
        echo "\" class=\"btn btn-default\">Управление заказами</a>
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("ad_order_sale_stat");
        echo "\" class=\"btn btn-default\">Статика</a>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("ad_order_sale_services");
        echo "\" class=\"btn btn-default\">Мои Услуги</a>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ad_order_sale_finances");
        echo "\" class=\"btn btn-default\">Финансы</a>
</div>";
    }

    public function getTemplateName()
    {
        return "@Ad/Sale/block/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="btn-group-vertical" role="group" aria-label="Vertical button group">*/
/*     <a href="{{ path('ad_order_sale') }}" class="btn btn-default">Управление заказами</a>*/
/*     <a href="{{ path('ad_order_sale_stat') }}" class="btn btn-default">Статика</a>*/
/*     <a href="{{ path('ad_order_sale_services') }}" class="btn btn-default">Мои Услуги</a>*/
/*     <a href="{{ path('ad_order_sale_finances') }}" class="btn btn-default">Финансы</a>*/
/* </div>*/
