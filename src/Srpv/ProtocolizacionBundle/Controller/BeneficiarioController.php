<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\Beneficiario;
use Srpv\ProtocolizacionBundle\Form\BeneficiarioType;

/**
 * Desarrollo controller.
 *
 */
class BeneficiarioController extends Controller
{

    /**
     * Lists all Desarrollo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->findAll();

        return $this->render('SrpvProtocolizacionBundle:Beneficiario:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Beneficiarios',
        ));


    }
    
}
