<?php 
    
    class Admin_model extends CI_Model{
        
        /*function _construct() {
            parent::__construct();
           //$this->load->database();
        }*/
        
       public function crearAdmin($datos) {
            $this->db->insert('administrador',$datos);
        }
        public function getTodosAdmin(){
            //$query=$this->db->get('administrador');
           //$query=$this->db->query('SELECT *FROM administrador;');
           $query = $this->db
                ->select("*")
                ->from("administrador")
                ->order_by("pk","asc")
                ->get ();
                return $query->result ();
        }
     
    }
    
    
?>

