<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* La primera letra en mayuscula */
class Inicio extends CI_Controller {

	
	/* Se crea la función/ Método */
	public function index()
	{
		/* No se necesita .php */
		$this->load->view('inicio');
	}
}
