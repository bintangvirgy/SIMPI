<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_loginwalimurid extends CI_Controller {

	public function index()
	{
		$data = $this->lihatDataIdLogin();

		$this->load->view('header');
		$this->load->view('content/kesiswaan/v_loginwali', $data);
	}

	public function lihatDataIdLogin(){
		$data = array(
			'idlogin' => $this->e_loginmurid->getLoginMuridAll() , 
			);

		return $data;
	}

	public function buatIdLogin(){
		$this->load->view('header');
		$this->load->view('content/kesiswaan/v_tambah_login');
	}

	public function tambahIdLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$check = $this->cekKetersediaan($username);

		if ($check) {
			$this->e_murid->tambahNullMurid('id_murid', 'NULL', false);
			
			$id_murid = $this->e_murid->getIdMurid();
			
			$data = array(
				'username' => $username ,
				'password' => $password ,
				'id_murid' => $id_murid , 
				);

			$this->e_loginmurid->tambahLogin($data);

			$this->session->set_flashdata('warn', 'ID Login baru berhasil dibuat');
			redirect('c_loginwalimurid','refresh');
		} else{
			$this->session->set_flashdata('warn', 'Data dengan username tersebut sudah ada');

			redirect('c_loginwalimurid/buatIdLogin','refresh');
		}
	}

	public function cekKetersediaan($username){
		$check = $this->e_loginmurid->getLoginMurid($username);
		
		if($check){
			return false;
		}else{
			return true;
		}
	}

}

/* End of file c_loginwalimurid.php */
/* Location: ./application/controllers/c_loginwalimurid.php */