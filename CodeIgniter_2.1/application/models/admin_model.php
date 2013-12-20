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
<<<<<<< HEAD:CodeIgniter_2.1/application/models/admin_model.php
            //redirect('/Inicio', 'refresh');
=======
>>>>>>> 9d70360536931f1189f8469c7af5ada30f69ca16:CodeIgniter_2.1.4/application/models/admin_model.php
            return true;
        }
        public function getAdminEdit($id){
           $query = $this->db
                ->select("pk,nombre,rut,contacto")
                ->from("administrador")
                ->where(array('pk' =>$id))
                ->get ();
                return $query->row();
        }
         public function updateAdmin($datos,$id){
                $this->db->where('pk', $id);
                $this->db->update('administrador', $datos);
                return true;
        }
     
    }
    
    
?>

