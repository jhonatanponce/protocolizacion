<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\BeneficiarioTemporal;
use Srpv\ProtocolizacionBundle\Form\BeneficiarioTemporalType;

//para mover el archivo adjunto a una ubicación permanente
use Symfony\Component\HttpFoundation\File\UploadedFile;

//Para ejecutar comando de la shell
use Symfony\Component\Process\Process;

use Doctrine\ORM\EntityRepository;

/**
 * BeneficiarioTemporal controller.
 *
 */
class BeneficiarioTemporalController extends Controller
{

    /**
     * Lists all BeneficiarioTemporal entities.
     *
     */
    public function indexAction()
    {
        //$entities = $em->getRepository('SrpvProtocolizacionBundle:BeneficiarioTemporal')->findAll();        
        
        $em = $this->getDoctrine()->getManager();
        
        $query = $em->createQuery(" SELECT b.idControl, b.nombreArchivo, d.nombre as desarrollo , uh.nombre as unidad, u.nombre as nombre_u, u.apellido as apellido_u 
                                        FROM SrpvProtocolizacionBundle:BeneficiarioTemporal b
                                        JOIN SrpvProtocolizacionBundle:Desarrollo d WITH b.desarrollo = d.id
                                        JOIN SrpvProtocolizacionBundle:UnidadHabitacional uh WITH b.unidadHabitacional = uh.id
                                        JOIN ComunesSecurityBundle:Usuario u WITH b.usuario = u.id
                                   GROUP BY b.idControl, b.nombreArchivo, d.nombre, uh.nombre, u.nombre, u.apellido");
        
        
        $entities = $query->getResult();

        return $this->render('SrpvProtocolizacionBundle:BeneficiarioTemporal:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new BeneficiarioTemporal entity.
     *
     */
    public function createAction(Request $request)
    {
        
        //El formulario
        $entity = new BeneficiarioTemporal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $desarrollo_id = $entity->getDesarrollo()->getId();

            $unidad_id = $request->get('unidadid');


            // Nombre del archivo cargado.            
    
            $nombre_archivo = $form['nombreArchivo']->getData()->getClientOriginalName();
            //Colocamos el archivo en mayuscula.
            
            $nombre_archivo = strtoupper($nombre_archivo);
            
            
            
            $em = $this->getDoctrine()->getManager();
            //Llamamos al procedimiento
            $query = " BEGIN 
                         INSERTA_ARCHIVOS ('BT','BT19112014003.TXT',$desarrollo_id,$unidad_id,1175);
                       END;";

            $connection = $em->getConnection();

            $stmt = $connection->prepare($query);

            $stmt->execute();

            
            //Consultamos para verificar si se genero error
            
            $em = $this->getDoctrine()->getManager();
        
            $query = $em->createQuery(" SELECT b.observaciones
                                            FROM SrpvProtocolizacionBundle:BitacoraArchivo b
                                           WHERE b.codigoEstatus='R'
                                             AND b.nombreArchivo = '$nombre_archivo'

                                       ");

        
            $entities = $query->getResult();
            
            if ($entities) {
                
            //echo 'Existen Errores en el archivo: ';
                return $this->render('SrpvProtocolizacionBundle:BeneficiarioTemporal:new.html.twig', array(
                'errores' => $entities,
                ));

            }

            exit;
            
            //Movemos al archivo a la carpeta de upload
            $dir = '/var/www/sisprov';

            //Verificar la extension    
            $extension = $form['nombreArchivo']->getData()->guessExtension();
          
            
            if ($extension != 'txt') {
               

                $entities['observaciones']= 'El tipo de archivo '.$extension.' no esta permitido, solo puede cargar archivos TXT';
                
                return $this->render('SrpvProtocolizacionBundle:BeneficiarioTemporal:new.html.twig', array(
                'errores' => $entities,
                ));        

            }
    
            //Mover el archivo

            $form['nombreArchivo']->getData()->move($dir, $nombre_archivo);

           
            //$this->getFile()->move($this->getUploadRootDir(),$this->getFile()->getClientOriginalName() );
            exit;

            //ejecutar comandos de la shell donde se realiza el scp al servidopr de BD
            $process = new Process('scp ');
            $process->run();

            // executes after the command finishes
            if (!$process->isSuccessful()) {
                
                throw new \RuntimeException($process->getErrorOutput());
                
            }else{

            }

            echo $process->getOutput();

        //Proceso OK   
        return $this->redirect($this->generateUrl('beneficiariotemporal_show', array('id' => $entity->getId())));
        
            
            
        }

        return $this->render('SrpvProtocolizacionBundle:BeneficiarioTemporal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a BeneficiarioTemporal entity.
     *
     * @param BeneficiarioTemporal $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BeneficiarioTemporal $entity)
    {
        $form = $this->createForm(new BeneficiarioTemporalType(), $entity, array(
            'action' => $this->generateUrl('beneficiariotemporal_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Cargar Archivo'));

        return $form;
    }

    /**
     * Displays a form to create a new BeneficiarioTemporal entity.
     *
     */
    public function newAction()
    {
        $entity = new BeneficiarioTemporal();
        $form   = $this->createCreateForm($entity);

        return $this->render('SrpvProtocolizacionBundle:BeneficiarioTemporal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BeneficiarioTemporal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        //$entity = $em->getRepository('SrpvProtocolizacionBundle:BeneficiarioTemporal')->find($id);

        
        $query = $em->createQuery(" SELECT b.id, b.idControl, b.nombreArchivo, d.nombre as desarrollo , uh.nombre as unidad, 
                                           u.nombre as nombre_u, u.apellido as apellido_u, b.fechaCreacion, p.nacionalidad as nacionalidad,
                                           p.cedula as cedula, p.primerNombre as nombre, p.primerApellido as apellido,p.segundoApellido as apellido2, b.nombreCompleto
                                        FROM SrpvProtocolizacionBundle:BeneficiarioTemporal b
                                        JOIN SrpvProtocolizacionBundle:Desarrollo d WITH b.desarrollo = d.id
                                        JOIN SrpvProtocolizacionBundle:UnidadHabitacional uh WITH b.unidadHabitacional = uh.id
                                        JOIN ComunesSecurityBundle:Usuario u WITH b.usuario = u.id
                                        JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                       WHERE b.idControl= $id
                                       ORDER BY b.id        
                                   ");
        
        
        $entities = $query->getResult();

        
        if (!$entities) {
            throw $this->createNotFoundException('Unable to find BeneficiarioTemporal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvProtocolizacionBundle:BeneficiarioTemporal:show.html.twig', array(
            'entities'      => $entities,
            'label'=> 'Consulta detalle del Archivo',
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing BeneficiarioTemporal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:BeneficiarioTemporal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BeneficiarioTemporal entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvProtocolizacionBundle:BeneficiarioTemporal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a BeneficiarioTemporal entity.
    *
    * @param BeneficiarioTemporal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BeneficiarioTemporal $entity)
    {
        $form = $this->createForm(new BeneficiarioTemporalType(), $entity, array(
            'action' => $this->generateUrl('beneficiariotemporal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BeneficiarioTemporal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:BeneficiarioTemporal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BeneficiarioTemporal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('beneficiariotemporal_edit', array('id' => $id)));
        }

        return $this->render('SrpvProtocolizacionBundle:BeneficiarioTemporal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a BeneficiarioTemporal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SrpvProtocolizacionBundle:BeneficiarioTemporal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BeneficiarioTemporal entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('beneficiariotemporal'));
    }

    /**
     * Creates a form to delete a BeneficiarioTemporal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('beneficiariotemporal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
