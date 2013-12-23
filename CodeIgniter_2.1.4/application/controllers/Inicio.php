<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('admin_model');
        $this->load->library('form_validation');
        
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

        $this->form_validation->set_rules('username', 'Username', 'trim|callback_username_check|max_length[40]');
        $this->form_validation->set_rules('rut','Rut','required|alpha_numeric|max_length[20]');
        $this->form_validation->set_rules('password', 'Contraseña', 'required|max_length[20]|xss_clean');
        //
        $this->form_validation->set_rules('email', 'Email', 'required');
        
        if ($this->form_validation->run() == FALSE){

            echo $error_username= form_error('username');
            echo $error_rut=form_error('rut');
            echo $error_password=form_error('password');
            //
            echo $error_email=form_error('email');
            echo "La pagina se redireccionará en 5 segundos.";
            
            header ("refresh: 5, http://localhost/Tarea_04_ayudantia/CodeIgniter_2.1.4/index.php/Inicio"); 
        }
        else{
            $datos = array( 'nombre' =>$this->input->post('nombre'),
                            'clave' =>$this->input->post('clave1'),
                            'contacto' => $this->input->post('contacto'),
                            'rut' => $this->input->post('rut'));
            $this->Admin_model->crearAdmin($datos);
        }


        
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
