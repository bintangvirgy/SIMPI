<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bidangpengembangan extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDataBP(){
		$data = array(
			'BP' => $this->e_bidangpengembangan->getBPAll() , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_bidpeng', $data, FALSE);
	}

	public function buatDataBP(){
		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_bidpeng');
	}

	public function tambahBP(){
		$this->e_bidangpengembangan->setBidangPengembangan($this->input->post('bidang_pengembangan'));

		$this->e_bidangpengembangan->tambahBP();

		$this->session->set_flashdata('warn', 'Bidang pengembangan telah ditambah');
		redirect('c_bidangpengembangan/lihatDataBP','refresh');
	}

	public function gantiDataBP($id_bidpeng){
		$BP = $this->e_bidangpengembangan->getBidPengembangan($id_bidpeng);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_edit_bidpeng', $BP);
	}

	public function perbaruiDataBP(){
		$this->e_bidangpengembangan->setBidangPengembangan($this->input->post('bidang_pengembangan'));

		$this->e_bidangpengembangan->updateBP($this->input->post('id_bidpeng'));

		$this->session->set_flashdata('warn', 'Bidang pengembangan telah dirubah');
		redirect('c_bidangpengembangan/lihatDataBP','refresh');
	}

	public function konfirmasiHapus($id_bidpeng){
		$data = array(
			'id_bidpeng' => $id_bidpeng , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_hapus_bidpeng', $data);
	}

	public function hapusBP($id_bidpeng){
		
	}

}

/* End of file c_bidangpengembangan.php */
/* Location: ./application/controllers/c_bidangpengembangan.php */