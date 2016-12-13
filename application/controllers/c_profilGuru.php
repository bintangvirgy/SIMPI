<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profilGuru extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDataGuru($id_guru){
		$data = array(
			'guru' => $this->e_dataGuru->getDataGuru($id_guru)
			);

		$this->load->view('header');
		$this->load->view('content/v_detail_guru', $data);
	}

	public function gantiDataGuru($id_guru){
		$data = array(
			'guru' => $this->e_dataGuru->getDataGuru($id_guru)
			);

		$this->load->view('header');
		$this->load->view('content/v_ganti_guru', $data);
	}

	public function perbaruiDataGuru(){
		$id_guru = $this->input->post('id_guru');
		$data = array(
			'nama_guru' => $this->input->post('nama_guru') , 
			);

		$this->e_dataGuru->updateDataGuru($id_guru, $data);
		redirect('main','refresh');
	}

}

/* End of file c_profilGuru.php */
/* Location: ./application/controllers/c_profilGuru.php */