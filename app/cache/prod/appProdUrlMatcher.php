<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // comunes_security_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comunes_security_homepage')), array (  '_controller' => 'Comunes\\SecurityBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // _logout
            if (0 === strpos($pathinfo, '/admin/logout') && preg_match('#^/admin/logout/(?P<homepage>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_logout');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_logout')), array (  '_controller' => 'Comunes\\SecurityBundle\\Controller\\SecurityController::logoutAction',));
            }

            // sicc_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sicc_admin_homepage');
                }

                return array (  '_controller' => 'Comunes\\SecurityBundle\\Controller\\SecurityController::indexAdminAction',  '_route' => 'sicc_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // admin_login
                    if (rtrim($pathinfo, '/') === '/admin/login') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_login');
                        }

                        return array (  '_controller' => 'Comunes\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin_login',);
                    }

                    // admin_login_check
                    if ($pathinfo === '/admin/login_check') {
                        return array('_route' => 'admin_login_check');
                    }

                }

                // admin_logout
                if (0 === strpos($pathinfo, '/admin/logout') && preg_match('#^/admin/logout/(?P<homepage>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_logout');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logout')), array (  '_controller' => 'Comunes\\SecurityBundle\\Controller\\SecurityController::logoutAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // libreria_reporteador_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'libreria_reporteador_homepage')), array (  '_controller' => 'Libreria\\ReporteadorBundle\\Controller\\DefaultController::indexAction',));
            }

            // srpv_admin_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srpv_admin_homepage')), array (  '_controller' => 'Srpv\\AdminBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tasafongar')) {
            // tasafongar
            if (rtrim($pathinfo, '/') === '/tasafongar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tasafongar');
                }

                return array (  '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::indexAction',  '_route' => 'tasafongar',);
            }

            // tasafongar_show
            if (preg_match('#^/tasafongar/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasafongar_show')), array (  '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::showAction',));
            }

            // tasafongar_new
            if ($pathinfo === '/tasafongar/new') {
                return array (  '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::newAction',  '_route' => 'tasafongar_new',);
            }

            // tasafongar_create
            if ($pathinfo === '/tasafongar/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tasafongar_create;
                }

                return array (  '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::createAction',  '_route' => 'tasafongar_create',);
            }
            not_tasafongar_create:

            // tasafongar_edit
            if (preg_match('#^/tasafongar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasafongar_edit')), array (  '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::editAction',));
            }

            // tasafongar_update
            if (preg_match('#^/tasafongar/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tasafongar_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasafongar_update')), array (  '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::updateAction',));
            }
            not_tasafongar_update:

            // tasafongar_delete
            if (preg_match('#^/tasafongar/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tasafongar_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasafongar_delete')), array (  '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::deleteAction',));
            }
            not_tasafongar_delete:

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // srpv_protocolizacion_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srpv_protocolizacion_homepage')), array (  '_controller' => 'Srpv\\ProtocolizacionBundle\\Controller\\DefaultController::indexAction',));
            }

            // comunes_organismos_publicos_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comunes_organismos_publicos_homepage')), array (  '_controller' => 'Comunes\\OrganismosPublicosBundle\\Controller\\DefaultController::indexAction',));
            }

            // comunes_tablas_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comunes_tablas_homepage')), array (  '_controller' => 'Comunes\\TablasBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => '::inicio.html.twig',  '_route' => '_welcome',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
