<?php

/* NodeBundle:Node:blogSliderBlock.html.twig */
class __TwigTemplate_1f6722a1c20bf66c213ddf7097754e6bf35faf0788c24a7e94107ecaf02eadf8 extends Twig_Template
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
        if ((isset($context["posts"]) ? $context["posts"] : null)) {
            // line 2
            echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h3>
                <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("node_cat_show_blog");
            echo "\">
                    Последние новости
                </a>
            </h3>


            <div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"fotorama\"
                     data-width=\"100%\"
                     data-height=\"326\">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slidePosts"]) {
                // line 18
                echo "                        <div>
                            <div class=\"row node-index-slider\">

                                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["slidePosts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 22
                    echo "                               <div class=\"col-lg-6 node-index-slider__item\">
                                   <h4 style=\"
                                                font-size: 18px;
                                                color: #0E0E0F;
                                                font-family: days;
                                            \">
                                        <a style=\"color: #5D5D5D;\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("node_show_blog_page", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                    echo "\">
                                            ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "
                                        </a>
                                    </h4>
                                   <p>
                                       ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "shortMain", array()), "html", null, true);
                    echo "
                                   </p>

                                   <div class=\"row\">
                                       <div class=\"col-lg-12 col-lg-6 node-index-slider__item-cover text-center\">
                                           ";
                    // line 38
                    if ($this->getAttribute($context["item"], "img", array())) {
                        // line 39
                        echo "                                               <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["item"], "img", array()), 0, array(), "array"), "node_slider_cover")), "html", null, true);
                        echo "\" alt=\"\">
                                           ";
                    }
                    // line 41
                    echo "                                       </div>
                                   </div>
                                </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "

                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slidePosts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </div>
                </div>
            </div>

        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "NodeBundle:Node:blogSliderBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 50,  98 => 45,  89 => 41,  83 => 39,  81 => 38,  73 => 33,  66 => 29,  62 => 28,  54 => 22,  50 => 21,  45 => 18,  41 => 17,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if posts %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h3>*/
/*                 <a href="{{ path('node_cat_show_blog') }}">*/
/*                     Последние новости*/
/*                 </a>*/
/*             </h3>*/
/* */
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                 <div class="fotorama"*/
/*                      data-width="100%"*/
/*                      data-height="326">*/
/*                     {% for slidePosts in posts %}*/
/*                         <div>*/
/*                             <div class="row node-index-slider">*/
/* */
/*                                 {% for item in slidePosts %}*/
/*                                <div class="col-lg-6 node-index-slider__item">*/
/*                                    <h4 style="*/
/*                                                 font-size: 18px;*/
/*                                                 color: #0E0E0F;*/
/*                                                 font-family: days;*/
/*                                             ">*/
/*                                         <a style="color: #5D5D5D;" href="{{ path('node_show_blog_page', {'slug': item.slug}) }}">*/
/*                                             {{ item.title }}*/
/*                                         </a>*/
/*                                     </h4>*/
/*                                    <p>*/
/*                                        {{ item.shortMain }}*/
/*                                    </p>*/
/* */
/*                                    <div class="row">*/
/*                                        <div class="col-lg-12 col-lg-6 node-index-slider__item-cover text-center">*/
/*                                            {% if item.img %}*/
/*                                                <img src="{{ asset(item.img[0]|imagine_filter('node_slider_cover')) }}" alt="">*/
/*                                            {% endif %}*/
/*                                        </div>*/
/*                                    </div>*/
/*                                 </div>*/
/*                                 {% endfor %}*/
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
