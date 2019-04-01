<?php

/* UserBundle:User:userMenu.html.twig */
class __TwigTemplate_0c464c8e73ccdea55eeeae4bb6054b72b9a9d36a42ad691087a6701ad3c092e1 extends Twig_Template
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
        echo "<div class=\"row row-category-top-menu\" style=\"padding: 0 5px;\">
    <div class=\"col-lg-12\" style=\"background: #fff;\">
        <ul>
            <li class=\"category-item btn-group\">
                <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("adtask_list");
        echo "\">
                    Список задач
                </a>
            </li>
            <li class=\"category-item btn-group\">
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ad_order");
        echo "\">
                    Покупки
                </a>
            </li>
            <li class=\"category-item btn-group\">
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ad_order_sale");
        echo "\">
                    Продажи
                </a>
            </li>
            <li class=\"category-item btn-group\">
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_message_inbox");
        echo "\">
                    Сообщения
                </a>
            </li>
            <li class=\"category-item btn-group\">
                <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("user_settings_page");
        echo "\">
                    Настройки
                </a>
            </li>
            <li class=\"category-item btn-group\">
                <a href=\"\">
                    Избранные услуги
                </a>
            </li>
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:userMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 25,  49 => 20,  41 => 15,  33 => 10,  25 => 5,  19 => 1,);
    }
}
/* <div class="row row-category-top-menu" style="padding: 0 5px;">*/
/*     <div class="col-lg-12" style="background: #fff;">*/
/*         <ul>*/
/*             <li class="category-item btn-group">*/
/*                 <a href="{{ path('adtask_list') }}">*/
/*                     Список задач*/
/*                 </a>*/
/*             </li>*/
/*             <li class="category-item btn-group">*/
/*                 <a href="{{ path('ad_order') }}">*/
/*                     Покупки*/
/*                 </a>*/
/*             </li>*/
/*             <li class="category-item btn-group">*/
/*                 <a href="{{ path('ad_order_sale') }}">*/
/*                     Продажи*/
/*                 </a>*/
/*             </li>*/
/*             <li class="category-item btn-group">*/
/*                 <a href="{{ path('fos_message_inbox') }}">*/
/*                     Сообщения*/
/*                 </a>*/
/*             </li>*/
/*             <li class="category-item btn-group">*/
/*                 <a href="{{ path('user_settings_page') }}">*/
/*                     Настройки*/
/*                 </a>*/
/*             </li>*/
/*             <li class="category-item btn-group">*/
/*                 <a href="">*/
/*                     Избранные услуги*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
