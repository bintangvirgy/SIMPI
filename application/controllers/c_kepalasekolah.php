<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kepalasekolah extends CI_Controller {

	public function index()
	{
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_menu_kepsek');
	}

}

/* End of file c_kepalasekolah.php */
/* Location: ./application/controllers/c_kepalasekolah.php */