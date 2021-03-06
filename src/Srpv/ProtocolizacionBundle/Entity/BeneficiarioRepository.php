<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ViviendaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BeneficiarioRepository extends EntityRepository
{
    public function getBeneficiarios()
    {

    	return $this->getEntityManager()
       				->createQuery('SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   ORDER BY b.id ASC')

       				->getResult();


    }
	public function getBeneficiariosByProcedenciaEstatus($procedencia_id,$estatus_id)
    {

    	return $this->getEntityManager()
       				->createQuery("SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   WHERE r.id= '$procedencia_id'
                                   AND e.id = '$estatus_id'")

       				->getResult();


    }    
    public function getBeneficiariosByEstadoEstatus($estado_id,$estatus_id)
    {

    	return $this->getEntityManager()
       				->createQuery("SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   WHERE g.id= '$estado_id'
                                   AND e.id = '$estatus_id'")

       				->getResult();


    }
    public function getBeneficiariosByEstatus($estatus_id)
    {

    	return $this->getEntityManager()
       				->createQuery("SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   WHERE e.id = '$estatus_id'")

       				->getResult();


    }
    public function getBeneficiariosByProcedencia($procedencia_id)
    {

    	return $this->getEntityManager()
       				->createQuery("SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   WHERE r.id= '$procedencia_id'")

       				->getResult();


    }  
    public function getBeneficiariosByCedula($nacionalidad,$cedula)
    {

    	return $this->getEntityManager()
       				->createQuery("SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   WHERE p.nacionalidad= '$nacionalidad'
                                   AND p.cedula = '$cedula'")

       				->getResult();


    }
    public function getBeneficiariosByEstado($estado_id)
    {

    	return $this->getEntityManager()
       				->createQuery("SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   WHERE g.id = '$estado_id'")

       				->getResult();


    }
    public function getBeneficiariosByEstadoProcedencia($estado_id,$procedencia_id)
    {

    	return $this->getEntityManager()
       				->createQuery("SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   WHERE g.id = '$estado_id'
                                   AND r.id = '$procedencia_id'")

       				->getResult();


    }
    public function getBeneficiariosByEstadoProcedenciaEstatus($estado_id,$procedencia_id,$estatus_id)
    {

    	return $this->getEntityManager()
       				->createQuery("SELECT b.id, p.nacionalidad, p.cedula, p.primerNombre as nombre, p.primerApellido as apellido, e.nombre as estatus, g.nombre as estado, r.nombre as procedencia
                                   FROM SrpvProtocolizacionBundle:Beneficiario b
                                   JOIN ComunesTablasBundle:Persona p WITH b.persona = p.id
                                   JOIN SrpvProtocolizacionBundle:EstatusBeneficiario e WITH b.estatusBeneficiario = e.id
                                   JOIN ComunesTablasBundle:GeoEstado g WITH b.geoEstado = g.id
                                   LEFT JOIN SrpvProtocolizacionBundle:UnidadFamiliar u WITH b.id=u.beneficiario
                                   LEFT JOIN SrpvProtocolizacionBundle:ProcedenciaBeneficio r WITH u.procedenciaBeneficio = r.id
                                   WHERE g.id = '$estado_id'
                                   AND r.id = '$procedencia_id'
                                   AND e.id = '$estatus_id'")

       				->getResult();


    }                  
}