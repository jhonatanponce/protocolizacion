<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//para mover el archivo adjunto a una ubicación permanente
use Symfony\Component\HttpFoundation\File\UploadedFile;

//Para ejecutar comando de la shell
use Symfony\Component\Process\Process;


class CargaArchivoBeneficiarioController extends Controller
{
    public function indexAction(Request $request)
            
    {
        
        $form = $this->createFormBuilder()
                
                ->add('desarrollo', 'entity', array('label' => 'Desarrollo Habitacional:',
                                                    'class'   => 'SrpvProtocolizacionBundle:Desarrollo',
                                                    'property'   => 'nombre',
                                                    'required' => true,'empty_value' => 'Seleccione'))
                
                ->add('unidadHabitacional', 'entity', array('label' => 'Unidad Habitacional:',
                                                    'class'   => 'SrpvProtocolizacionBundle:UnidadHabitacional',
                                                    'property'   => 'nombre',
                                                    'required' => true,'empty_value' => 'Seleccione'))
                
                ->add('archivo', 'file', array('label'  => 'Seleccione el Archivo a Cargar:',
                                            'required' => true))            
                ->add('save', 'submit')
                
                ->getForm();
        
        
        
        $form->handleRequest($request);
 
    if ($form->isValid()) {
        
        //echo 'Desarrollo'.$form['desarrollo.id']->getData();
        
        
            echo '<br>';
        
            print_r($form);
            exit;
            // Si el formulario es valido
    $form['archivo']->getData()->getClientOriginalName();
    
    $nombre_archivo = $form['archivo']->getData()->getClientOriginalName();
    
    $dir = '/var/www/sisprov';
    
    //Verificar la extension
   //echo ' extension: '. $this->getUploadRootDir();

    
    $extension = $form['archivo']->getData()->guessExtension();
    echo '<br>';
    if ($extension != 'txt') {
        // extension cannot be guessed
        //$extension = 'bin';
        echo 'El tipo de archivo '.$extension.' no esta permitido';

    }
    
    //Mover el archivo
    
    $form['archivo']->getData()->move($dir, $nombre_archivo);
    
    
   exit;
        $this->getFile()->move($this->getUploadRootDir(),$this->getFile()->getClientOriginalName() );
        
        


        //ejecutar comandos de la shell
        $process = new Process('pwd');
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }

        echo $process->getOutput();


            return $this->render('SrpvProtocolizacionBundle:CargaArchivoBeneficiario:show.html.twig', array(
                'msg'         => 'Registro Creado',
                'css_msg'     => 'alert-info',                  
                'id' => $entity->getId(),
               // 'entity' => $entity,
                'form'   => $form->createView(),
            )); 
        }
 
        return $this->render('SrpvProtocolizacionBundle:CargaArchivoBeneficiario:new.html.twig', array(
            'form' => $form->createView(),
        ));
        
       
        
        
    }
}