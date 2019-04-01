<?php

/* AdBundle:Ad:show.html.twig */
class __TwigTemplate_1f6bcd4f14abe017fc6da03d32d5cb59c1c2f74578644af73f91c2dd9141fefb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::main.html.twig", "AdBundle:Ad:show.html.twig", 1);
        $this->blocks = array(
            'level_style' => array($this, 'block_level_style'),
            'level_plugins' => array($this, 'block_level_plugins'),
            'script_init' => array($this, 'block_script_init'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
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
";
    }

    // line 6
    public function block_level_plugins($context, array $blocks = array())
    {
        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/fotorama/fotorama.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/message/js/message.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_script_init($context, array $blocks = array())
    {
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"portlet light\">
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-ad-show__title\">
                                    <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo "</h1>
                                    <span class=\"text-muted\">Категория: <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", array()), "path", array()), "path", array()), "child_slug" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", array()), "path", array()), "child", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", array()), "title", array()), "html", null, true);
        echo "</a></span>
                                    <div class=\"likes-b\">
                                        ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userFavorite", array())) > 0)) {
            // line 27
            echo "                                            <span class=\"likes-b__count\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userFavorite", array())), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 29
        echo "                                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "isUserFavorite", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method"))) {
            // line 30
            echo "                                            <a data-toggle=\"button\"
                                               data-productid=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
            echo "\"
                                               class=\"btn btn-link tooltips adLike active\"
                                               data-container=\"body\"
                                               title=\"Убрать из избранного\">
                                                <i class=\"icon-heart\"></i>
                                            </a>
                                        ";
        } else {
            // line 38
            echo "                                            <a data-toggle=\"button\"
                                               data-productid=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
            echo "\"
                                               class=\"btn btn-link tooltips adLike\"
                                               data-container=\"body\"
                                               title=\"Добавить в избранное\">
                                                <i class=\"icon-heart\"></i>
                                            </a>
                                        ";
        }
        // line 46
        echo "                                    </div>
                                    <hr/>
                                </div>
                                <div class=\"col-lg-12 col-ad-show__rating\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\"><i class=\"glyphicon glyphicon-eye-open\"></i> Просмотров: ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "views", array()), "html", null, true);
        echo "</div>
                                        <div class=\"col-lg-4\"><i class=\"glyphicon glyphicon-list-alt\"></i> 0 Заказов в очереди</div>
                                        <div class=\"col-lg-4\"><i class=\"glyphicon glyphicon-time\"></i> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "executDays", array()), "html", null, true);
        echo " дн. на выполнение</div>
                                    </div>
                                </div>

                                <div class=\"col-lg-12\" style=\"padding: 0; padding-top: 15px;\">
                                    <div class=\"ad-show__fotorama fotorama\"
                                         data-width=\"840\"
                                         data-height=\"439\">
                                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ($this->getAttribute($this->getAttribute($context["item"], "photo", array(), "any", false, true), "path", array(), "any", true, true)) {
                // line 62
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["item"], "photo", array()), "path", array()), "ad_slider_show"), "html", null, true);
                echo "\"></a>
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12 col-block\">
                    <div class=\"col-block__title\">
                        <h2>Описание</h2>
                    </div>
                    ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array()), "html", null, true);
        echo "
                </div>
            </div>

            ";
        // line 81
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "instruction", array())) {
            // line 82
            echo "            <div class=\"row\">
                <div class=\"col-lg-12 col-block\">
                    <div class=\"col-block__title\">
                        <h2>Инструкция покупателю</h2>
                    </div>
                    ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "instruction", array()), "html", null, true);
            echo "
                </div>
            </div>
            ";
        }
        // line 91
        echo "        </div>

        <div class=\"col-lg-4\" style=\"padding-left: 30px\">
            ";
        // line 94
        if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userCreate", array()), "id", array())))) {
            // line 95
            echo "            <form id=\"ad_order_create\" action=\"";
            echo $this->env->getExtension('routing')->getPath("ad_order_create");
            echo "\" method=\"post\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"portlet light\">
                        <div class=\"portlet-body\">
                            <button
                                    style=\"margin: 15px auto; margin-bottom: 0px; margin-top: -5px;\"
                                    type=\"submit\"
                                    class=\"btn btn-lg btn-block btn-success demo-loading-btn\"
                                    data-loading-text=\"Выполняю...\"
                                    >
                                Заказать сейчас (\$<span id=\"btn-order-price\">7</span>)
                            </button>
                            <input type=\"hidden\" name=\"ad\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
            echo "\">
                        </div>
                    </div>
                </div>
            </div>


            ";
            // line 115
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subAd", array())) > 0)) {
                // line 116
                echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"portlet light\">
                        <div class=\"portlet-body\">
                            <table class=\"table table-striped table-hover\">
                                ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subAd", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subAd"]) {
                    // line 122
                    echo "                                    <tr>
                                        <label>
                                            <td style=\"width: 30px\"><input name=\"subAd[]\" value=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subAd"], "id", array()), "html", null, true);
                    echo "\" class=\"subAd__checkbox\" type=\"checkbox\" data-subad-price=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subAd"], "price", array()), "html", null, true);
                    echo "\"></td>
                                            <td>";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subAd"], "title", array()), "html", null, true);
                    echo "</td>
                                            <td>\$";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subAd"], "price", array()), "html", null, true);
                    echo "</td>
                                        </label>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subAd'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 136
            echo "            </form>
            ";
        } else {
            // line 138
            echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"portlet light\">
                        <div class=\"portlet-body\">
                            <a style=\"margin: 15px auto; margin-bottom: 0px\" href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-lg btn-block btn-primary\">Редактировать</a>
                            ";
            // line 143
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start', array("attr" => array("style" => "margin-top: 10px;")));
            echo "
                            ";
            // line 144
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-block btn-danger")));
            echo "
                            ";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
            echo "
                            ";
            // line 146
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
            echo "
                        </div>
                    </div>
                </div>
            </div>

                ";
            // line 152
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subAd", array())) > 0)) {
                // line 153
                echo "                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"portlet light\">
                                <div class=\"portlet-body\">
                                    <table class=\"table table-striped table-hover\">
                                        ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subAd", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subAd"]) {
                    // line 159
                    echo "                                            <tr>
                                                <label>
                                                    <td style=\"width: 30px\"><input name=\"subAd[]\" value=\"";
                    // line 161
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subAd"], "id", array()), "html", null, true);
                    echo "\" class=\"subAd__checkbox\" type=\"checkbox\" data-subad-price=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subAd"], "price", array()), "html", null, true);
                    echo "\"></td>
                                                    <td>";
                    // line 162
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subAd"], "title", array()), "html", null, true);
                    echo "</td>
                                                    <td>\$";
                    // line 163
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subAd"], "price", array()), "html", null, true);
                    echo "</td>
                                                </label>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subAd'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 173
            echo "            ";
        }
        // line 174
        echo "

            ";
        // line 176
        echo twig_include($this->env, $context, "@User/User/shortProfile.html.twig", array("user" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userCreate", array())));
        echo "

            ";
        // line 178
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rating", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rating", array())) >= 1))) {
            // line 179
            echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"portlet light\">
                        <div class=\"portlet-body\">
                            <div class=\"media\">
                                <h3>Отзывы (";
            // line 184
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rating", array())), "html", null, true);
            echo ")</h3>
                                ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rating", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 186
                echo "                                <div class=\"media\">
                                    <a href=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "order", array()), "seller", array()), "id", array()))), "html", null, true);
                echo "\" class=\"pull-left\">
                                        <img alt=\"\" src=\"";
                // line 188
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "order", array()), "seller", array()), "avatarImg", array())), "ava_xs"), "html", null, true);
                echo "\" class=\"media-object\">
                                    </a>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "order", array()), "seller", array()), "username", array()), "html", null, true);
                echo "
                                            <span>
                                                <input type=\"hidden\" class=\"rating\" data-readonly value=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "rate", array()), "html", null, true);
                echo "\"/>
                                            </span>
                                        </h4>
                                        <p>
                                        ";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "comment", array()), "html", null, true);
                echo "
                                        </p>
                                    </div>
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 208
        echo "

            ";
        // line 210
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tags", array())) > 0)) {
            // line 211
            echo "            <div class=\"row\">
                <div class=\"col-lg-12 col-block\" style=\"padding-top: 15px;\">
                    <div class=\"portlet light\">
                        <div class=\"portlet-body\">
                            <h3>Теги</h3>
                            <ul class=\"list-inline sidebar-tags\">
                                ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 218
                echo "                                    <li>
                                        <a href=\"javascript:;\">
                                            <i class=\"fa fa-tags\"></i> ";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo " </a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 229
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"page-head\">
            <h2>Други услуги от пользователя <a href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userCreate", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userCreate", array()), "username", array()), "html", null, true);
        echo "</a></h2>
        </div>
        ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["other"]) ? $context["other"] : null), "user", array()));
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
            // line 237
            echo "            ";
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
        // line 239
        echo "    </div>

    <div class=\"row\">
        <div class=\"page-head\">
            <h2>Други услуги в <a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adcategory_show", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", array()), "path", array()), "path", array()), "child_slug" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", array()), "path", array()), "child", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", array()), "title", array()), "html", null, true);
        echo "</a></h2>
        </div>
        ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["other"]) ? $context["other"] : null), "category", array()));
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
            // line 246
            echo "            ";
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
        // line 248
        echo "    </div>
