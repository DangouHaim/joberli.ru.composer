<?php

/* NodeBundle:Node:showBlock.html.twig */
class __TwigTemplate_8723a0c463d7009ac2c35e9736a38a081a5d8103ec14c5815d54e53f1b54533b extends Twig_Template
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
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "main", array());
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
