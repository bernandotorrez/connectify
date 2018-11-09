<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participant_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->url = $this->uri->uri_string();
	}

	public function index(){
		$data['title'] = 'Publish Event';
		$data['url'] = $this->url;
		//$this->template->display('content/publish_event',$data);
		echo 'join event';
	}

}