<?php


class Home extends CI_Controller {

  public function index() {
    $d['v'] = 'home';
	$this->load->view('template', $d);
  }

}

?>
