<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kesiswaan extends CI_Controller {

	public function index()
	{
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kesiswaan/v_menu_kesiswaan');		
	}

}

/* End of file c_kesiswaan.php */
/* Location: ./application/controllers/c_kesiswaan.php */