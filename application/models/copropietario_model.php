<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Copropietario_model extends CI_Model {

	public function listarcopropietarios()
	        {
	                $this->db->select('p.idPersona,p.nombres,p.apellidos,u.idUsuario,u.usuario,c.idDepaUsuario,c.observacion,
	                	               c.estado,c.fechaRegistro,c.fechaActualizacion,d.idDepartamento, d.numero');
	                $this->db->from('depausuario as c');
	                $this->db->join('usuarios as u','c.idUsuario = u.idUsuario', 'inner');
	                $this->db->join('personas as p','u.idPersona = p.idPersona', 'inner');
	                $this->db->join('departamento as d','c.idDepartamento = d.idDepartamento', 'inner');
	                //$this->db->where('Estado',1);
	                return $this->db->get();
	        }












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

	// public function listarcopropietarios()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('propietarios');
	// 	//$this->db->where('Estado',1);
	// 	return $this->db->get();
	// }

	// public function recuperarcopropietario($id)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('propietarios');
	// 	$this->db->where('idPropietario',$id);
	// 	return $this->db->get();
	// }

	// public function modificarcopropietario($id,$data)
	// {
	// 	$this->db->where('idPropietario',$id);
	// 	$this->db->update('propietarios',$data);
	// }

	// public function agregarcopropietario($data)
	// {
	// 	$this->db->insert('propietarios',$data);
	// }

	// public function eliminarcopropietario($id)
	// {
	// 	$this->db->where('idPropietario',$id);
	// 	$this->db->delete('propietarios');
	// }

	// public function modificarestado($id,$data)
	// {
	// 	$this->db->where('idPropietario',$id);
 //        $this->db->update('propietarios',$data);		
	// }
	
}
