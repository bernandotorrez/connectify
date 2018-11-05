<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function login(){
		$data['title'] = 'Login';
		$this->template->display('content/login', $data);
	}

	public function register(){
		echo 'halaman register';
	}

	public function do_login(){

	}

	public function do_register(){

	}

}