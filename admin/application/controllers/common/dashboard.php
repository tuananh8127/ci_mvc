<?php 

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index ($page= 'dashboard'){
		$file_path = APPPATH.'controllers/header.php';
		 if ( ! file_exists(APPPATH.'views/common/'.$page.'.php'))
        {
                show_404();
        }
		else {
			
			$this->load->view('common/dashboard');
			
		}

	}
}