<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_hafalan extends CI_Controller {

	public function index($id_murid)
	{
		//HARUS DIGANTI KE TABEL HAFALAN, FUNGSINYA MINJEM KE MURID DULU
		$data = array(
			'murid' => $this->e_murid->getDataMurid($id_murid)
			);
		
		$this->load->view('header');
		$this->load->view('content/v_hafalan', $data);
	}

	public function buatHafalan($id_murid){
		//HARUS DIGANTI KE TABEL HAFALAN, FUNGSINYA MINJEM KE MURID DULU
		$data = array(
			'murid' => $this->e_murid->getDataMurid($id_murid)
			);
		
		$this->load->view('header');
		$this->load->view('content/v_buat_hafalan');
	}

}

/* End of file c_hafalan.php */
/* Location: ./application/controllers/c_hafalan.php */