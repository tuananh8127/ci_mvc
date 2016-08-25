<?php 
class Footer extends CI_Controller{
	public function __construct(){
		parent::__construct(){

		}
	public function index($page= 'footer'){
		if(!file_exists('views/common'.$page.'.php')){
			show_404();
		}
		else {
			$this->load->view('common/footer');
		}
	}
	}
}