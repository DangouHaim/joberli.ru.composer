<?php

/* AdBundle:AdCategory:menu.html.twig */
class __TwigTemplate_7a946e6afcd44eec72e1ba596382018615dae63fd1b074425787be885dc1543c extends Twig_Template
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
        echo "<div class=\"row row-category-top-menu\" id=\"adCategoryTopMenu\" style=\"padding: 0 5px;\">
    <div class=\"col-lg-12\" style=\"background: #fff;\">
        <ul>
            ";
        // line 4
        if (array_key_exists("categories", $context)) {
            // line 5
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "                <li class=\"category-item btn-group\"  role=\"menu\">
                    ";
                // line 7
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "child", array())) > 0)) {
                    // line 8
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-close-others=\"true\"  data-toggle=\"dropdown\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "
                    </a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "child", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item_child"]) {
                        // line 13
                        echo "                        <li>
                            <a href=\"";
                        // line 14
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("child_slug" => $this->getAttribute($context["item_child"], "slug", array()), "slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                        echo "\">
                                ";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item_child"], "title", array()), "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                    </ul>
                    ";
                } else {
                    // line 21
                    echo "                    <a class=\"dropdown-toggle\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 23
                echo "                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        }
        // line 26
        echo "            ";
        if ((array_key_exists("categories_others", $context) && (twig_length_filter($this->env, (isset($context["categories_others"]) ? $context["categories_others"] : null)) > 0))) {
            // line 27
            echo "            <li class=\"category-item btn-group pull-right\"  role=\"menu\">

                <a href=\"#\"  data-hover=\"dropdown\">Прочее</a>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories_others"]) ? $context["categories_others"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "                    <li>
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("child_slug" => $this->getAttribute($this->getAttribute($context["item"], "path", array()), "child", array()), "slug" => $this->getAttribute($this->getAttribute($context["item"], "path", array()), "path", array()))), "html", null, true);
                echo "\">
                            ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </ul>
            </li>
            ";
        }
        // line 41
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AdBundle:AdCategory:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 41,  120 => 38,  110 => 34,  106 => 33,  103 => 32,  99 => 31,  93 => 27,  90 => 26,  87 => 25,  80 => 23,  72 => 21,  68 => 19,  58 => 15,  54 => 14,  51 => 13,  47 => 12,  41 => 9,  36 => 8,  34 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row row-category-top-menu" id="adCategoryTopMenu" style="padding: 0 5px;">*/
/*     <div class="col-lg-12" style="background: #fff;">*/
/*         <ul>*/
/*             {% if categories is defined %}*/
/*                 {% for item in categories %}*/
/*                 <li class="category-item btn-group"  role="menu">*/
/*                     {% if item.child|length > 0 %}*/
/*                     <a href="{{ path('adcategory_show', {'slug': item.slug}) }}" class="dropdown-toggle" data-hover="dropdown" data-close-others="true"  data-toggle="dropdown">*/
/*                         {{ item.title }}*/
/*                     </a>*/
/*                     <ul class="dropdown-menu" role="menu">*/
/*                     {% for item_child in item.child %}*/
/*                         <li>*/
/*                             <a href="{{ path('adcategory_show', {'child_slug': item_child.slug, 'slug': item.slug}) }}">*/
/*                                 {{ item_child.title }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                     </ul>*/
/*                     {% else %}*/
/*                     <a class="dropdown-toggle" href="{{ path('adcategory_show', {'slug': item.slug}) }}" >{{ item.title }}</a>*/
/*                     {% endif %}*/
/*                 </li>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             {% if categories_others is defined and categories_others|length > 0 %}*/
/*             <li class="category-item btn-group pull-right"  role="menu">*/
/* */
/*                 <a href="#"  data-hover="dropdown">Прочее</a>*/
/*                 <ul class="dropdown-menu pull-right" role="menu">*/
/*                 {% for item in categories_others %}*/
/*                     <li>*/
/*                         <a href="{{ path('adcategory_show', {'child_slug': item.path.child, 'slug': item.path.path}) }}">*/
/*                             {{ item.title }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
