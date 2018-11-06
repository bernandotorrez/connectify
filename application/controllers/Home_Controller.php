<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->url = $this->uri->uri_string();
	}

	public function index(){
		$data['title'] = 'Home';
		$data['url'] = $this->url;
		$this->template->display('content/index',$data);
	}

	public function about(){
		echo 'halaman about ';
	}

	public function how_to_use(){
		echo 'how to use';
	}

}