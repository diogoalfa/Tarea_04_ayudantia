<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        
    }

    public function index() {

        $this->load->view('general/headers');
        $this->load->view('general/menu_principal');
        $this->load->view('general/abre_bodypagina');
      
        $admins=$this->admin_model->getTodosAdmin();
        
        $this->load->view('pagina_principal',compact("admins"));
         
        $this->load->view('general/cierre_bodypagina');
        $this->load->view('general/cierre_footer');
    }

    public function recibirDatos() {
        
        $datos = array('nombre' =>$this->input->post('nombre'),
            'clave' =>$this->input->post('clave1'),
            'contacto' => $this->input->post('contacto'),
            'rut' => $this->input->post('rut'));

        $this->Admin_model->crearAdmin($datos);
    }
    public function eliminar($id=NULL){
        if (!$id) {
            show_404();
        }
        $eliminar = $this->admin_model->delete($id);
        if($eliminar==TRUE)
        {
            echo '<script>alert("Se ha eliminado un registro"); </script>';
            redirect('/Inicio', 'refresh');
        }
        

    }
    public function editar($id = null){
       $this->load->view('general/headers');
        $this->load->view('general/menu_principal');
        $this->load->view('general/abre_bodypagina');
      
        $edit=$this->admin_model->getAdminEdit($id);
        
        $this->load->view('pagina_editar',compact("edit"));
        $this->load->view('general/cierre_bodypagina');
        $this->load->view('general/cierre_footer');
        // $query = $this->Formulario_model->getalumno($id);
        // $this->load->view('editar', compact("query", "id"));
    }
    public function update($id){
        $datos = array('pk' =>$id,
         'nombre' =>$this->input->post('nombre'),
          'contacto' => $this->input->post('contacto'),
           'rut' => $this->input->post('rut')); 
        $crear=$this->Admin_model->updateAdmin($datos,$id); 
        if($crear==TRUE){ 
            echo '<script>alert("Exito al editar datos de admin"); </script>'; 
            redirect('/Inicio', 'refresh'); 
        }
    }

   

    
   }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
