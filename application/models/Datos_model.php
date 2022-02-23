<?php
    /* minuscula */
    class datos_model extends CI_Model
    {

        public function __construct()
        {
            /* Llamaos la clase para cargar la libreria */
            $this->load->database();
        }

        /* Función / Metodo */
        /* Inserción */
        public function registro($nombre, $telefono, $correo)
        {
            return $this->db->insert("datos", ["nombre" => $nombre, "telefono" => $telefono, "correo" => $correo]);
            
        }
    }
