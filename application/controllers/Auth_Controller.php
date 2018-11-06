<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->url = $this->uri->uri_string();
		$this->load->model('Login_Model');
	}

	public function login(){
		$data['title'] = 'Login';
		$data['url'] = $this->url;
		$this->template->display('content/login', $data);
	}

	public function register(){
		echo 'halaman register';
	}

	public function reset(){

	}

	public function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$params = array('username' => $username,
						'password' => $password);

		$data = $this->Login_Model->do_login($params);
		
		echo json_encode($data);
	}

	public function do_register(){

	}

}