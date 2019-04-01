<?php

/* NodeBundle:Node:showBlock.html.twig */
class __TwigTemplate_1e65cbc1759d63eda1d806bba63a9abd3b234526929ff5d88d8b341dfed10d57 extends Twig_Template
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
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "main", array());
    }

    public function getTemplateName()
    {
        return "NodeBundle:Node:showBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ entity.main|raw }}*/
