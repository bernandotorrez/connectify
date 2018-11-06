<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_Model extends CI_Model{

	
	public function __construct(){
		parent::__construct();
	}

	public function do_login($params){		
		$this->db->where('username', $params['username']);
		$this->db->where('password', md5($params['password']));
		$query = $this->db->get('login');

		if($query->num_rows() > 0 ){
			$array = array('message' => 'ok',
							'data' => $query->result_array());
		} else {
			$array = array('message' => 'error',
							'data' => 'error');
		}

		return $array;

		
	}

	public function update($email,$table,$data){   
		$this->db->where('email', $email);
		$query = $this->db->update($table, $data);
		return $query;
  }
}