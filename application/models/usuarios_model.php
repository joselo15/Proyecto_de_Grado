<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

        public function validaradmin($usuario,$contrasenia)
        { 
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('usuario',$usuario);
        $this->db->where('contrasenia',$contrasenia);
        $this->db->where('estado',1);
        $this->db->where('idRol',1);
        return $this->db->get();
         }

        public function validarinvitado($usuario,$contrasenia)
        { 
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('usuario',$usuario);
        $this->db->where('contrasenia',$contrasenia);
        $this->db->where('estado',1);
        $this->db->where('idRol',2);
        return $this->db->get();
         }
         public function listarrol()
        {
        $this->db->select('*');
        $this->db->from('rol');
        return $this->db->get();
        }

        public function crearusuario($data)
        {
         $ahora=time(); 
         $ahora = date("Y-m-d H:i:s ", $ahora); //hora del sistema
        $this->db->trans_start(); 
        //iniciamos transaccion
        $this->db->insert('persona',$data); // realizamos un insert
        $idpersona=$this->db->insert_id(); //recuperamos el id del insert realizado 
        //$persona=$idpersona; // con ese id en este ejercicio construimos nombre de archivo
        $data5['idPersona']=$idpersona; //almacenamos ese nombre en un array data para una posterior consulta
        $this->form_validation->set_rules('usuario', 'Usuario', 'required|regex_match[/^[a-zA-Z0-9]*$/i]|max_length[10]');
        $this->form_validation->set_rules('contrasenia', 'Contrasenia', 'required|regex_match[/^[a-zA-Z0-9]*$/i]|max_length[12]');  
        $data5['usuario']=$_POST['usuario'];
        $data5['contrasenia']=md5($_POST['contrasenia']);
        $data5['FechaActualizacion']=$ahora;
        $data5['idRol']=$_POST['idRol'];
        $data5['idPersona']=$idpersona;
        $data5['idEdificio']=$_POST['idEdificio'];
        if ($this->form_validation->run()) {
            $this->db->insert('usuario',$data5);     
        } 
        else{
            echo validation_errors();
        }
           //realizamo un update con ese dato insertado    
        // si se desea hacer un segundo insert el mismo puede estar en vez del update
        // despues debemos hacer la transaccion 
        if ($this->db->trans_status() === FALSE)
        {
          $this->db->trans_rollback();
        }
        else
        {
          $this->db->trans_commit();
        }
         return $this->db->trans_status();
        }

        public function listarusuarios()
        {
                $this->db->select('u.idUsuario,u.usuario,u.contrasenia,u.estado,u.fechaRegistro,u.fechaActualizacion,r.descripcion,p.nombres,p.apellidoPaterno,p.apellidoMaterno,p.ci,p.email,p.telefono,p.fechaNacimiento');
                $this->db->from('usuario as u');
                $this->db->join('rol as r','u.idRol = r.idRol', 'inner');
                $this->db->join('persona as p','u.idPersona = p.idPersona','inner');
                //$this->db->where('Estado',1);
                return $this->db->get();
        }

        public function modificarestado($id,$data)
        {
                $this->db->where('idUsuario',$id);
                $this->db->update('usuario',$data);                
        }

        public function recuperarusuario($id)
        {
           $this->db->select('u.idUsuario,u.usuario,u.contrasenia,u.estado,u.fechaRegistro,u.fechaActualizacion,r.descripcion,p.nombres,p.apellidoPaterno,p.apellidoMaterno,p.ci,p.email,p.telefono,p.fechaNacimiento,p.idPersona,r.descripcion,r.idRol,e.razonSocial,e.idEdificio');
           $this->db->from('usuario as u');
           $this->db->join('rol as r','u.idRol = r.idRol', 'inner');
           $this->db->join('persona as p','u.idPersona = p.idPersona','inner');
           $this->db->join('edificio as e','u.idEdificio = e.idEdificio','inner');
           $this->db->where('u.idUsuario',$id);
           return $this->db->get();
        }

        public function modificarusuario($id,$data)
        {
          $ahora=time(); 
          $ahora = date("Y-m-d H:i:s ", $ahora); //hora del sistema
          $this->db->trans_start(); //iniciamos transaccion
          $this->db->where('idPersona',$id);
          $this->db->update('persona',$data); // realizamos un insert

          $data5['usuario']=$_POST['usuario'];
          //$data5['contrasenia']=md5($_POST['contrasenia']);
          $data5['FechaActualizacion']=$ahora;  
          $data5['idRol']=$_POST['idRol'];
          $data5['idEdificio']=$_POST['idEdificio'];
          $this->db->where('idPersona',$id);
          $this->db->update('usuario',$data5);   //realizamo un update con ese dato insertado    
          // si se desea hacer un segundo insert el mismo puede estar en vez del update
          // despues debemos hacer la transaccion 
        if ($this->db->trans_status() === FALSE)
        {
                $this->db->trans_rollback();
        }
        else
        {
                $this->db->trans_commit();
        }
        return $this->db->trans_status();
        }

        public function eliminarusuario($id)
        {
                $this->db->where('idUsuario',$id);
                $this->db->delete('usuarios');
                $this->db->where('idUsuario',$id);
                $this->db->delete('depausuario');
        }
           
	
}

