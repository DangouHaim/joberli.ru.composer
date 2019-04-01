<?php

/* FOSMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_7fb2ec2f450602620700c7781b08ab92b0ad76bc483986b3bd1dde0c4439a564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 1);
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
        echo "    <div class=\"portle light\">
        <div class=\"portlet-body\">
            <div class=\"tabbable-custom \">
                <ul class=\"nav nav-tabs \">
                    <li>
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_message_inbox");
        echo "\">
                            Входящие
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_message_sent");
        echo "\">
                            Отправленные
                        </a>
                    </li>
                    <li class=\"active\">
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_message_deleted");
        echo "\">
                            Корзина
                        </a>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\">
                        ";
        // line 26
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 26)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : null))));
        // line 27
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  64 => 26,  54 => 19,  46 => 14,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="portle light">*/
/*         <div class="portlet-body">*/
/*             <div class="tabbable-custom ">*/
/*                 <ul class="nav nav-tabs ">*/
/*                     <li>*/
/*                         <a href="{{ path('fos_message_inbox') }}">*/
/*                             Входящие*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('fos_message_sent') }}">*/
/*                             Отправленные*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         <a href="{{ path('fos_message_deleted') }}">*/
/*                             Корзина*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <div class="tab-content">*/
/*                     <div class="tab-pane active">*/
/*                         {% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
