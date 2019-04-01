<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/node')) {
            // node
            if (rtrim($pathinfo, '/') === '/node') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'node');
                }

                return array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::indexAction',  '_route' => 'node',);
            }

            // node_manager
            if ($pathinfo === '/node/manager') {
                return array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::managerAction',  '_route' => 'node_manager',);
            }

            // node_show
            if (0 === strpos($pathinfo, '/node/show') && preg_match('#^/node/show/(?P<category>[^/]++)/(?P<slug>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_show')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::showAction',));
            }

            // node_new
            if ($pathinfo === '/node/new') {
                return array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::newAction',  '_route' => 'node_new',);
            }

            // node_create
            if ($pathinfo === '/node/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_node_create;
                }

                return array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::createAction',  '_route' => 'node_create',);
            }
            not_node_create:

            // node_edit
            if (preg_match('#^/node/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_edit')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::editAction',));
            }

            // node_update
            if (preg_match('#^/node/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_node_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_update')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::updateAction',));
            }
            not_node_update:

            // node_delete
            if (preg_match('#^/node/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_node_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_delete')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::deleteAction',));
            }
            not_node_delete:

            // node_delete_photo
            if (0 === strpos($pathinfo, '/node/delete_photo') && preg_match('#^/node/delete_photo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_node_delete_photo;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_delete_photo')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\GalleryController::deletePhotoAction',));
            }
            not_node_delete_photo:

            // node_attach_load
            if ($pathinfo === '/node/load') {
                return array (  '_controller' => 'Core\\NodeBundle\\Controller\\GalleryController::loadAction',  '_route' => 'node_attach_load',);
            }

        }

        // node_show_page
        if (preg_match('#^/(?P<slug>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_show_page')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::showAction',  'category' => 1,));
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // node_show_blog_page
            if (preg_match('#^/blog/(?P<slug>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_show_blog_page')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeController::showAction',  'category' => 2,));
            }

            // node_cat_show_blog
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeCategoryController::showAction',  'slug' => 'blog',  '_route' => 'node_cat_show_blog',);
            }

        }

        if (0 === strpos($pathinfo, '/no')) {
            if (0 === strpos($pathinfo, '/node_cat')) {
                // node_cat_manager
                if ($pathinfo === '/node_cat/manager') {
                    return array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeCategoryController::managerAction',  '_route' => 'node_cat_manager',);
                }

                // node_cat_new
                if ($pathinfo === '/node_cat/new') {
                    return array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeCategoryController::newAction',  '_route' => 'node_cat_new',);
                }

                // node_cat_create
                if ($pathinfo === '/node_cat/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_node_cat_create;
                    }

                    return array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeCategoryController::createAction',  '_route' => 'node_cat_create',);
                }
                not_node_cat_create:

                // node_cat_edit
                if (preg_match('#^/node_cat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_cat_edit')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeCategoryController::editAction',));
                }

                // node_cat_update
                if (preg_match('#^/node_cat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_node_cat_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_cat_update')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeCategoryController::updateAction',));
                }
                not_node_cat_update:

                // node_cat_delete
                if (preg_match('#^/node_cat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_node_cat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_cat_delete')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeCategoryController::deleteAction',));
                }
                not_node_cat_delete:

                // node_cat_show
                if (preg_match('#^/node_cat/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'node_cat_show')), array (  '_controller' => 'Core\\NodeBundle\\Controller\\NodeCategoryController::showAction',));
                }

            }

            // core_notification_show
            if (0 === strpos($pathinfo, '/notification/show') && preg_match('#^/notification/show(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'core_notification_show')), array (  '_controller' => 'Core\\CoreBundle\\Controller\\NotificationController::showAction',));
            }

        }

        // site_setting
        if ($pathinfo === '/setting') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_site_setting;
            }

            return array (  '_controller' => 'Core\\CoreBundle\\Controller\\SettingController::indexAction',  '_route' => 'site_setting',);
        }
        not_site_setting:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Core\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Core\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Core\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Core\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/category')) {
            // adcategory
            if (rtrim($pathinfo, '/') === '/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adcategory');
                }

                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdCategoryController::indexAction',  '_route' => 'adcategory',);
            }

            // adcategory_new
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdCategoryController::newAction',  '_route' => 'adcategory_new',);
            }

            // adcategory_create
            if ($pathinfo === '/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adcategory_create;
                }

                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdCategoryController::createAction',  '_route' => 'adcategory_create',);
            }
            not_adcategory_create:

            // adcategory_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adcategory_edit')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdCategoryController::editAction',));
            }

            // adcategory_update
            if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adcategory_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adcategory_update')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdCategoryController::updateAction',));
            }
            not_adcategory_update:

            // adcategory_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adcategory_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adcategory_delete')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdCategoryController::deleteAction',));
            }
            not_adcategory_delete:

            // adcategory_levelmanager
            if ($pathinfo === '/category/level_manager') {
                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdCategoryController::levelManagerAction',  '_route' => 'adcategory_levelmanager',);
            }

            // adcategory_show
            if (preg_match('#^/category/(?P<slug>[^/]++)(?:/(?P<child_slug>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adcategory_show')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdCategoryController::showAction',  'child_slug' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/ad')) {
            // ad
            if (rtrim($pathinfo, '/') === '/ad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ad');
                }

                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::indexAction',  '_route' => 'ad',);
            }

            // ad_manager
            if ($pathinfo === '/ad/manager') {
                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::managerAction',  '_route' => 'ad_manager',);
            }

            // ad_favorite
            if ($pathinfo === '/ad/favorite') {
                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::favoriteAction',  '_route' => 'ad_favorite',);
            }

            // ad_show
            if (preg_match('#^/ad/(?P<slug>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_show')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::showAction',));
            }

            // ad_new
            if ($pathinfo === '/ad/new') {
                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::newAction',  '_route' => 'ad_new',);
            }

            // ad_create
            if ($pathinfo === '/ad/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ad_create;
                }

                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::createAction',  '_route' => 'ad_create',);
            }
            not_ad_create:

            // ad_create_load_category
            if ($pathinfo === '/ad/load_category') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ad_create_load_category;
                }

                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::CategoryLoadAction',  '_route' => 'ad_create_load_category',);
            }
            not_ad_create_load_category:

            // ad_edit
            if (preg_match('#^/ad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_ad_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_edit')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::editAction',));
            }
            not_ad_edit:

            // ad_delete
            if (preg_match('#^/ad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_delete')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::deleteAction',));
            }
            not_ad_delete:

            // ad_search
            if ($pathinfo === '/ad/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ad_search;
                }

                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::searchAction',  '_route' => 'ad_search',);
            }
            not_ad_search:

            // ad_delete_photo
            if (0 === strpos($pathinfo, '/ad/delete_photo') && preg_match('#^/ad/delete_photo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ad_delete_photo;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_delete_photo')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::deletePhotoAction',));
            }
            not_ad_delete_photo:

            // adtask_list
            if (rtrim($pathinfo, '/') === '/ad/task') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adtask_list');
                }

                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdTaskController::indexAction',  '_route' => 'adtask_list',);
            }

            if (0 === strpos($pathinfo, '/ad_order')) {
                if (0 === strpos($pathinfo, '/ad_order/sale')) {
                    // ad_order_sale
                    if ($pathinfo === '/ad_order/sale') {
                        return array (  '_controller' => 'Core\\AdBundle\\Controller\\SaleController::indexAction',  '_route' => 'ad_order_sale',);
                    }

                    if (0 === strpos($pathinfo, '/ad_order/sale/s')) {
                        // ad_order_sale_stat
                        if ($pathinfo === '/ad_order/sale/stat') {
                            return array (  '_controller' => 'Core\\AdBundle\\Controller\\SaleController::statAction',  '_route' => 'ad_order_sale_stat',);
                        }

                        // ad_order_sale_services
                        if ($pathinfo === '/ad_order/sale/services') {
                            return array (  '_controller' => 'Core\\AdBundle\\Controller\\SaleController::servicesAction',  '_route' => 'ad_order_sale_services',);
                        }

                    }

                    // ad_order_sale_finances
                    if ($pathinfo === '/ad_order/sale/finances') {
                        return array (  '_controller' => 'Core\\AdBundle\\Controller\\SaleController::financesAction',  '_route' => 'ad_order_sale_finances',);
                    }

                }

                // ad_order_create
                if ($pathinfo === '/ad_order/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ad_order_create;
                    }

                    return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdOrderController::createAction',  '_route' => 'ad_order_create',);
                }
                not_ad_order_create:

                // ad_order_pay
                if (0 === strpos($pathinfo, '/ad_order/pay') && preg_match('#^/ad_order/pay/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_order_pay')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdOrderController::payAction',));
                }

                // ad_order_finish
                if (0 === strpos($pathinfo, '/ad_order/finish/revise') && preg_match('#^/ad_order/finish/revise/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_order_finish')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdOrderController::finishAction',));
                }

                // ad_order_remove
                if (0 === strpos($pathinfo, '/ad_order/remove') && preg_match('#^/ad_order/remove/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_order_remove')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdOrderController::removeAction',));
                }

                // ad_order_adopt
                if (0 === strpos($pathinfo, '/ad_order/adopt') && preg_match('#^/ad_order/adopt/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_order_adopt')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdOrderController::adoptAction',));
                }

                // ad_order_show
                if (preg_match('#^/ad_order/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_order_show')), array (  '_controller' => 'Core\\AdBundle\\Controller\\AdOrderController::showAction',));
                }

                // ad_order
                if (rtrim($pathinfo, '/') === '/ad_order') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ad_order');
                    }

                    return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdOrderController::indexAction',  '_route' => 'ad_order',);
                }

            }

            // ad_favorite_add
            if ($pathinfo === '/ad/favorite/addOrRemove.json') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ad_favorite_add;
                }

                return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdFavoriteController::addOrRemoveAction',  '_route' => 'ad_favorite_add',);
            }
            not_ad_favorite_add:

        }

        // core_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'core_index');
            }

            return array (  '_controller' => 'Core\\AdBundle\\Controller\\AdController::indexAction',  '_route' => 'core_index',);
        }

        if (0 === strpos($pathinfo, '/message')) {
            // msg_create_dialog
            if (0 === strpos($pathinfo, '/message/create_dialog') && preg_match('#^/message/create_dialog/(?P<recipient>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'msg_create_dialog')), array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::createDialogAction',));
            }

            // msg_get_messages
            if (0 === strpos($pathinfo, '/message/get_messages') && preg_match('#^/message/get_messages/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'msg_get_messages')), array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::getMessagesAction',));
            }

        }

        // user_balance_replenish
        if ($pathinfo === '/user/balance/replenish') {
            return array (  '_controller' => 'Core\\UserBundle\\Controller\\BalanceController::replenishAction',  '_route' => 'user_balance_replenish',);
        }

        // user_page
        if (0 === strpos($pathinfo, '/id') && preg_match('#^/id(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_page')), array (  '_controller' => 'Core\\UserBundle\\Controller\\UserController::indexAction',));
        }

        // user_settings_page
        if ($pathinfo === '/settings') {
            return array (  '_controller' => 'Core\\UserBundle\\Controller\\UserController::settingsAction',  '_route' => 'user_settings_page',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_dashboard
            if ($pathinfo === '/user/dashboard') {
                return array (  '_controller' => 'Core\\UserBundle\\Controller\\UserController::dashBoardAction',  '_route' => 'user_dashboard',);
            }

            // users_manager
            if ($pathinfo === '/user/manager') {
                return array (  '_controller' => 'Core\\UserBundle\\Controller\\UserController::managerAction',  '_route' => 'users_manager',);
            }

            // user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Core\\UserBundle\\Controller\\UserController::editAction',));
            }

            // user_stat
            if ($pathinfo === '/user/stat') {
                return array (  '_controller' => 'Core\\UserBundle\\Controller\\UserController::statAction',  '_route' => 'user_stat',);
            }

            // user_settings_edit
            if (0 === strpos($pathinfo, '/user/editAdminSettings') && preg_match('#^/user/editAdminSettings/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_settings_edit')), array (  '_controller' => 'Core\\UserBundle\\Controller\\UserController::editSettingsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/me')) {
            if (0 === strpos($pathinfo, '/media/cache/resolve')) {
                // liip_imagine_filter_runtime
                if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_liip_imagine_filter_runtime;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
                }
                not_liip_imagine_filter_runtime:

                // liip_imagine_filter
                if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_liip_imagine_filter;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
                }
                not_liip_imagine_filter:

            }

            if (0 === strpos($pathinfo, '/message')) {
                // fos_message_inbox
                if (rtrim($pathinfo, '/') === '/message') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_message_inbox');
                    }

                    return array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
                }

                // fos_message_sent
                if ($pathinfo === '/message/sent') {
                    return array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
                }

                // fos_message_deleted
                if ($pathinfo === '/message/deleted') {
                    return array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
                }

                // fos_message_search
                if ($pathinfo === '/message/search') {
                    return array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
                }

                // fos_message_thread_new
                if ($pathinfo === '/message/new') {
                    return array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
                }

                // fos_message_thread_delete
                if (preg_match('#^/message/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_fos_message_thread_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::deleteAction',));
                }
                not_fos_message_thread_delete:

                // fos_message_thread_undelete
                if (preg_match('#^/message/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_message_thread_undelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::undeleteAction',));
                }
                not_fos_message_thread_undelete:

                // fos_message_thread_view
                if (preg_match('#^/message/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'Core\\MessageBundle\\Controller\\MessageController::threadAction',));
                }

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
