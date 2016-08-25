<?php 
class User_model extends CI_Model {
	public function __Construct(){

			parent::__Construct();
			$this->load->database();
	}
	public function get_user(){
		$query = $this->db->query('SELECT * FROM ci_user');
		return $query->row_array();
	}
}