

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_controller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function index()
    {
        
        $this->load->view('invoice_view.php');
        
    }

}

/* End of file Controllername.php */