";
    }

    // line 251
    public function block_script($context, array $blocks = array())
    {
        // line 252
        echo "    <script>
        \$('.subAd__checkbox').change(function () {

            var amount = parseInt(\$('#btn-order-price').text());
            var subAdPrice = parseInt(\$(this).attr('data-subad-price'));
            if (\$(this).prop(\"checked\")) {
                amount = amount+subAdPrice;
            } else {
                amount = amount-subAdPrice;
            }
            \$('#btn-order-price').text(amount);
        });


        \$('#ad_order_create').ajaxForm({
            success: function (data) {
                location.href=data.redirect;
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdBundle:Ad:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 252,  569 => 251,  564 => 248,  547 => 246,  530 => 245,  523 => 243,  517 => 239,  500 => 237,  483 => 236,  476 => 234,  469 => 229,  461 => 223,  452 => 220,  448 => 218,  444 => 217,  436 => 211,  434 => 210,  430 => 208,  422 => 202,  411 => 197,  404 => 193,  399 => 191,  393 => 188,  389 => 187,  386 => 186,  382 => 185,  378 => 184,  371 => 179,  369 => 178,  364 => 176,  360 => 174,  357 => 173,  349 => 167,  339 => 163,  335 => 162,  329 => 161,  325 => 159,  321 => 158,  314 => 153,  312 => 152,  303 => 146,  299 => 145,  295 => 144,  291 => 143,  287 => 142,  281 => 138,  277 => 136,  269 => 130,  259 => 126,  255 => 125,  249 => 124,  245 => 122,  241 => 121,  234 => 116,  232 => 115,  222 => 108,  205 => 95,  203 => 94,  198 => 91,  191 => 87,  184 => 82,  182 => 81,  175 => 77,  160 => 64,  150 => 62,  145 => 61,  134 => 53,  129 => 51,  122 => 46,  112 => 39,  109 => 38,  99 => 31,  96 => 30,  93 => 29,  87 => 27,  85 => 26,  78 => 24,  74 => 23,  64 => 15,  61 => 14,  56 => 10,  50 => 8,  45 => 7,  42 => 6,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreBundle::main.html.twig' %}*/
/* */
/* {% block level_style %}*/
/*     <link  href="{{ asset('bundles/core/js/fotorama/fotorama.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block level_plugins %}*/
/*     <script src="{{ asset('bundles/core/js/fotorama/fotorama.js') }}"></script>*/
/*     <script src="{{ asset('bundles/message/js/message.js') }}"></script>*/
/* {% endblock %}*/
/* {% block script_init %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content -%}*/
/*     <div class="row">*/
/*         <div class="col-lg-8">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="portlet light">*/
/*                         <div class="portlet-body">*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-12 col-ad-show__title">*/
/*                                     <h1>{{ entity.title }}</h1>*/
/*                                     <span class="text-muted">Категория: <a href="{{ path('adcategory_show', {'slug': entity.category.path.path, 'child_slug':entity.category.path.child}) }}">{{ entity.category.title }}</a></span>*/
/*                                     <div class="likes-b">*/
/*                                         {% if entity.userFavorite | length > 0 %}*/
/*                                             <span class="likes-b__count">{{ entity.userFavorite | length }}</span>*/
/*                                         {% endif %}*/
/*                                         {% if app.user and entity.isUserFavorite(app.user) %}*/
/*                                             <a data-toggle="button"*/
/*                                                data-productid="{{ entity.id }}"*/
/*                                                class="btn btn-link tooltips adLike active"*/
/*                                                data-container="body"*/
/*                                                title="Убрать из избранного">*/
/*                                                 <i class="icon-heart"></i>*/
/*                                             </a>*/
/*                                         {% else %}*/
/*                                             <a data-toggle="button"*/
/*                                                data-productid="{{ entity.id }}"*/
/*                                                class="btn btn-link tooltips adLike"*/
/*                                                data-container="body"*/
/*                                                title="Добавить в избранное">*/
/*                                                 <i class="icon-heart"></i>*/
/*                                             </a>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                     <hr/>*/
/*                                 </div>*/
/*                                 <div class="col-lg-12 col-ad-show__rating">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-4"><i class="glyphicon glyphicon-eye-open"></i> Просмотров: {{ entity.views }}</div>*/
/*                                         <div class="col-lg-4"><i class="glyphicon glyphicon-list-alt"></i> 0 Заказов в очереди</div>*/
/*                                         <div class="col-lg-4"><i class="glyphicon glyphicon-time"></i> {{ entity.executDays }} дн. на выполнение</div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-lg-12" style="padding: 0; padding-top: 15px;">*/
/*                                     <div class="ad-show__fotorama fotorama"*/
/*                                          data-width="840"*/
/*                                          data-height="439">*/
/*                                         {% for item in entity.photos if item.photo.path is defined %}*/
/*                                             <a href="{{ item.photo.path|imagine_filter('ad_slider_show') }}"></a>*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12 col-block">*/
/*                     <div class="col-block__title">*/
/*                         <h2>Описание</h2>*/
/*                     </div>*/
/*                     {{ entity.description }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% if entity.instruction %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 col-block">*/
/*                     <div class="col-block__title">*/
/*                         <h2>Инструкция покупателю</h2>*/
/*                     </div>*/
/*                     {{ entity.instruction }}*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="col-lg-4" style="padding-left: 30px">*/
/*             {% if app.user.id is not defined or app.user.id != entity.userCreate.id  %}*/
/*             <form id="ad_order_create" action="{{ path('ad_order_create') }}" method="post">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="portlet light">*/
/*                         <div class="portlet-body">*/
/*                             <button*/
/*                                     style="margin: 15px auto; margin-bottom: 0px; margin-top: -5px;"*/
/*                                     type="submit"*/
/*                                     class="btn btn-lg btn-block btn-success demo-loading-btn"*/
/*                                     data-loading-text="Выполняю..."*/
/*                                     >*/
/*                                 Заказать сейчас ($<span id="btn-order-price">7</span>)*/
/*                             </button>*/
/*                             <input type="hidden" name="ad" value="{{ entity.id }}">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             {% if entity.subAd|length > 0 %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="portlet light">*/
/*                         <div class="portlet-body">*/
/*                             <table class="table table-striped table-hover">*/
/*                                 {% for subAd in entity.subAd %}*/
/*                                     <tr>*/
/*                                         <label>*/
/*                                             <td style="width: 30px"><input name="subAd[]" value="{{ subAd.id }}" class="subAd__checkbox" type="checkbox" data-subad-price="{{ subAd.price }}"></td>*/
/*                                             <td>{{ subAd.title }}</td>*/
/*                                             <td>${{ subAd.price }}</td>*/
/*                                         </label>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             </form>*/
/*             {% else %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="portlet light">*/
/*                         <div class="portlet-body">*/
/*                             <a style="margin: 15px auto; margin-bottom: 0px" href="{{ path('ad_edit', { 'id': entity.id }) }}" class="btn btn-lg btn-block btn-primary">Редактировать</a>*/
/*                             {{ form_start(delete_form, {'attr': {'style':'margin-top: 10px;'}}) }}*/
/*                             {{ form_widget(delete_form.submit, {'attr': {'class':'btn btn-lg btn-block btn-danger'}}) }}*/
/*                             {{ form_widget(delete_form) }}*/
/*                             {{ form_end(delete_form) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*                 {% if entity.subAd|length > 0 %}*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <div class="portlet light">*/
/*                                 <div class="portlet-body">*/
/*                                     <table class="table table-striped table-hover">*/
/*                                         {% for subAd in entity.subAd %}*/
/*                                             <tr>*/
/*                                                 <label>*/
/*                                                     <td style="width: 30px"><input name="subAd[]" value="{{ subAd.id }}" class="subAd__checkbox" type="checkbox" data-subad-price="{{ subAd.price }}"></td>*/
/*                                                     <td>{{ subAd.title }}</td>*/
/*                                                     <td>${{ subAd.price }}</td>*/
/*                                                 </label>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/* */
/*             {{ include('@User/User/shortProfile.html.twig', {'user': entity.userCreate}) }}*/
/* */
/*             {% if entity.rating is defined and entity.rating|length >= 1 %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="portlet light">*/
/*                         <div class="portlet-body">*/
/*                             <div class="media">*/
/*                                 <h3>Отзывы ({{ entity.rating|length }})</h3>*/
/*                                 {% for item in entity.rating %}*/
/*                                 <div class="media">*/
/*                                     <a href="{{ path('user_page', {'id': item.order.seller.id}) }}" class="pull-left">*/
/*                                         <img alt="" src="{{ asset(item.order.seller.avatarImg)|imagine_filter('ava_xs') }}" class="media-object">*/
/*                                     </a>*/
/*                                     <div class="media-body">*/
/*                                         <h4 class="media-heading">{{ item.order.seller.username }}*/
/*                                             <span>*/
/*                                                 <input type="hidden" class="rating" data-readonly value="{{ item.rate }}"/>*/
/*                                             </span>*/
/*                                         </h4>*/
/*                                         <p>*/
/*                                         {{ item.comment }}*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/* */
/*             {% if entity.tags | length > 0 %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 col-block" style="padding-top: 15px;">*/
/*                     <div class="portlet light">*/
/*                         <div class="portlet-body">*/
/*                             <h3>Теги</h3>*/
/*                             <ul class="list-inline sidebar-tags">*/
/*                                 {% for item in entity.tags %}*/
/*                                     <li>*/
/*                                         <a href="javascript:;">*/
/*                                             <i class="fa fa-tags"></i> {{ item.name }} </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="page-head">*/
/*             <h2>Други услуги от пользователя <a href="{{ path('user_page', {'id': entity.userCreate.id}) }}">{{ entity.userCreate.username }}</a></h2>*/
/*         </div>*/
/*         {% for item in other.user %}*/
/*             {{ include('AdBundle:Ad:adShort.html.twig', {'ad': item, 'class' : 'col-lg-3'}) }}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="page-head">*/
/*             <h2>Други услуги в <a href="{{ path('adcategory_show', {'slug':entity.category.path.path, 'child_slug':entity.category.path.child}) }}">{{ entity.category.title }}</a></h2>*/
/*         </div>*/
/*         {% for item in other.category %}*/
/*             {{ include('AdBundle:Ad:adShort.html.twig', {'ad': item, 'class' : 'col-lg-3'}) }}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/*     <script>*/
/*         $('.subAd__checkbox').change(function () {*/
/* */
/*             var amount = parseInt($('#btn-order-price').text());*/
/*             var subAdPrice = parseInt($(this).attr('data-subad-price'));*/
/*             if ($(this).prop("checked")) {*/
/*                 amount = amount+subAdPrice;*/
/*             } else {*/
/*                 amount = amount-subAdPrice;*/
/*             }*/
/*             $('#btn-order-price').text(amount);*/
/*         });*/
/* */
/* */
/*         $('#ad_order_create').ajaxForm({*/
/*             success: function (data) {*/
/*                 location.href=data.redirect;*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
