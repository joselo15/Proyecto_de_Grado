<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//cargando la vista welcome_message
		$this->load->view('welcome_message');
	}

	public function holamundo()
	{
		$this->load->view('hola');
	}

	public function despedida()
	{
		$this->load->view('chau');
	}
}
