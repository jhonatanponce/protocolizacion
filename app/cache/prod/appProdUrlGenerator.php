<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'comunes_security_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Comunes\\SecurityBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_logout' => array (  0 =>   array (    0 => 'homepage',  ),  1 =>   array (    '_controller' => 'Comunes\\SecurityBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'homepage',    ),    2 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sicc_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Comunes\\SecurityBundle\\Controller\\SecurityController::indexAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Comunes\\SecurityBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_logout' => array (  0 =>   array (    0 => 'homepage',  ),  1 =>   array (    '_controller' => 'Comunes\\SecurityBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'homepage',    ),    2 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'libreria_reporteador_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Libreria\\ReporteadorBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srpv_admin_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Srpv\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasafongar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tasafongar/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasafongar_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tasafongar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasafongar_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tasafongar/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasafongar_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tasafongar/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasafongar_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tasafongar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasafongar_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tasafongar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasafongar_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Srpv\\AdminBundle\\Controller\\TasaFongarController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tasafongar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srpv_protocolizacion_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Srpv\\ProtocolizacionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comunes_organismos_publicos_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Comunes\\OrganismosPublicosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comunes_tablas_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Comunes\\TablasBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',    'template' => '::inicio.html.twig',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
