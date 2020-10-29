<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Copropietarios extends CI_Controller {

	 public function listar()
	    {
	        $listacopropietarios=$this->copropietario_model->listarcopropietarios();
	        $data['copropietario']=$listacopropietarios;
	        $this->load->view('inc/head');
	        $this->load->view('copropietarios/listacopropietarios_view',$data);
	        $this->load->view('inc/footer');
	    }












	public function logeo()
	{
			if ($this->copropietario_model->logearce($_POST['Usuario'],md5($_POST['Contrasenia']))) {
				redirect('copropietarios/index1','refresh');
			} else {
				redirect('principal/index','refresh');
			}		
	}

	public function index()
	{
		$listacopropietarios=$this->copropietario_model->listarcopropietarios();
		$data['copropietarios']=$listacopropietarios;
		$this->load->view('inc/head');
		$this->load->view('lista_copropietario',$data);
		$this->load->view('inc/footer');
	}
	public function index1()
	{
		$this->load->view('inc/head');
		$this->load->view('inc/pantalla_inicio');
		$this->load->view('inc/footer');
	}
	public function vistainvitado()
	{
		$this->load->view('vistainvitado/incinvitado/head');
		$this->load->view('vistainvitado/incinvitado/pantalla_inicio');
		$this->load->view('vistainvitado/incinvitado/footer');
	}
	public function vercopropietario()
	{
		$this->load->view('inc/head');
		$this->load->view('copropietario');
		$this->load->view('inc/footer');
	}

	public function prueba()
	{
		$query=$this->db->get('copropietarios');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}

	public function modificar()
	{
		$id=$_POST['id'];
		$data['infocopropietario']=$this->copropietario_model->recuperarcopropietario($id);
		$this->load->view('inc/head');
		$this->load->view('modificarcopropietario_view',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd()
	{
		$id=$_POST['id'];
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$ci=$_POST['ci'];
		$correo=$_POST['correo'];
		$telefono=$_POST['telefono'];
		$usuario=$_POST['usuario'];
		$contrasenia=md5($_POST['contrasenia']);
		$data['Nombres']=$nombre;
		$data['Apellidos']=$apellidos;
		$data['Ci']=$ci;
		$data['Email']=$correo;
		$data['Telefono']=$telefono;
		$data['Usuario']=$usuario;
		$data['Contrasenia']=$contrasenia;
		$this->copropietario_model->modificarcopropietario($id,$data);
		redirect('copropietarios/index','refresh');
	}

	public function agregar()
	{
		$this->load->view('inc/head');
		$this->load->view('agregarcopropietario_view');
		$this->load->view('inc/footer');
	}

	public function agregarbd()
	{
		$data['Nombres']=$_POST['nombre'];
		$data['Apellidos']=$_POST['apellidos'];
		$data['Ci']=$_POST['ci'];
		$data['Email']=$_POST['correo'];
		$data['telefono']=$_POST['telefono'];
		$data['Usuario']=$_POST['usuario'];
		$data['Contrasenia']=md5($_POST['contrasenia']);
		$this->copropietario_model->agregarcopropietario($data);
		redirect('copropietarios/index','refresh');
	}

	public function eliminarbd()
	{
		$id=$_POST['id'];
		$this->copropietario_model->eliminarcopropietario($id);
		redirect('copropietarios/index','refresh');
	}

	public function cambiarestadobd()
	{
		$id=$_POST['id'];
		$estado=$_POST['estado'];		
		if ($estado==0) {
			$estado=1;
		} else{
			$estado=0;
		}
		$data['Estado']=$estado;
		$this->copropietario_model->modificarestado($id,$data);
	    redirect('copropietarios/index','refresh');
	}


	public function listacopropietariospdf()
	{
		$this->load->library('pdf');
		$copropietarios=$this->copropietario_model->listarcopropietarios();
		$copropietarios=$copropietarios->result();

		$this->pdf=new Pdf();
		$this->pdf->AddPage();
		$this->pdf->AliasNbPages();
		$this->pdf->SetTitle("Lista de Copropietarios");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(210,210,210);
		$this->pdf->SetFont('Arial','B',11);
		$this->pdf->Cell(30);
		$this->pdf->Cell(120,10,'Lista de Copropietarios',0,0,'C');
		$this->pdf->Ln(10);

		$this->pdf->Cell(10,5,("No."),'TBLR',0,'L',1);
		$this->pdf->Cell(50,5,utf8_decode("Nombres"),'TBLR',0,'L',1);
		$this->pdf->Cell(60,5,utf8_decode("Apellidos"),'TBLR',0,'L',1);
		$this->pdf->Cell(30,5,"CI",'TBLR',0,'L',1);
		$this->pdf->Cell(30,5,"Telefono",'TBLR',0,'L',1);
		$this->pdf->Ln(5);
        $num=1;

		foreach ($copropietarios as $row) {
			$nombres=$row->Nombres;
			$apellidos=$row->Apellidos;
			$ci=$row->Ci;
			$telefono=$row->Telefono;
			$this->pdf->SetFont('Arial','',11);
			$this->pdf->Cell(10,5,$num,'TBLR',0,'L',0);
			$this->pdf->Cell(50,5,utf8_decode($nombres),'TBLR',0,'L',0);
			$this->pdf->Cell(60,5,utf8_decode($apellidos),'TBLR',0,'L',0);
			$this->pdf->Cell(30,5,$ci,'TBLR',0,'L',0);
			$this->pdf->Cell(30,5,$telefono,'TBLR',0,'L',0);
		    $this->pdf->Ln(5);
		    $num++;
		}

		$this->pdf->Output("ListaCopropietarios.pdf","I");
	}


}


