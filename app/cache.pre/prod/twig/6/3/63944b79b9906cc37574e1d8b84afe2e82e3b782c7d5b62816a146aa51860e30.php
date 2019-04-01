<?php

/* CoreBundle::main.html.twig */
class __TwigTemplate_ad7089fb6d9294c77904a4cfdfb2f4de754920bffe4ca609dd5546cb0081d685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'level_style' => array($this, 'block_level_style'),
            'body' => array($this, 'block_body'),
            'page_cover' => array($this, 'block_page_cover'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'level_plugins' => array($this, 'block_level_plugins'),
            'level_scripts' => array($this, 'block_level_scripts'),
            'script_init' => array($this, 'block_script_init'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>";
        // line 11
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        }
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>

";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body  class=\"page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo\">
";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 311
        echo "</body>
</html>";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    ";
        // line 26
        $this->displayBlock('level_style', $context, $blocks);
        // line 27
        echo "    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/css/components-rounded.css"), "html", null, true);
        echo "\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/admin/layout4/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/admin/layout4/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/admin/layout4/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/css/ad-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->
";
    }

    // line 26
    public function block_level_style($context, array $blocks = array())
    {
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"page-header navbar navbar-fixed-top\">
        <!-- BEGIN HEADER INNER -->
        <div class=\"page-header-inner container\">
            <!-- BEGIN LOGO -->
            <div class=\"page-logo\">
                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("core_index");
        echo "\">
                    Joberli
                </a>
            </div>
            <!-- END LOGO -->

            <!-- BEGIN PAGE TOP -->
            <div class=\"page-top\">
                <!-- BEGIN HEADER SEARCH BOX -->
                <!-- DOC: Apply \"search-form-expanded\" right after the \"search-form\" class to have half expanded search box -->
                <form class=\"search-form\" action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("ad_search");
        echo "\" method=\"GET\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Поиск...\" name=\"q\">
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<a href=\"javascript:;\" class=\"btn submit\"><i class=\"icon-magnifier\"></i></a>
\t\t\t\t\t</span>
                    </div>
                </form>
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class=\"top-menu\">
                    <ul class=\"nav navbar-nav pull-right\">
                        <li class=\"separator hide\">
                        </li>


                        <li class=\"menu-item\">
                            <a href=\"\">
                                О нас
                            </a>
                        </li>
                        ";
        // line 81
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 82
            echo "                            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoreBundle:Notification:topMenu"));
            echo "
                            <li class=\"separator hide\">
                            </li>
                            <li class=\"item-header-menu\">
                                <a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("fos_message_inbox");
            echo "\" class=\"item-header-menu__link\" >
                                    <i class=\"icon-envelope-open\"></i>
                                    ";
            // line 88
            if (($this->env->getExtension('fos_message')->getNbUnread() > 0)) {
                // line 89
                echo "                                        <span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('fos_message')->getNbUnread(), "html", null, true);
                echo " </span>
                                    ";
            }
            // line 91
            echo "                                </a>
                            </li>
                            <li class=\"item-header-menu\">
                                <a class=\"item-header-menu__link\" >
                                    <i class=\"icon-wallet\"></i>
                                    <span class=\"badge badge-success\">
                                        \$";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "balance", array()), "html", null, true);
            echo "
                                    </span>
                                </a>
                            </li>
                            <li class=\"dropdown dropdown-user dropdown-dark\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <span class=\"username username-hide-on-mobile\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt=\"\" class=\"img-circle\" src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatarImg", array()), "ava_xs")), "html", null, true);
            echo "\">
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-default\" style=\"margin-top: 0px\">
                                    <li>
                                        <a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("user_dashboard");
            echo "\">Панель управления</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("user_settings_page");
            echo "\">Настройки</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("ad");
            echo "\">Объявление</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 119
            echo $this->env->getExtension('routing')->getPath("ad_favorite");
            echo "\">Избранные</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 122
            echo $this->env->getExtension('routing')->getPath("ad_new");
            echo "\">Добавить объявление</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("user_balance_replenish");
            echo "\">Пополнить баланс</a>
                                    </li>

                                    ";
            // line 128
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 129
                echo "                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"";
                // line 131
                echo $this->env->getExtension('routing')->getPath("adcategory");
                echo "\">Категории</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 134
                echo $this->env->getExtension('routing')->getPath("adcategory_levelmanager");
                echo "\">Уровни
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 138
                echo $this->env->getExtension('routing')->getPath("adcategory_new");
                echo "\">Добавить категории</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 141
                echo $this->env->getExtension('routing')->getPath("node_manager");
                echo "\">Управление контентом</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 144
                echo $this->env->getExtension('routing')->getPath("users_manager");
                echo "\">Пользователи</a>
                                    </li>
                                    ";
            }
            // line 147
            echo "                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"";
            // line 149
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Выйти </a>
                                    </li>
                                </ul>
                            </li>
                        ";
        } else {
            // line 154
            echo "                            <li class=\"menu-item\">
                                <a href=\"";
            // line 155
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" style=\"
                                background: #3DA83E;color: #fff;
                                \">
                                    Начни продавать
                                </a>
                            </li>
                            <li class=\"menu-item\"><a href=\"";
            // line 161
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Войти</a></li>
                        ";
        }
        // line 163
        echo "                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->

        <div style=\"width: 100%; background: #fff;\">
            <div class=\"container\">
                ";
        // line 174
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "userMenu", array(), "any", true, true)) {
            // line 175
            echo "                    ";
            $this->loadTemplate("UserBundle:User:userMenu.html.twig", "CoreBundle::main.html.twig", 175)->display($context);
            // line 176
            echo "                ";
        } else {
            // line 177
            echo "                ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AdBundle:AdCategory:menu"));
            echo "
                ";
        }
        // line 179
        echo "            </div>
        </div>

    </div>

    <div class=\"clearfix\"></div>

    ";
        // line 186
        $this->displayBlock('page_cover', $context, $blocks);
        // line 187
        echo "
    <div class=\"container\">
        <div class=\"page-container\">
            <div class=\"page-content-wrapper\">
                <div class=\"row\">
                    ";
        // line 192
        $this->displayBlock('content', $context, $blocks);
        // line 199
        echo "                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid footer\">
        <div class=\"row blocks\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">";
        // line 208
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NodeBundle:Node:showBlock", array("id" => 4)));
        echo "</div>
                    <div class=\"col-lg-4\">";
        // line 209
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NodeBundle:Node:showBlock", array("id" => 5)));
        echo "</div>
                    <div class=\"col-lg-4\">";
        // line 210
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NodeBundle:Node:showBlock", array("id" => 6)));
        echo "</div>
                </div>
            </div>
        </div>
        <div class=\"row menu\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 menu-links\">
                        <a href=\"/\">Ссылка</a>
                        <a href=\"/\">Ссылка</a>
                        <a href=\"/\">Ссылка</a>
                        <a href=\"/\">Ссылка</a>
                        <a href=\"/\">Ссылка</a>
                        <a href=\"/\">Ссылка</a>
                        <a href=\"/\">Ссылка</a>
                        <a href=\"/\">Ссылка</a>
                        <a href=\"/\">Ссылка</a>
                    </div>
                    <div class=\"col-lg-4\">Нижнее меню</div>
                </div>
            </div>

        </div>
    </div>

    <!--DOC: Aplly \"modal-cached\" class after \"modal\" class to enable ajax content caching-->
    <div class=\"modal fade\" id=\"ajax-modal\" role=\"basic\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/img/loading-spinner-grey.gif"), "html", null, true);
        echo "\" alt=\"\" class=\"loading\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;Загрузка... </span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
