<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth_Model extends CI_Model{

	
	public function __construct(){
		parent::__construct();
	}

	public function do_login($params){		
		$this->db->select('username, level, login_time, status, verifikasi');
		$this->db->where('username', $params['username']);
		$this->db->where('password', md5($params['password']));
		$query = $this->db->get('login');
		$result = $query->result_array();

		if($query->num_rows() > 0 ){
			$array = array('message' => 'ok',
							'data' => $result);
			$this->session->set_userdata($result[0]);
		} else {
			$array = array('message' => 'error',
							'data' => 'error');
		}

		return $array;

		
	}

	public function do_register($params){
		$data = array(
        'username' => $params['username'],
        'password' => md5($params['password']),
        'level' => $params['level'],
        'status' => '0',
        'verifikasi' => '0'
		);

		$query = $this->db->insert('login', $data);

		return $query;
	}

	public function cek_data_login($params){		
		
		$this->db->where('username', $params['username']);
		$this->db->where('password', md5($params['password']));
		$query = $this->db->get('login');

		if($query->num_rows() > 0){
			$callback = 'exists';
		} else {
			$callback = 'ok';
		}

		return $callback;

	}
}