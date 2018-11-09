<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Check_login {
	protected $_ci;

	function __construct(){
		$CI =& get_instance();
		$url = $CI->uri->uri_string();
		if($CI->session->userdata('level') AND $url=='login'){
    	redirect(base_url());
		}
	}

}
?>
