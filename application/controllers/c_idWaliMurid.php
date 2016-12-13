<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_idWaliMurid extends CI_Controller {

	public function index()
	{
		
	}
	public function gantiIdLogin($id_murid){
		$data = array(
			'murid'=>$this->e_loginmurid->getDataIdLogin($id_murid)
			);

		$this->load->view('header');
		$this->load->view('content/v_gantiId_murid', $data);
	}

	public function perbaruiIdLogin(){
		$data = array(
	    	'id_login' => $this->input->post('id_login'),
	    	'username' => $this->input->post('username'),
	    	'password' => $this->input->post('password') 
	    	);

		$this->e_loginmurid->updateIdLogin($data, $this->input->post('id_login'));
		redirect('main','refresh');
	}

	public function cekFormat($data){
		//tidak boleh mengandung kata porno
		//panjang maksimal 20
		//panjang minimal 3
		return true;

	}

	public function cekKetersediaan($data){
		return true;
	}

	public function konfirmasiHapus($id_murid){
		$data = array(
			'murid'=>$this->e_loginmurid->getDataIdLogin($id_murid)
			);

		$this->load->view('header');
		$this->load->view('content/v_hapusId_murid', $data);
	}

	public function hapusIdLogin(){
		$jwb= $this->input->post('jwb');

		if($jwb=='Y'){
			$this->e_loginmurid->deleteIdLogin($this->input->post('id_murid'));
		}else{

		}
		redirect('main','refresh');
	}

	public function buatIdLogin(){
		$this->load->view('header');
		$this->load->view('content/v_pendaftaran_id');
	}

	public function tambahIdLogin(){
		$datalogin = array(
	    	'id_login' => $this->input->post('id_login'),
	    	'username' => $this->input->post('username'),
	    	'password' => $this->input->post('password'),
	    	'id_murid' => $this->input->post('id_murid'),
	    	);
		$datamurid = array(
			'id_login' =>$this ->input->post('id_login'),
			'id_murid' =>$this ->input->post('id_murid')
			);

		$this->e_loginmurid->tambahNullMurid($datamurid);
		$this->e_loginmurid->tambahIdLogin($datalogin);

		redirect('main','refresh');

	}

}

/* End of file c_idWaliMurid.php */
/* Location: ./application/controllers/c_idWaliMurid.php */