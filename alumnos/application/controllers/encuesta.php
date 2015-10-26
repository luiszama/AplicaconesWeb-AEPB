<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class encuesta extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		////
		$this->load->helper('form');
  }


/////////////////////////////////////////////////////////////  
  function index()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] == 1)
    {
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($session_data['ID']);
	  $data ['dt_historial'] = $this->alumnos->vista_dt_historial($session_data['ID']);
	  $data ['ec'] = $this->user->escuesta();

	  $re = $this->user->encuestaif($session_data['ID']); 
	  $data['id'] = $session_data['ID'];
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  
	  if($re){
      $this->load->view('encuestallena');
 	  }else{
 	  $this->load->view('encuestaformalumno', $data);
 	  }
	  $this->load->view('common/footer');
	  }
	else
	{
	  $this->load->view('common/header');
      $this->load->view('home_view_stop');
	}
	}//fin if @session_data para pasar a else-----
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  
  }
///////
function encuestasav()
	{	   
		$session_data = $this->session->userdata('logged_in');
		   ///// datos para ceneval
 			$r1 = $this->input->post('r1');
 			$r2 = $this->input->post('r2');
 			$r3 = $this->input->post('r3');
 			$r4 = $this->input->post('r4');
 			$r5 = $this->input->post('r5');
 			$comentarios = $this->input->post('comentarios');

		  $query2 = array(
		  'matricula' => $session_data['ID'],
		  'r1' => $r1,
		  'r2' => $r2,
		  'r3' => $r3,
		  'r4' => $r4,
		  'r5' => $r5,
		  'comentarios' => $comentarios
		   );
	
		  $this->db->insert('respuestas', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('encuesta'); 		
	}
/////////////////////////////////////////////////////////////  


////////

}

?>