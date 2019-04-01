<?php

/* NodeBundle:Node:show.html.twig */
class __TwigTemplate_fb6010834e7ec7ee8f91d8227c3cce08e3508c241fe7619e396647ef287935cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "NodeBundle:Node:show.html.twig", 1);
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
        // line 5
        echo "<div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo "</h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 12
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "main", array());
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "NodeBundle:Node:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  35 => 7,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1>{{ entity.title }}</h1>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             {{ entity.main|raw }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
