<?php 

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$data = array(
			'murid' =>$this->e_murid->get_all(),
			'guru' =>$this->e_dataGuru->get_all()
			);
		$this->load->view('header');
		$this->load->view('content/menu', $data);
	}

	public function logout(){
		session_destroy();
		redirect('c_loginmurid','refresh');
	}
}
 ?>