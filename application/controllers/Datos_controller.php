<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* La primera letra en mayuscula */
class Datos_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        /* Llamo mi modelo con minuscula */
        $this->load->model("datos_model");
        /* helper */
        $this->load->helper(array('form','url'));
    }

	
	/* Se crea la función/ Método */
	public function index()
	{
        $info ["titulo"] = "Registra datos";
		$this->load->view('datos/index', $info);	
	}

    /* Funcion registrar */
    public function registrar()
    {
        $nombre = $this->input->post("nombre"); //$_POST["nombre"];
        $telefono = $this->input->post("telefono"); 
        $correo = $this->input->post("correo"); 
        /* Modelo / función */
        $resultado = $this->datos_model->registro($nombre, $telefono, $correo);

        if ($resultado) {
            $this->correcto();
            /* redirect('datos/correcto'); */
        }
        else{
            echo "Intente nuevamente";
            $this->index();
            
        }
    }

    public function correcto()
	{

		$this->load->view('datos/correcto');	
	}
}
