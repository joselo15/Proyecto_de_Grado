<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function validar($usuario,$contrasenia)
	{ 
        $this->db->select('*');
        $this->db->from('administrador');
        $this->db->where('Usuario',$usuario);
        $this->db->where('Contrasenia',$contrasenia);
        return $this->db->get();
         }
         public function validar1($usuario,$contrasenia)
	{ 
        $this->db->select('*');
        $this->db->from('propietarios');
        $this->db->where('Usuario',$usuario);
        $this->db->where('Contrasenia',$contrasenia);
        return $this->db->get();
         }
  
        public function crearusuario($data)
	{
		$this->db->insert('administrador',$data);
	}

   
	
}
