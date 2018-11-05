<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index($id=NULL){
		$data['title'] = 'Home';
		$this->template->display('content/index',$data);
	}

	public function about($id){
		echo 'halaman about '.$id;
	}

}