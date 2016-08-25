<?php 
class User extends CI_Controller {
	public function __Construct(){
		parent::__Construct();
		$this->load->model('user/user_model');
		$this->load->helper('url_helper');
	}
	public function index(){
		$this->load->model('user/user_model');
		$data['user'] = $this->user_model->get_user();
		$data['title'] = 'Danh sach user';
		$data['list_user'] = 'User';
		$this->load->view('user/user', $data);
	}
}