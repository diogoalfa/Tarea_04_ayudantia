<?php 
    
    class Admin_model extends CI_Model{
        
        /*function _construct() {
            parent::__construct();
           //$this->load->database();
        }*/
        
       public function crearAdmin($datos) {
            $this->db->insert('administrador',$datos);
            echo '<script>alert("Exito al guardar datos de admin"); </script>';
            redirect('/Inicio', 'refresh');
            return true;
        }
        public function getTodosAdmin(){
            //$query=$this->db->get('administrador');
           //$query=$this->db->query('SELECT *FROM administrador;');
           $query = $this->db
                ->select("pk,nombre,rut,contacto")
                ->from("administrador")
                ->order_by("pk","asc")
                ->get ();
                return $query->result ();
        }
        public function delete($id){
            $this->db->delete('administrador', array('pk' => $id));
            redirect('Inicio', 301);
            return true;
        }
     
    }
    
    
?>

