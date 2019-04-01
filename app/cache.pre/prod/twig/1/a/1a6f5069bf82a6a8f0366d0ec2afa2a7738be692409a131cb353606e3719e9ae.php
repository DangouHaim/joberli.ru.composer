<?php

/* FOSUserBundle:User:dashBoard.html.twig */
class __TwigTemplate_593c6be2df699218e20ac68b7ab7252db383d775b2990eafa7d9bf8ea744c527 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "FOSUserBundle:User:dashBoard.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_cover' => array($this, 'block_page_cover'),
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
        echo "sss
";
    }

    // line 7
    public function block_page_cover($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:dashBoard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block content %}*/
/* sss*/
/* {% endblock %}*/
/* */
/* {% block page_cover %}*/
/* */
/* {% endblock %}*/
/* */
/* */
