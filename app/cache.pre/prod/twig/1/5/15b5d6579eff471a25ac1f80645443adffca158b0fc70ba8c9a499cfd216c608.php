<?php

/* CoreBundle:Notification:topMenu.html.twig */
class __TwigTemplate_a38d46c10f6505b52da767bd17123c3ce1a930d78dd32be33d68962caa6889e7 extends Twig_Template
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
        echo "<li class=\"separator hide\">
</li>
<!-- BEGIN NOTIFICATION DROPDOWN -->
<!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
<li class=\"dropdown dropdown-extended dropdown-notification dropdown-dark\" id=\"header_notification_bar\">
    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
        <i class=\"icon-bell\"></i>
        ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)) > 0)) {
            // line 9
            echo "            <span class=\"badge badge-danger\" id=\"notificationsTopCount\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)), "html", null, true);
            echo "</span>
        ";
        }
        // line 11
        echo "    </a>
    ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)) > 0)) {
            // line 13
            echo "        <ul class=\"dropdown-menu\" style=\"margin-top: 0px\">
            <li class=\"external\">
                <h3><span class=\"bold\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)), "html", null, true);
            echo " новых </span> уведомлений</h3>
                <a href=\"extra_profile.html\">все</a>
            </li>
            <li>
                <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
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
                // line 21
                echo "                        ";
                echo twig_include($this->env, $context, "CoreBundle:Notification:notificationsType.html.twig", array("notification" => $context["item"]));
                echo "
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
            // line 23
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        // line 27
        echo "</li>
<!-- END NOTIFICATION DROPDOWN -->";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Notification:topMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  87 => 23,  70 => 21,  53 => 20,  45 => 15,  41 => 13,  39 => 12,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <li class="separator hide">*/
/* </li>*/
/* <!-- BEGIN NOTIFICATION DROPDOWN -->*/
/* <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/* <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">*/
/*     <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/
/*         <i class="icon-bell"></i>*/
/*         {% if notifications|length > 0 %}*/
/*             <span class="badge badge-danger" id="notificationsTopCount">{{ notifications|length }}</span>*/
/*         {% endif %}*/
/*     </a>*/
/*     {% if notifications|length > 0 %}*/
/*         <ul class="dropdown-menu" style="margin-top: 0px">*/
/*             <li class="external">*/
/*                 <h3><span class="bold">{{ notifications|length }} новых </span> уведомлений</h3>*/
/*                 <a href="extra_profile.html">все</a>*/
/*             </li>*/
/*             <li>*/
/*                 <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">*/
/*                     {% for item in notifications %}*/
/*                         {{ include('CoreBundle:Notification:notificationsType.html.twig', {'notification': item}) }}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     {% endif %}*/
/* </li>*/
/* <!-- END NOTIFICATION DROPDOWN -->*/
