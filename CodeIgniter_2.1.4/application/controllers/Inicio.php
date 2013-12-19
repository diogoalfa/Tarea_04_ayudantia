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
        /*
        if(isset($_POST['btnVerAdmin'])){
           // $admins=array('pk','nombre','clave','contacto','rut');
            $admins=$this->Admin_model->getTodosAdmin();
            
        $this->load->view('pagina_principal',$admins);
        
        }
        else{
            $this->load->view('pagina_principal');
        }
         * 
         */
         
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
        if (! $id) {
            show_404();
        }
        $eliminar = $this->admin_model->delete($id);
    }
    
   

    }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
