<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function obtenerPerfiles(){ 
        $query=$this->db->get('perfiles');
          //echo  $this->db->last_query();
        if($query->num_rows()>0){
            return $query;
        } else {
            return false;
        }
    }
}

?>