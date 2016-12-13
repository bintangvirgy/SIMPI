<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_loginGuru extends CI_Controller {

	public function index()
	{
		
	}

	public function cekIdGuru($id_guru){
		$check_id = $this->e_loginguru->getLoginGuru($id_guru);

		if ($check_id) {
			$this->gantiIdLogin($id_guru);
		}else{
			$this->buatIdLogin($id_guru);
		}
	}

	public function buatIdLogin($id_guru){
		$data = array(
			'id_guru' => $id_guru , 
			);
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_tambah_idlogin', $data);
	}

	public function gantiIdLogin($id_guru){
		$data = array(
			'guru' => $this->e_loginguru->getDataLogin($id_guru) , 
			);

		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_ganti_idlogin', $data);
	}

	public function tambahIdLogin(){
		$username = $this->input->post('username');

		$check_user = $this->cekKetersediaan($username);

		if ($check_user) {
			$data = array(
				'id_guru' => $this->input->post('id_guru') ,
				'username' => $username ,
				'password' => $this->input->post('password') 
				);

			$this->e_loginguru->tambahLogin($data);

			$this->session->set_flashdata('warn', 'ID Login guru telah dibuat');
			redirect('c_dataguru','refresh');
		}
		else{
			$this->session->set_flashdata('warn', 'ID Login guru sudah ada');
			redirect('c_dataguru','refresh');
		}

	}

	public function cekKetersediaan($username){
		$check_user = $this->e_loginguru->getLoginGuruAll($username);

		return $check_user;
	}

	public function perbaruiIdLogin(){
		$username = $this->input->post('username');

		$check_user = $this->cekKetersediaan($username);

		if ($check_user) {
			$id_guru = $this->input->post('id_guru');
			$data = array(
				'username' => $username,
				'password' => $this->input->post('password') 
				);

			$this->e_loginguru->updateLogin($id_guru, $data);

			$this->session->set_flashdata('warn', 'ID Login guru telah diganti');
			redirect('c_dataguru','refresh');
		}
		else{
			$this->session->set_flashdata('warn', 'ID Login guru sudah ada');
			redirect('c_dataguru','refresh');
		}
	}
}

/* End of file c_loginGuru.php */
/* Location: ./application/controllers/c_loginGuru.php */