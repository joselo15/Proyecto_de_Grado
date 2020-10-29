<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
        $data['msg']=$this->uri->segment(3);
            if ($this->session->userdata('usuario')) {
				redirect('usuarios/panel','refresh');
			} else {
                $this->load->view('inicio_vista',$data);
			}		
    }

	public function validarusuario()
	{
        $usuario=$_POST['usuario'];
		$contrasenia=md5($_POST['contrasenia']);
        $consulta=$this->usuarios_model-> validaradmin($usuario,$contrasenia);
        $consulta1=$this->usuarios_model-> validarinvitado($usuario,$contrasenia);
        if ($consulta->num_rows()==1) {
            foreach ($consulta->result() as $row  ) {                
                $this->session->set_userdata('idUsuario',$row->idUsuario);
                $this->session->set_userdata('usuario',$row->usuario);
                redirect('usuarios/panel','refresh');
             }
         }
        elseif ($consulta1->num_rows()==1) {
            foreach ($consulta1->result() as $row  ) {
                $this->session->set_userdata('idUsuario',$row->idUsuario);
                $this->session->set_userdata('usuario',$row->usuario);
                redirect('usuarios/panelinvitado','refresh');
            }
        }                         
        else {
            redirect('usuarios/index/1','refresh');
        }
	}

	public function panel()
	{
        if ($this->session->userdata('usuario')) {
            $this->load->view('inc/head');
            $this->load->view('inc/pantalla_inicio');
		    $this->load->view('inc/footer');
        } else {
            redirect('usuarios/index/2','refresh');
        }
        
		
    }

    public function panelinvitado()
	{
        if ($this->session->userdata('usuario')) {
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
    public function crear()
    {
        $listarol=$this->usuarios_model->listarrol();
        $data['rol']=$listarol;
        $listaedif=$this->departamento_model->listaredif();
        $data['edificio']=$listaedif;

        $this->load->view('inc/head');
        $this->load->view('usuarios/agregarusuario_view',$data);
        $this->load->view('inc/footer');
    }


    public function crearusuario()
	{
        $ahora=time(); 
        $ahora = date("Y-m-d H:i:s ", $ahora); //hora del sistema
         $this->form_validation->set_rules('nombres', 'Nombres', 'required|regex_match[/^[a-z ]*$/i]');
        $this->form_validation->set_rules('apellidoPaterno', 'Apellido Paterno', 'required|regex_match[/^[a-z ]*$/i]'); 
        $this->form_validation->set_rules('apellidoMaterno', 'Apellido Materno', 'regex_match[/^[a-z ]*$/i]');
        $this->form_validation->set_rules('ci', 'CI', 'trim|required|regex_match[/^[0-9-A-B- ]*$/i]|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email');
        $this->form_validation->set_rules('telefono', 'Celular', 'trim|required|regex_match[/^[0-9 ]*$/i]|max_length[8]');
              
        $data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidoPaterno'];
        $data['apellidoMaterno']=$_POST['apellidoMaterno'];
		$data['ci']=$_POST['ci'];
		$data['email']=$_POST['correo'];
		$data['telefono']=$_POST['telefono'];
		$data['fechaNacimiento']=$_POST['fechaNacimiento'];
		$data['fechaActualizacion']=$ahora;       

        if ($this->form_validation->run()) {
            $this->usuarios_model->crearusuario($data);
            redirect('usuarios/listar','refresh');       
        } 
        else{
        $listarol=$this->usuarios_model->listarrol();
        $data['rol']=$listarol;
        $listaedif=$this->departamento_model->listaredif();
        $data['edificio']=$listaedif;
        $this->load->view('inc/head');
        $this->load->view('usuarios/agregarusuario_view',$data);
        $this->load->view('inc/footer');
        }
		
	}

    public function listar()
    {
        $listausuarios=$this->usuarios_model->listarusuarios();
        $data['usuarios']=$listausuarios;
        $this->load->view('inc/head');
        $this->load->view('usuarios/listausuarios_view',$data);
        $this->load->view('inc/footer');
    }
      
    public function cambiarestado()
     {  
        $ahora=time(); 
        $ahora = date("Y-m-d H:i:s ", $ahora);// hora del sistema      
        $id=$_POST['id'];
        $estado=$_POST['estado'];       
        if ($estado==0) {
            $estado=1;
        } else{
            $estado=0;
        }
        $data['estado']=$estado;
        $data['fechaActualizacion']=$ahora;
        $this->usuarios_model->modificarestado($id,$data);
        redirect('usuarios/listar','refresh');
     }  

     public function modificar()
    {
        $listarol=$this->usuarios_model->listarrol();
        $data['rol']=$listarol;
        $listaedif=$this->departamento_model->listaredif();
        $data['edificio']=$listaedif;

        $id=$_POST['id'];
        $data['infousuario']=$this->usuarios_model->recuperarusuario($id);
        $this->load->view('inc/head');
        $this->load->view('usuarios/modificarusuario_view',$data);
        $this->load->view('inc/footer');
    }

    public function modificarbd()
    {
        $ahora=time(); 
        $ahora = date("Y-m-d H:i:s ", $ahora);// hora del sistema  
        
        $id=$_POST['id'];
        $data['nombres']=$_POST['nombres'];
        $data['apellidoPaterno']=$_POST['apellidoPaterno'];
        $data['apellidoMaterno']=$_POST['apellidoMaterno'];
        $data['ci']=$_POST['ci'];
        $data['email']=$_POST['email'];
        $data['telefono']=$_POST['telefono'];
        $data['fechaNacimiento']=$_POST['fechaNacimiento'];
        $data['fechaActualizacion']=$ahora;
        $this->usuarios_model->modificarusuario($id,$data);
        redirect('usuarios/listar','refresh');
    }

    public function eliminarbd()
    {
        $id=$_POST['id'];
        $this->usuarios_model->eliminarusuario($id);
        redirect('usuarios/listar','refresh');
    } 
}



