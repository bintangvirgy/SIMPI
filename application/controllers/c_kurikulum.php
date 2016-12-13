<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kurikulum extends CI_Controller {

	public function index()
	{
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kurikulum/v_menu_kurikulum');	
	}

}

/* End of file c_kurikulum.php */
/* Location: ./application/controllers/c_kurikulum.php */