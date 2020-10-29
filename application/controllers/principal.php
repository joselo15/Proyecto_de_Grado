<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		//$this->load->view('inicio_vista');
		//$this->usuarios->index();

	}

	public function registrar()
	{
		//recepcion de variables
		$nombre=$_POST['nombre'];
		$password=$_POST['password'];
		$repassword=$_POST['repassword'];

		if($password==$repassword)
		{
			$mensaje="usuario registrado";
		}
		else
		{
			$mensaje="error en passwords";
		}
		$data['mensaje']=$mensaje;
		$data['nombre']=$nombre;
		//cargo la vista destino enviando variables
		$this->load->view('inc/head');
		$this->load->view('resultado',$data);
		$this->load->view('inc/footer');
	}

	/*public function verificar()
	{
		//recepcion de variables
		$nombre=$_POST['Usuario'];
		$password=$_POST['Contrasenia'];
		//$repassword=$_POST['contrasenia'];

		//if($password==$repassword)
		{
			$mensaje="usuario registrado";
		}
		//else
		{
			$mensaje="error en passwords";
		}

		$data['mensaje']=$mensaje;
		$data['nombre']=$nombre;
		$data['contrasenia']=$password;
	//cargo la vista destino enviando variables
	//	$this->load->view('inc/head');
	//	$this->load->view('inicio_vista',$data);
	//	$this->load->view('inc/footer');
	}*/
}
