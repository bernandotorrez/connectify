<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->url = $this->uri->uri_string();
		$this->load->model('Auth_Model');
		$this->load->library('Check_login');
	}

	public function login(){
		$data['title'] = 'Login';
		$data['url'] = $this->url;
		$this->template->display('content/login', $data);
	}
	
	public function reset(){

	}

	public function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$params = array('username' => $username,
						'password' => $password);

		$data = $this->Auth_Model->do_login($params);
		
		echo json_encode($data);
	}

	public function do_register(){
		$username = $this->input->post('newusername');
		$password = $this->input->post('newpassword');
		$level = $this->input->post('level');

		$params = array('username' => $username,
						'password' => $password,
						'level' => $level
					);

		$cek_data = $this->Auth_Model->cek_data_login($params);

		if($cek_data == 'exists'){
			$data = 'exists';
		} else {
			$data = $this->Auth_Model->do_register($params);
		}

		
		echo json_encode($data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}