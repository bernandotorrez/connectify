<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound_Controller extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }

  public function index(){
    /*============= START Fungsi untuk memanggil halaman 404 =============*/

    $data['title'] = '404 Page Not Found';
    
    /*$data['url'] =  $this->uri->segment(1);
    if($data['url'] == 'Admin'){
      $this->template->admin('content_admin/404');
    } else {
      $this->load->view('404',$data);
    }*/

    $this->load->view('404',$data);
    
    //redirect(base_url('NotFound'));

    /*============= END Fungsi untuk memanggil halaman 404 =============*/
  }

  
   
}