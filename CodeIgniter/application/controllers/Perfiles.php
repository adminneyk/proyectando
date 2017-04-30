<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfiles extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('perfil_model');
        $this->load->view('cabecera');
        $this->load->view('menus');
    }
    	public function index()
	{
            $datos['listaperfiles'] = $this->perfil_model->obtenerPerfiles();
            $this->load->view('Usuarios/perfiles',$datos);
            $this->load->view('footer');
	}
}
