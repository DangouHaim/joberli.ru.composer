<?php

/* AdBundle:Level:labelProfile.html.twig */
class __TwigTemplate_a19508d43e0ac47e4be35a747013980f1820ad8e30d9dfa173e36c024d271089 extends Twig_Template
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
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array()) == 1)) {
            // line 2
            echo "    <span class=\"badge badge-info label-level-lg shortPrfofile__level\">
        1
    </span>
";
        } elseif (($this->getAttribute(        // line 5
(isset($context["user"]) ? $context["user"] : null), "level", array()) == 2)) {
            // line 6
            echo "    <span class=\"badge badge-success label-level-lg shortPrfofile__level\">
        2
    </span>
";
        } elseif (($this->getAttribute(        // line 9
(isset($context["user"]) ? $context["user"] : null), "level", array()) == 3)) {
            // line 10
            echo "    <span class=\"badge badge-warning label-level-lg shortPrfofile__level\">
        3
    </span>
";
        } else {
            // line 14
            echo "    <span class=\"badge badge-default label-level-lg shortPrfofile__level\">
        0
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "AdBundle:Level:labelProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 14,  35 => 10,  33 => 9,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if user.level == 1 %}*/
/*     <span class="badge badge-info label-level-lg shortPrfofile__level">*/
/*         1*/
/*     </span>*/
/* {% elseif user.level == 2 %}*/
/*     <span class="badge badge-success label-level-lg shortPrfofile__level">*/
/*         2*/
/*     </span>*/
/* {% elseif user.level == 3 %}*/
/*     <span class="badge badge-warning label-level-lg shortPrfofile__level">*/
/*         3*/
/*     </span>*/
/* {% else %}*/
/*     <span class="badge badge-default label-level-lg shortPrfofile__level">*/
/*         0*/
/*     </span>*/
/* {% endif %}*/
