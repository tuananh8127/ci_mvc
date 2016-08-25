<?php 
class Header extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}
	public function index($page = "header"){
		if(!file_exists('views/common/'.$page.'.php')){
			show_404();
		}
		else {
			$this->load->view('common/header');
			
		}
	}
}