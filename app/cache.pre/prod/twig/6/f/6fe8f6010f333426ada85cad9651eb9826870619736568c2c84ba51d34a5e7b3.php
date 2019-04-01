<?php

/* AdBundle:Ad:CategoryLoad.html.twig */
class __TwigTemplate_9c481f2747d50e111754f33d255234dc8ef31e5bbecff0ca452bae5016ba3757 extends Twig_Template
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
        echo "<select class=\"form-control\" name=\"category\" id=\"\" required>
    <option value=\"\">Выберите категорию</option>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["child_category"]) ? $context["child_category"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "AdBundle:Ad:CategoryLoad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <select class="form-control" name="category" id="" required>*/
/*     <option value="">Выберите категорию</option>*/
/*     {% for item in child_category %}*/
/*         <option value="{{ item.id }}">{{ item.title }}</option>*/
/*     {% endfor %}*/
/* </select>*/
