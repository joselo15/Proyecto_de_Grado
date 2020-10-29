<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
        $data['msg']=$this->uri->segment(3);
            if ($this->session->userdata('Usuario')) {
				redirect('usuarios/panel','refresh');
			} else {
                $this->load->view('inicio_vista',$data);
			}		
    }
    public function index3()
	{
        
                $this->load->view('crear_usuario');
				
	}

	public function validarusuario()
	{
        $usuario=$_POST['Usuario'];
		$contrasenia=md5($_POST['Contrasenia']);
        $consulta=$this->usuarios_model-> validar($usuario,$contrasenia);
        $consulta1=$this->usuarios_model-> validar1($usuario,$contrasenia);

        if ($consulta->num_rows()>0) {
            foreach ($consulta->result() as $row  ) {
                $this->session->set_userdata('idAdminstrador',$row->idAdministrador);
                $this->session->set_userdata('Usuario',$row->Usuario);
                redirect('usuarios/panel','refresh');
            }
        }elseif ($consulta1->num_rows()>0) {
            foreach ($consulta1->result() as $row  ) {
                $this->session->set_userdata('idPropietario',$row->idPropietario);
                $this->session->set_userdata('Usuario',$row->Usuario);
                redirect('usuarios/panelinvitado','refresh');
            }
        }  else {
            redirect('usuarios/index/1','refresh');
        }
	}
	public function panel()
	{
        if ($this->session->userdata('Usuario')) {
            $this->load->view('inc/head');
            $this->load->view('inc/pantalla_inicio');
		    $this->load->view('inc/footer');
        } else {
            redirect('usuarios/index/2','refresh');
        }
        
		
    }
    public function panelinvitado()
	{
        if ($this->session->userdata('Usuario')) {
            $this->load->view('vistainvitado/incinvitado/head');
            $this->load->view('vistainvitado/incinvitado/pantalla_inicio');
		    $this->load->view('vistainvitado/incinvitado/footer');
        } else {
            redirect('usuarios/index/2','refresh');
        }
        
		
    }
    public function logout()
	{
       $this->session->sess_destroy();
       redirect('usuarios/index/3','refresh');
    }


    public function crearusuario()
	{
        $data['Nombres']=$_POST['nombre'];
		$data['Apellidos']=$_POST['apellidos'];
		$data['Ci']=$_POST['ci'];
		$data['Email']=$_POST['correo'];
		$data['telefono']=$_POST['telefono'];
		$data['Usuario']=$_POST['usuario'];
		$data['Contrasenia']=md5($_POST['contrasenia']);
		$this->usuarios_model->crearusuario($data);
		redirect('usuarios/index','refresh');
	}
        
}



