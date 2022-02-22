<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* La primera letra en mayuscula */
class Inicio_controller extends CI_Controller {

	
	/* Se crea la función/ Método */
	public function index()
	{
		/* No se necesita .php */
		/* Llamo a la vista inicio */
		$this->load->view('inicio');
		
	}
}
