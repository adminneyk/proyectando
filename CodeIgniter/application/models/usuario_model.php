<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function login($documento,$clave){ 
        $this->db->select('usuario.id_usuario,usuario.id_perfil,perfiles.nombre_perfil');
        $this->db->from('usuario');
        $this->db->join('perfiles','perfiles.id_perfil=usuario.id_usuario');
        $this->db->where('usuario.usuario',$documento);
        //echo  $this->db->last_query();
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            $data = $query->row();
            $id = $data->id_usuario;
            $idpefil= $data->id_perfil;
            $nombreperil= $data->nombre_perfil;
            $usuario_data = array("nombre"=>"OMAR");
            $this->session->set_userdata($usuario_data);
           // redirect('usuarios/logueado');
           return 1;                   
        } else {
            return 0;
        }
    }    
}

?>