<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expendio_model extends CI_Model {

	// public function logearce($usuario,$contrasenia)
	// { 
 //        $this->db->where('Usuario',$usuario);
 //        $this->db->where('Contrasenia',$contrasenia);
 //        $sql=$this->db->get('administrador');
 //        $this->db->where('Usuario',$usuario);
 //        $this->db->where('Contrasenia',$contrasenia);
 //        $sql1=$this->db->get('propietarios');
 //        if ($sql->num_rows()>0 || $sql1->num_rows()>0) {
 //        	return true;
 //        } else {
 //        	return false;
 //        }        
	// }
	public function listarexpendios()
	{
		$this->db->select('e.idExpendio,d.numero,u.nombres,e.importe,e.tipoPago,e.mes,e.anio,pe.fechaPago');
		$this->db->from('expendio as e');
		$this->db->join('pagoexpendio as pe','e.idExpendio = pe.idExpendio', 'inner');
		$this->db->join('departamento as d','pe.idDepartamento =d.idDepartamento','inner');
		$this->db->join('usuario as u','d.idUsuario =u.idUsuario','inner');
		//$this->db->where('d.Estado',1);
		return $this->db->get();
	}

	public function listardepartamentos()
	{
		$this->db->select('*');
		$this->db->from('departamento');
		return $this->db->get();
	}
		public function listarcopropietarios()
	{
		$this->db->select('*');
		$this->db->from('usuario');
		return $this->db->get();
		
	}
	
	public function agregardepartamento($data)
	{
		$this->db->insert('departamento',$data);
	}

	public function recuperardepartamento($id)
	{
		$this->db->select('d.idDepartamento,d.piso,d.numero,d.descripcion,d.fechaRegistro,
			               d.fechaActualizacion,d.idUsuario,d.idTipo,d.idEdificio,t.nombre,e.razonSocial,u.nombres,u.apellidoPaterno,u.apellidoMaterno');
		$this->db->from('departamento as d');
		$this->db->join('tipoDepartamento as t','d.idTipo = t.idTipo', 'inner');
		$this->db->join('edificio as e','d.idEdificio =e.idEdificio','inner');
		$this->db->join('usuario as u','d.idUsuario =u.idUsuario','inner');
		$this->db->where('d.idDepartamento',$id);
		return $this->db->get();
	}

	public function modificardepartamento($id,$data)
	{
		$this->db->where('idDepartamento',$id);
		$this->db->update('departamento',$data);
	}

	
	public function eliminardepartamento($id)
	{
		$this->db->where('idDepartamento',$id);
		$this->db->delete('departamento');
	}

	public function modificarestado($id,$data)
	{
		$this->db->where('idDepartamento',$id);
        $this->db->update('departamento',$data);		
	}
	
}
