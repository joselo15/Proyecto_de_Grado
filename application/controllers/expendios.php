<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expendios extends CI_Controller {


	public function index()
	{
		$listaexpendios=$this->expendio_model->listarexpendios();
		$data['expendio']=$listaexpendios;
		$this->load->view('inc/head');
		$this->load->view('expendio/listaexpendios_view',$data);
		$this->load->view('inc/footer');
	}

	public function agregar()
	{
		// $id=$_POST['idDepartamento'];
		$listadepartamentos=$this->expendio_model->listardepartamentos();
		$tipo['departamento']=$listadepartamentos;	
	    $listacopropietarios=$this->expendio_model->listarcopropietarios();
		$tipo['copropietario']=$listacopropietarios;	
		$this->load->view('inc/head');
		$this->load->view('expendio/registrarexpendio_view',$tipo);
		$this->load->view('inc/footer');
	}
	public function agregarbd()
	{
		$ahora=time();  //hora del sistema
        $ahora = date("Y-m-d H:i:s ", $ahora);
        //validaciones
        $this->form_validation->set_rules('piso', 'Piso', 'trim|required|numeric|min_length[1]|max_length[2]|less_than[13]');
        $this->form_validation->set_rules('numero', 'Numero', 'trim|required|regex_match[/^[A-Z-0-9 ]*$/i]|max_length[4]|is_unique[departamento.numero]');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|regex_match[/^[a-z ]*$/i]');
        $this->form_validation->set_rules('idTipo', 'idTipo', 'trim|required');
        $this->form_validation->set_rules('idEdificio', 'idEdificio', 'trim|required');

		$data['piso']=$_POST['piso'];
		$data['numero']=$_POST['numero'];
		$data['descripcion']=$_POST['descripcion'];
		$data['fechaActualizacion']=$ahora;
		$data['idUsuario']=1;	
		$data['idTipo']=$_POST['idTipo'];
		$data['idEdificio']=$_POST['idEdificio'];
		$data['idUsuario']=$_POST['idUsuario'];

		if ($this->form_validation->run()) {
			$this->departamento_model->agregardepartamento($data);
		    //echo "registro guardado";
		    redirect('departamentos/index','refresh');	      
		} 
		else{
		$listatipos=$this->departamento_model->listartiposdepa();
		$tipo['tipoDepartamento']=$listatipos;
		$listaedif=$this->departamento_model->listaredif();
		$tipo['edificio']=$listaedif;
	    $this->load->view('inc/head');
		$this->load->view('departamentos/agregardepartamento_view',$tipo);
		$this->load->view('inc/footer');
		}
		
	}	

	public function modificar()
	{
		// select de tipos y edificio 
		$listatipos=$this->departamento_model->listartiposdepa();
		$data['tipoDepartamento']=$listatipos;
		$listaedif=$this->departamento_model->listaredif();
		$data['edificio']=$listaedif; 
		$listacopropietarios=$this->departamento_model->listarcopropietarios();
		$data['copropietario']=$listacopropietarios;
		$id=$_POST['id'];
		$data['infodepartamento']=$this->departamento_model->recuperardepartamento($id);
		$this->load->view('inc/head');
		$this->load->view('departamentos/modificardepartamento_view',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd()
	{
		$ahora=time();  //hora del sistema
        $ahora = date("Y-m-d H:i:s ", $ahora); 

		$id=$_POST['id'];
		$piso=$_POST['piso'];
		$numero=$_POST['numero'];
		$descripcion=$_POST['descripcion'];
		$fechaActualizacion=$ahora;
		$idUsuario=$_POST['idUsuario'];
		$idTipo=$_POST['idTipo'];
		$idEdificio=$_POST['idEdificio'];
		$data['piso']=$piso;
		$data['numero']=$numero;
		$data['descripcion']=$descripcion;
		$data['fechaActualizacion']=$fechaActualizacion;
		$data['idUsuario']=$idUsuario;
		$data['idTipo']=$idTipo;
		$data['idEdificio']=$idEdificio;
		//validaciones
        $this->form_validation->set_rules('piso', 'Piso', 'trim|required|numeric|min_length[1]|max_length[2]|less_than[13]');
        $this->form_validation->set_rules('numero', 'Numero', 'trim|required|regex_match[/^[A-Z-0-9 ]*$/i]|max_length[4]');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|regex_match[/^[a-z ]*$/i]');
        $this->form_validation->set_rules('idTipo', 'idTipo', 'trim|required');
        $this->form_validation->set_rules('idEdificio', 'idEdificio', 'trim|required');

        if ($this->form_validation->run()) {
			$this->departamento_model->modificardepartamento($id,$data);
		redirect('departamentos/index','refresh');	      
		} 
		else{
		$listatipos=$this->departamento_model->listartiposdepa();
		$data['tipoDepartamento']=$listatipos;
		$listaedif=$this->departamento_model->listaredif();
		$data['edificio']=$listaedif; 
		$id=$_POST['id'];
		$data['infodepartamento']=$this->departamento_model->recuperardepartamento($id);
		$this->load->view('inc/head');
		$this->load->view('departamentos/modificardepartamento_view',$data);
		$this->load->view('inc/footer');
		}
		
	}
	

	public function eliminarbd()
	{
		$id=$_POST['id'];
		$this->departamento_model->eliminardepartamento($id);
		redirect('departamentos/index','refresh');
	}

	public function cambiarestadobd()
	{
		$id=$_POST['id'];
		$estado=0;		
		$data['Estado']=$estado;
		$this->departamento_model->modificarestado($id,$data);
	    redirect('departamentos/index','refresh');
	}
	// public function cambiarestadobd()
	// {
	// 	$id=$_POST['id'];
	// 	$estado=$_POST['estado'];		
	// 	if ($estado==0) {
	// 		$estado=1;
	// 	} else{
	// 		$estado=0;
	// 	}
	// 	$data['Estado']=$estado;
	// 	$this->departamento_model->modificarestado($id,$data);
	//     redirect('departamentos/index','refresh');
	// }


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

	public function prueba()
	{
		$query=$this->db->get('copropietarios');
		$execonsulta=$query->result();
		print_r($execonsulta);
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





}


