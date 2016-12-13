<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index(){
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('form_login');
	}

	public function login_proses(){
		$username = $this->input->post('username');
	    $password = $this->input->post('password');
	    
	    $login_check_murid = $this->e_loginmurid->login($username, $password);
	    $login_check_guru = $this->e_loginguru->login($username, $password);
	      
	        if($login_check_murid){
	        	$sess_array = array(
				'id_login' => $login_check_murid->id_login,
				'username' => $login_check_murid->username,
				'id_murid' => $login_check_murid->id_murid
				);
				$this->session->set_userdata($sess_array);
				redirect('c_pendaftaran/infoDaftar/'.$login_check_murid->id_murid,'refresh');
		    } elseif($login_check_guru){
		    	$data = array(
						'otoritas' => $this->e_otoritas->getOtoritasGuru($login_check_guru->id_guru) , 
						);
	        	if ($data['otoritas']) {
		        	$sess_array = array(
					'id_login' => $login_check_guru->id_login,
					'id_guru' => $login_check_guru->id_guru,
					);

					$this->session->set_userdata($sess_array);

					redirect('c_login/lihatMenu','refresh');

				}else{
					$this->session->set_flashdata('warn', 'Otoritas belum disetujui kepala sekolah.');
		    		redirect('c_login','refresh');
				}
		    }
		    else{
		    	$this->session->set_flashdata('warn', 'Username/email atau password yang kamu masukkan salah.');
		    	redirect('c_login','refresh');
		    }
	}

	public function lihatMenu(){
		// $data = array(
		// 	'otoritas' => $this->e_otoritas->getOtoritasGuru($this->session->userdata('id_guru')) , 
		// 	);

		$array = array(
			'otoritas' => $this->e_otoritas->getOtoritasGuru($this->session->userdata('id_guru')) ,
		);
		
		$this->session->set_userdata( $array );

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);

		$this->load->view('v_menu', $oto);
		$this->load->view('header');
		$this->load->view('html_head');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('c_login','refresh');
	}

}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */