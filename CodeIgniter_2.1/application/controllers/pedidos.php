<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedidos extends CI_Controller {


    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }


    public function index()
	{
            
		$this->load->view('general/headers');
                $this->load->view('general/menu_principal');
                $this->load->view('general/abre_bodypagina');
                
                 
                 if(isset($_POST['btnsoyprofesor'])){
                     $this->load->view('pedidos/pedir_sala');
                 }
                 else{
                    $this->load->view('pedidos/confirmar_profesor'); 
                 }
                
                
                
                $this->load->view('general/cierre_bodypagina');
                $this->load->view('general/cierre_footer');
	}
}
