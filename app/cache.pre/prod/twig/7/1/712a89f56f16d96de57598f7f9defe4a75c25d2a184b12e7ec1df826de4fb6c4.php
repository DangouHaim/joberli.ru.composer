<?php

/* CoreBundle:Bootstrap:Alert.html.twig */
class __TwigTemplate_17991409406b85d9ebb14c4dbc7c62237653ce6c0664bd9a1dec32fc2dda966e extends Twig_Template
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
        echo "<div class=\"alert alert-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alert"]) ? $context["alert"] : null), "type", array()), "html", null, true);
        echo " alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alert"]) ? $context["alert"] : null), "text", array()), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Bootstrap:Alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
/* <div class="alert alert-{{ alert.type }} alert-dismissable">*/
/*     <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>*/
/*     {{ alert.text }}*/
/* </div>*/
