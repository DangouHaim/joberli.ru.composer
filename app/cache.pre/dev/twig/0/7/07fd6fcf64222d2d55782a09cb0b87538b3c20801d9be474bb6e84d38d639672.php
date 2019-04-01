<?php

/* AdBundle:Ad:index.html.twig */
class __TwigTemplate_8eef455538149bac51a87fa659ebe42e64e52e3564bf50081a2525dde31d69e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:Ad:index.html.twig", 1);
        $this->blocks = array(
            'level_style' => array($this, 'block_level_style'),
            'level_plugins' => array($this, 'block_level_plugins'),
            'page_cover' => array($this, 'block_page_cover'),
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
    public function block_level_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/fotorama/fotorama.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/node/css/node-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_level_plugins($context, array $blocks = array())
    {
        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/fotorama/fotorama.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/message/js/message.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 14
    public function block_page_cover($context, array $blocks = array())
    {
        // line 15
        echo "
    <div class=\"container\" style=\"
    position: relative;
    z-index: 999;
    margin-bottom: -146px;
    top: 229px;
\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-lg-offset-3\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\" style=\"height: 100px;\">
                        <h1>Текстовый текс</h1>
                        <p>dddd</p>
                    </div>
                    <div class=\"col-lg-10 col-lg-offset-1\">
                        <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ad_search");
        echo "\" class=\"input-group input-group-lg\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Что ищем?\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-success\" type=\"submit\">Найти</button>
                            </span>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=\"fotorama\" data-width=\"100%\" data-height=\"435\" data-autoplay=\"true\"
         style=\"margin-top: 105px; margin-bottom: -120px; height: 435px; overflow-y: hidden\">
        <div>
            <img src=\"http://s.fotorama.io/okonechnikov/1-lo.jpg\" style=\"width: 100%\" alt=\"\">
        </div>
        <div>
            <img src=\"http://s.fotorama.io/okonechnikov/2-lo.jpg\" style=\"width: 100%\" alt=\"\">
        </div>
        <div>
            <img src=\"http://s.fotorama.io/okonechnikov/20-lo.jpg\" style=\"width: 100%\" alt=\"\">
        </div>
        <div>
            <img src=\"http://s.fotorama.io/okonechnikov/21-lo.jpg\" style=\"width: 100%\" alt=\"\">
        </div>
        <div>
            <img src=\"http://s.fotorama.io/okonechnikov/22-lo.jpg\" style=\"width: 100%\" alt=\"\">
        </div>
    </div>
";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "<div class=\"row\">
    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "    ";
            echo twig_include($this->env, $context, "AdBundle:Ad:adShort.html.twig", array("ad" => $context["item"], "class" => "col-lg-3"));
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</div>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <hr>
    </div>
</div>

";
        // line 74
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NodeBundle:Node:blogSliderBlock"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdBundle:Ad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 74,  155 => 67,  138 => 65,  121 => 64,  118 => 63,  115 => 62,  79 => 30,  62 => 15,  59 => 14,  53 => 9,  48 => 8,  45 => 7,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block level_style %}*/
/*     <link  href="{{ asset('bundles/core/js/fotorama/fotorama.css') }}" rel="stylesheet">*/
/*     <link  href="{{ asset('bundles/node/css/node-style.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block level_plugins %}*/
/*     <script src="{{ asset('bundles/core/js/fotorama/fotorama.js') }}"></script>*/
/*     <script src="{{ asset('bundles/message/js/message.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block page_cover %}*/
/* */
/*     <div class="container" style="*/
/*     position: relative;*/
/*     z-index: 999;*/
/*     margin-bottom: -146px;*/
/*     top: 229px;*/
/* ">*/
/*         <div class="row">*/
/*             <div class="col-lg-6 col-lg-offset-3">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 text-center" style="height: 100px;">*/
/*                         <h1>Текстовый текс</h1>*/
/*                         <p>dddd</p>*/
/*                     </div>*/
/*                     <div class="col-lg-10 col-lg-offset-1">*/
/*                         <form action="{{ path('ad_search') }}" class="input-group input-group-lg">*/
/*                             <input type="text" name="q" class="form-control" placeholder="Что ищем?">*/
/*                             <span class="input-group-btn">*/
/*                                 <button class="btn btn-success" type="submit">Найти</button>*/
/*                             </span>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="fotorama" data-width="100%" data-height="435" data-autoplay="true"*/
/*          style="margin-top: 105px; margin-bottom: -120px; height: 435px; overflow-y: hidden">*/
/*         <div>*/
/*             <img src="http://s.fotorama.io/okonechnikov/1-lo.jpg" style="width: 100%" alt="">*/
/*         </div>*/
/*         <div>*/
/*             <img src="http://s.fotorama.io/okonechnikov/2-lo.jpg" style="width: 100%" alt="">*/
/*         </div>*/
/*         <div>*/
/*             <img src="http://s.fotorama.io/okonechnikov/20-lo.jpg" style="width: 100%" alt="">*/
/*         </div>*/
/*         <div>*/
/*             <img src="http://s.fotorama.io/okonechnikov/21-lo.jpg" style="width: 100%" alt="">*/
/*         </div>*/
/*         <div>*/
/*             <img src="http://s.fotorama.io/okonechnikov/22-lo.jpg" style="width: 100%" alt="">*/
/*         </div>*/
/*     </div>*/
/* {% endblock page_cover %}*/
/* {% block content -%}*/
/* <div class="row">*/
/*     {% for item in entities %}*/
/*     {{ include('AdBundle:Ad:adShort.html.twig', {'ad': item, 'class': 'col-lg-3' }) }}*/
/*     {% endfor %}*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <hr>*/
/*     </div>*/
/* </div>*/
/* */
/* {{ render(controller('NodeBundle:Node:blogSliderBlock')) }}*/
/* {% endblock %}*/
