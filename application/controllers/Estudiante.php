<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estudiante extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('Estudiante_model');
  }

  public function index()
  {
		$page = 'inicio';
		$this->load->view('header_n', array('page' => $page));
		$this->load->view('inicio_n',array('page' => $page));
    $this->load->view('footer_n');
  }
  
  public function nuevo_registro()
  {
    $com1 = new Estudiante_model();
    $provincia = $com1->_get_provincia();

    $com2 = new Estudiante_model();
    $recinto = $com2->_get_recinto();

    $com3 = new Estudiante_model();
    $carrera = $com3->_get_carrera();
		$page = 'nuevo';
		$this->load->view('header_n', array('page' => $page));
		$this->load->view('nuevo_registro',array('provincia' => $provincia, 'recinto' => $recinto, 'carrera' => $carrera));
    $this->load->view('footer_n');
  }
  
  public function mantenimiento()
  {
    $db = new Estudiante_model();
		$page = 'mantenimiento';
		$this->load->view('header_n', array('page' => $page));
		$this->load->view('mantenimiento',array('page' => $page, 'list' => $db->_get_estudiante()));
    $this->load->view('footer_n');
  }
  
  public function nosotro()
  {
		$page = 'nosotros';
		$this->load->view('header_n', array('page' => $page));
		$this->load->view('nosotro',array('page' => $page));
    $this->load->view('footer_n');
  }
  
  

	
  function set_insert()
  {
    $data = array(
      'nombre' => $this->input->post('nombre', true),
      'apellido' => $this->input->post('apellido', true),
      'cedula' => $this->input->post('cedula', true),
      'sexo' => $this->input->post('sexo', true),
      'provincia' => $this->input->post('nacimiento', true),
      'recinto' => $this->input->post('recinto', true),
      'carrera' => $this->input->post('carrera', true),
      'tanda' => $this->input->post('tanda', true)
    );

    $db = new Estudiante_model();
    $resul = $db->_set_insert($data);
    echo $resul;
  }

}
