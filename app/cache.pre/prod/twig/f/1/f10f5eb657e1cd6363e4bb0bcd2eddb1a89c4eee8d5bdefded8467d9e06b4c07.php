<?php

/* AdBundle:Ad:adShort.html.twig */
class __TwigTemplate_f965ece5d46bf36592cd9bb84a7719e1e052ccb9c9b4bdb83f7c36e732444edc extends Twig_Template
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo " ad-short\">
    <div class=\"ad-short__content\">
        <div class=\"row\">
            <div class=\"col-lg-12 ad-short__userinfo\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <span class=\"fa fa-user\"></span>
                        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "userCreate", array()), "id", array()))), "html", null, true);
        echo "\" class=\"tooltips\" data-container=\"body\" title=\"Страница пользователя\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "userCreate", array()), "username", array()), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"col-lg-6 text-right\">
                        <input type=\"hidden\" class=\"rating\" data-readonly value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "ratingStars", array()), "html", null, true);
        echo "\"/>
                        (";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "rating", array())), "html", null, true);
        echo ")
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_show", array("slug" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "slug", array()))), "html", null, true);
        echo "\" >
                ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "photos", array()), "first", array(), "method")) {
            // line 19
            echo "                    <img style=\"width: 100%;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "photos", array()), "first", array(), "method"), "photo", array()), "path", array()), "ad_cover_show"), "html", null, true);
            echo "\" width=\"303\" height=\"180\" alt=\"\"/>
                ";
        } else {
            // line 21
            echo "                    <img style=\"width: 100%;\" class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter("bundles/core/img/no-image.jpg", "ad_cover_show")), "html", null, true);
            echo "\" alt=\"Нет фото\"/>
                ";
        }
        // line 23
        echo "                </a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 ad-short__info\">
                <p><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_show", array("slug" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "title", array()), "html", null, true);
        echo "</a></p>
            </div>
        </div>
        <div class=\"row ad-short__btn-bar\">
            <div class=\"col-lg-12 ad-short__btn-bar__content\">
                ";
        // line 33
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "isUserFavorite", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method"))) {
            // line 34
            echo "                <a data-toggle=\"button\" data-productid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-link tooltips adLike active\" data-container=\"body\" title=\"Убрать из избранного\">
                    <i class=\"icon-heart\"></i>
                </a>
                ";
        } else {
            // line 38
            echo "                <a data-toggle=\"button\" data-productid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-link tooltips adLike\" data-container=\"body\" title=\"Добавить в избранное\">
                    <i class=\"icon-heart\"></i>
                </a>
                ";
        }
        // line 42
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "userFavorite", array())) > 0)) {
            // line 43
            echo "                    <span class=\"likes\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "userFavorite", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 45
        echo "
                <a href=\"\" class=\"btn btn-link pull-right tooltips\" data-container=\"body\" title=\"Добавить в корзину\">
                    <span class=\"ad-short__price\">\$7</span>
                    <i class=\"icon-basket\"></i>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AdBundle:Ad:adShort.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  106 => 43,  103 => 42,  95 => 38,  87 => 34,  85 => 33,  75 => 28,  68 => 23,  62 => 21,  56 => 19,  54 => 18,  50 => 17,  42 => 12,  38 => 11,  30 => 8,  19 => 1,);
    }
}
/* <div class="{{ class }} ad-short">*/
/*     <div class="ad-short__content">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 ad-short__userinfo">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-6">*/
/*                         <span class="fa fa-user"></span>*/
/*                         <a href="{{ path('user_page', {'id': ad.userCreate.id}) }}" class="tooltips" data-container="body" title="Страница пользователя">{{ ad.userCreate.username }}</a>*/
/*                     </div>*/
/*                     <div class="col-lg-6 text-right">*/
/*                         <input type="hidden" class="rating" data-readonly value="{{ ad.ratingStars }}"/>*/
/*                         ({{ ad.rating|length }})*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-12">*/
/*                 <a href="{{ path('ad_show', { 'slug': ad.slug }) }}" >*/
/*                 {% if ad.photos.first() %}*/
/*                     <img style="width: 100%;" src="{{ ad.photos.first().photo.path|imagine_filter('ad_cover_show') }}" width="303" height="180" alt=""/>*/
/*                 {% else %}*/
/*                     <img style="width: 100%;" class="img-responsive" src="{{ asset('bundles/core/img/no-image.jpg'|imagine_filter('ad_cover_show')) }}" alt="Нет фото"/>*/
/*                 {% endif %}*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12 ad-short__info">*/
/*                 <p><a href="{{ path('ad_show', { 'slug': ad.slug }) }}">{{ ad.title }}</a></p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row ad-short__btn-bar">*/
/*             <div class="col-lg-12 ad-short__btn-bar__content">*/
/*                 {% if app.user and ad.isUserFavorite(app.user) %}*/
/*                 <a data-toggle="button" data-productid="{{ ad.id }}" class="btn btn-link tooltips adLike active" data-container="body" title="Убрать из избранного">*/
/*                     <i class="icon-heart"></i>*/
/*                 </a>*/
/*                 {% else %}*/
/*                 <a data-toggle="button" data-productid="{{ ad.id }}" class="btn btn-link tooltips adLike" data-container="body" title="Добавить в избранное">*/
/*                     <i class="icon-heart"></i>*/
/*                 </a>*/
/*                 {% endif %}*/
/*                 {% if ad.userFavorite | length > 0 %}*/
/*                     <span class="likes">{{ ad.userFavorite | length }}</span>*/
/*                 {% endif %}*/
/* */
/*                 <a href="" class="btn btn-link pull-right tooltips" data-container="body" title="Добавить в корзину">*/
/*                     <span class="ad-short__price">$7</span>*/
/*                     <i class="icon-basket"></i>*/
/*                 </a>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
