<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pertumbuhan extends CI_Controller {

	public function index()
	{
		$data = array(
			'murid' => $this->e_murid->get_All() 
			);

		$this->load->view('header');
		$this->load->view('content/v_daftar_murid_pertumbuhan', $data);
	}

	public function lihatMurid($id_murid){
		$data = array(
			'murid' => $this->e_murid->getDataMurid($id_murid), 
			);

		$this->load->view('header');
		$this->load->view('content/v_pertumbuhan_murid', $data);
	}

	public function buatCatPertumbuhan($id_murid){
		$data = array(
			'id_murid' => $id_murid 
			);
		$this->load->view('content/v_form_pertumbuhan', $data);
	}

	public function tambahCatPertumbuhan(){
		$data = array(
			'isi_pertumbuhan' => $this->input->post('isi_pertumbuhan'),
			'id_murid' => $this->input->post('id_murid') 
			);

		$this->e_pertumbuhan->tambahCatPertumbuhan($data);
		//tampil info
		redirect('main','refresh');
	}

	public function lihatCatPertumbuhan($id_murid){
		$data = array(
			'pertumbuhan' => $this->e_pertumbuhan->getDataCatPertumbuhanAll($id_murid),
			);

		$this->load->view('content/v_cat_pertumbuhan', $data);
	}

	public function gantiCatPertumbuhan($id_pertumbuhan){
		$data = array(
			'pertumbuhan' => $this->e_pertumbuhan->getDataCatPertumbuhan($id_pertumbuhan) , 
			);

		$this->load->view('content/v_ganti_cat_pertumbuhan', $data);
	}

	public function perbaruiCatPertumbuhan(){
		$data = array(
			'id_pertumbuhan' => $this->input->post('id_pertumbuhan') ,
			'id_murid' => $this->input->post('id_murid') , 
			'isi_pertumbuhan' => $this->input->post('isi_pertumbuhan') ,
			);

		$this->e_pertumbuhan->updateCatPertumbuhan($data, $this->input->post('id_pertumbuhan'));
		//tampil info
		redirect('main','refresh');
	}
}

/* End of file c_pertumbuhan.php */
/* Location: ./application/controllers/c_pertumbuhan.php */