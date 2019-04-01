<?php

/* NodeBundle:NodeCategory:show.html.twig */
class __TwigTemplate_885bcd8f101cde67f56d4e777f0a9990edff12a01dbb7e9da3ca2929cde7be1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "NodeBundle:NodeCategory:show.html.twig", 1);
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
        // line 16
        if ((isset($context["last_post"]) ? $context["last_post"] : null)) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["last_post"]) ? $context["last_post"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h4>
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("node_show_blog_page", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                echo "\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                </a>
            </h4>
            ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "shortMain", array()), "html", null, true);
                echo "
        </div>
    </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "NodeBundle:NodeCategory:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  72 => 25,  66 => 22,  62 => 21,  57 => 18,  52 => 17,  50 => 16,  43 => 12,  35 => 7,  31 => 5,  28 => 3,  11 => 1,);
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
/* */
/*     {% if last_post %}*/
/*         {% for item in last_post %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h4>*/
/*                 <a href="{{ path('node_show_blog_page', {'slug': item.slug}) }}">*/
/*                     {{ item.title }}*/
/*                 </a>*/
/*             </h4>*/
/*             {{ item.shortMain }}*/
/*         </div>*/
/*     </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