";
        // line 248
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 186
    public function block_page_cover($context, array $blocks = array())
    {
    }

    // line 192
    public function block_content($context, array $blocks = array())
    {
        // line 193
        echo "                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                404
                            </div>
                        </div>
                    ";
    }

    // line 248
    public function block_javascripts($context, array $blocks = array())
    {
        // line 249
        echo "        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 271
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

        ";
        // line 273
        $this->displayBlock('level_plugins', $context, $blocks);
        // line 274
        echo "        <!-- END PAGE LEVEL PLUGINS -->


        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/plugins/bootstrap-rating-master/bootstrap-rating.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/notification.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/metronic/admin/layout4/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ad/js/ad.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        // line 283
        $this->displayBlock('level_scripts', $context, $blocks);
        // line 284
        echo "        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {
                Metronic.init(); // init metronic core componets
                Layout.init(); // init layout

                var links = {
                    urlAddOrRemoveFavorite: '";
        // line 293
        echo $this->env->getExtension('routing')->getPath("ad_favorite_add");
        echo "'
                };
                Ad.init(links);

                ";
        // line 297
        $this->displayBlock('script_init', $context, $blocks);
        // line 298
        echo "            });

            \$(\"#adCategoryTopMenu a\").click(function(){
                var link =  \$(this).attr(\"href\");
                location.href=link;
            })

            \$('input.rating').rating();
        </script>
        ";
        // line 307
        $this->displayBlock('script', $context, $blocks);
        // line 308
        echo "        <!-- END JAVASCRIPTS -->
    ";
    }

    // line 273
    public function block_level_plugins($context, array $blocks = array())
    {
    }

    // line 283
    public function block_level_scripts($context, array $blocks = array())
    {
    }

    // line 297
    public function block_script_init($context, array $blocks = array())
    {
    }

    // line 307
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoreBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 307,  623 => 297,  618 => 283,  613 => 273,  608 => 308,  606 => 307,  595 => 298,  593 => 297,  586 => 293,  575 => 284,  573 => 283,  569 => 282,  565 => 281,  561 => 280,  557 => 279,  553 => 278,  547 => 274,  545 => 273,  540 => 271,  536 => 270,  529 => 266,  525 => 265,  521 => 264,  517 => 263,  513 => 262,  509 => 261,  505 => 260,  501 => 259,  496 => 257,  491 => 255,  487 => 254,  482 => 252,  478 => 251,  474 => 249,  471 => 248,  462 => 193,  459 => 192,  454 => 186,  450 => 248,  439 => 240,  406 => 210,  402 => 209,  398 => 208,  387 => 199,  385 => 192,  378 => 187,  376 => 186,  367 => 179,  361 => 177,  358 => 176,  355 => 175,  353 => 174,  340 => 163,  335 => 161,  326 => 155,  323 => 154,  315 => 149,  311 => 147,  305 => 144,  299 => 141,  293 => 138,  286 => 134,  280 => 131,  276 => 129,  274 => 128,  268 => 125,  262 => 122,  256 => 119,  250 => 116,  243 => 112,  237 => 109,  230 => 105,  225 => 103,  216 => 97,  208 => 91,  202 => 89,  200 => 88,  195 => 86,  187 => 82,  185 => 81,  161 => 60,  148 => 50,  141 => 45,  138 => 44,  133 => 26,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  96 => 27,  94 => 26,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 18,  69 => 17,  64 => 311,  62 => 44,  54 => 40,  52 => 17,  41 => 11,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->*/
/* <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->*/
/* <!--[if !IE]><!-->*/
/* <html lang="en" class="no-js">*/
/* <!--<![endif]-->*/
/* */
/* <!-- BEGIN HEAD -->*/
/* <head>*/
/*     <meta charset="utf-8"/>*/
/*     <title>{% if page.title is defined %}{{ page.title }}{% endif %}</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta content="width=device-width, initial-scale=1" name="viewport"/>*/
/*     <meta content="" name="description"/>*/
/*     <meta content="" name="author"/>*/
/* */
/* {% block stylesheets %}*/
/*     <!-- BEGIN GLOBAL MANDATORY STYLES -->*/
/*     <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/metronic/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/metronic/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/metronic/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/metronic/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <!-- END GLOBAL MANDATORY STYLES -->*/
/* */
/*     {% block level_style %}{% endblock %}*/
/*     <!-- END PAGE LEVEL STYLES -->*/
/* */
/*     <!-- BEGIN THEME STYLES -->*/
/*     <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->*/
/*     <link href="{{ asset('bundles/metronic/css/components-rounded.css') }}" id="style_components" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/metronic/css/plugins.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/metronic/admin/layout4/css/layout.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/metronic/admin/layout4/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>*/
/*     <link href="{{ asset('bundles/metronic/admin/layout4/css/custom.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/core/css/style.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/ad/css/ad-style.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <!-- END THEME STYLES -->*/
/* {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>*/
/* </head>*/
/* */
/* <body  class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">*/
/* {% block body %}*/
/*     <div class="page-header navbar navbar-fixed-top">*/
/*         <!-- BEGIN HEADER INNER -->*/
/*         <div class="page-header-inner container">*/
/*             <!-- BEGIN LOGO -->*/
/*             <div class="page-logo">*/
/*                 <a href="{{ path('core_index') }}">*/
/*                     Joberli*/
/*                 </a>*/
/*             </div>*/
/*             <!-- END LOGO -->*/
/* */
/*             <!-- BEGIN PAGE TOP -->*/
/*             <div class="page-top">*/
/*                 <!-- BEGIN HEADER SEARCH BOX -->*/
/*                 <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->*/
/*                 <form class="search-form" action="{{ path('ad_search') }}" method="GET">*/
/*                     <div class="input-group">*/
/*                         <input type="text" class="form-control input-sm" placeholder="Поиск..." name="q">*/
/* 					<span class="input-group-btn">*/
/* 					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>*/
/* 					</span>*/
/*                     </div>*/
/*                 </form>*/
/*                 <!-- END HEADER SEARCH BOX -->*/
/*                 <!-- BEGIN TOP NAVIGATION MENU -->*/
/*                 <div class="top-menu">*/
/*                     <ul class="nav navbar-nav pull-right">*/
/*                         <li class="separator hide">*/
/*                         </li>*/
/* */
/* */
/*                         <li class="menu-item">*/
/*                             <a href="">*/
/*                                 О нас*/
/*                             </a>*/
/*                         </li>*/
/*                         {% if app.user %}*/
/*                             {{ render(controller('CoreBundle:Notification:topMenu')) }}*/
/*                             <li class="separator hide">*/
/*                             </li>*/
/*                             <li class="item-header-menu">*/
/*                                 <a href="{{ path('fos_message_inbox') }}" class="item-header-menu__link" >*/
/*                                     <i class="icon-envelope-open"></i>*/
/*                                     {% if fos_message_nb_unread() > 0 %}*/
/*                                         <span class="badge badge-danger">{{ fos_message_nb_unread() }} </span>*/
/*                                     {% endif %}*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="item-header-menu">*/
/*                                 <a class="item-header-menu__link" >*/
/*                                     <i class="icon-wallet"></i>*/
/*                                     <span class="badge badge-success">*/
/*                                         ${{ app.user.balance }}*/
/*                                     </span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="dropdown dropdown-user dropdown-dark">*/
/*                                 <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/
/*                             <span class="username username-hide-on-mobile">{{ app.user.username }}</span>*/
/*                                     <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->*/
/*                                     <img alt="" class="img-circle" src="{{ asset(app.user.avatarImg|imagine_filter('ava_xs')) }}">*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu dropdown-menu-default" style="margin-top: 0px">*/
/*                                     <li>*/
/*                                         <a href="{{ path('user_dashboard') }}">Панель управления</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('user_settings_page') }}">Настройки</a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('ad') }}">Объявление</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('ad_favorite') }}">Избранные</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('ad_new') }}">Добавить объявление</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('user_balance_replenish') }}">Пополнить баланс</a>*/
/*                                     </li>*/
/* */
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('adcategory') }}">Категории</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('adcategory_levelmanager') }}">Уровни*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('adcategory_new') }}">Добавить категории</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('node_manager') }}">Управление контентом</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('users_manager') }}">Пользователи</a>*/
/*                                     </li>*/
/*                                     {% endif %}*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('fos_user_security_logout') }}">Выйти </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% else %}*/
/*                             <li class="menu-item">*/
/*                                 <a href="{{ path('fos_user_registration_register') }}" style="*/
/*                                 background: #3DA83E;color: #fff;*/
/*                                 ">*/
/*                                     Начни продавать*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="menu-item"><a href="{{ path('fos_user_security_login') }}">Войти</a></li>*/
/*                         {% endif %}*/
/*                         <!-- END USER LOGIN DROPDOWN -->*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- END TOP NAVIGATION MENU -->*/
/*             </div>*/
/*             <!-- END PAGE TOP -->*/
/*         </div>*/
/*         <!-- END HEADER INNER -->*/
/* */
/*         <div style="width: 100%; background: #fff;">*/
/*             <div class="container">*/
/*                 {% if page.userMenu is defined %}*/
/*                     {% include('UserBundle:User:userMenu.html.twig') %}*/
/*                 {% else %}*/
/*                 {{ render(controller('AdBundle:AdCategory:menu')) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="clearfix"></div>*/
/* */
/*     {% block page_cover %}{% endblock %}*/
/* */
/*     <div class="container">*/
/*         <div class="page-container">*/
/*             <div class="page-content-wrapper">*/
/*                 <div class="row">*/
/*                     {% block content %}*/
/*                         <div class="row">*/
/*                             <div class="col-lg-12">*/
/*                                 404*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid footer">*/
/*         <div class="row blocks">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4">{{ render(controller('NodeBundle:Node:showBlock', {'id': 4})) }}</div>*/
/*                     <div class="col-lg-4">{{ render(controller('NodeBundle:Node:showBlock', {'id': 5})) }}</div>*/
/*                     <div class="col-lg-4">{{ render(controller('NodeBundle:Node:showBlock', {'id': 6})) }}</div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row menu">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-8 menu-links">*/
/*                         <a href="/">Ссылка</a>*/
/*                         <a href="/">Ссылка</a>*/
/*                         <a href="/">Ссылка</a>*/
/*                         <a href="/">Ссылка</a>*/
/*                         <a href="/">Ссылка</a>*/
/*                         <a href="/">Ссылка</a>*/
/*                         <a href="/">Ссылка</a>*/
/*                         <a href="/">Ссылка</a>*/
/*                         <a href="/">Ссылка</a>*/
/*                     </div>*/
/*                     <div class="col-lg-4">Нижнее меню</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->*/
/*     <div class="modal fade" id="ajax-modal" role="basic" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body">*/
/*                     <img src="{{ asset('bundles/metronic/img/loading-spinner-grey.gif') }}" alt="" class="loading">*/
/* 											<span>*/
/* 											&nbsp;&nbsp;Загрузка... </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.modal -->*/
/* {% block javascripts %}*/
/*         <!-- BEGIN CORE PLUGINS -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="{{ asset('bundles/metronic/plugins/respond.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/metronic/plugins/excanvas.min.js') }}"></script>*/
/*         <![endif]-->*/
/*         <script src="{{ asset('bundles/metronic/plugins/jquery.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/core/js/jquery.form.js') }}" type="text/javascript"></script>*/
/* */
/*         <script src="{{ asset('bundles/metronic/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>*/
/*         <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->*/
/*         <script src="{{ asset('bundles/metronic/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>*/
/*         <!-- END CORE PLUGINS -->*/
/* */
/*         <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* */
/*         {% block level_plugins %}{% endblock %}*/
/*         <!-- END PAGE LEVEL PLUGINS -->*/
/* */
/* */
/*         <!-- BEGIN PAGE LEVEL SCRIPTS -->*/
/*         <script src="{{ asset('bundles/ad/plugins/bootstrap-rating-master/bootstrap-rating.js') }}"></script>*/
/*         <script src="{{ asset('bundles/core/js/notification.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/scripts/metronic.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/metronic/admin/layout4/scripts/layout.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/ad/js/ad.js') }}" type="text/javascript"></script>*/
/*         {% block level_scripts %}{% endblock %}*/
/*         <!-- END PAGE LEVEL SCRIPTS -->*/
/* */
/*         <!-- END PAGE LEVEL SCRIPTS -->*/
/*         <script>*/
/*             jQuery(document).ready(function() {*/
/*                 Metronic.init(); // init metronic core componets*/
/*                 Layout.init(); // init layout*/
/* */
/*                 var links = {*/
/*                     urlAddOrRemoveFavorite: '{{ path('ad_favorite_add') }}'*/
/*                 };*/
/*                 Ad.init(links);*/
/* */
/*                 {% block script_init %}{% endblock %}*/
/*             });*/
/* */
/*             $("#adCategoryTopMenu a").click(function(){*/
/*                 var link =  $(this).attr("href");*/
/*                 location.href=link;*/
/*             })*/
/* */
/*             $('input.rating').rating();*/
/*         </script>*/
/*         {% block script %}{% endblock %}*/
/*         <!-- END JAVASCRIPTS -->*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
