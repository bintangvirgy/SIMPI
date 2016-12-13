<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jeniskeg extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDaftarJenisKeg(){
		$data = array(
			'jeniskeg' => $this->e_jeniskeg->getJenisKegAll(), 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_jeniskeg', $data);
	}

	public function buatDataJenisKeg(){
		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_jeniskeg');
	}

	public function tambahJenisKeg(){
		$this->e_jeniskeg->setJenisKegiatan($this->input->post('jenis_kegiatan'));

		$this->e_jeniskeg->tambahJenisKeg();

		$this->session->set_flashdata('info', 'Jenis kegiatan telah ditambahkan');
		redirect('c_jeniskeg/lihatDaftarJenisKeg','refresh');
	}

	public function lihatDataJenisKeg($id_jenis_keg){
		$jeniskeg = $this->e_jeniskeg->getJenisKeg($id_jenis_keg);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_edit_jeniskeg', $jeniskeg);
	}

	public function perbaruiDataJenisKeg(){
		$this->e_jeniskeg->setJenisKegiatan($this->input->post('jenis_kegiatan'));

		$this->e_jeniskeg->updateJenisKeg($this->input->post('id_jenis_keg'));

		$this->session->set_flashdata('info', 'Jenis kegiatan sudah diperbarui');
		redirect('c_jeniskeg/lihatDaftarJenisKeg','refresh');
	}

	public function konfirmasiHapus($id_jenis_keg){
		$data = array(
			'id_jenis_keg' => $id_jenis_keg , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_hapus_jeniskeg', $data);
	}

	public function hapusJenisKeg($id_jenis_keg){
		$data = $this->cekDetilHari($id_jenis_keg);

		if ($data) { //jika tidak ada data
			$this->e_jeniskeg->deleteJenisKeg($id_jenis_keg);

			$this->session->set_flashdata('info', 'Jenis kegiatan telah dihapus');
			redirect('c_jeniskeg/lihatDaftarJenisKeg','refresh');
		}else{ //jika ada data
			$this->session->set_flashdata('warn', 'Tidak dapat dihapus, ada hari yang menggunakan');
			redirect('c_jeniskeg/lihatDaftarJenisKeg','refresh');
		}
	}

	public function cekDetilHari($id_jenis_keg){
		$data = array(
			'detilhari' => $this->e_detilhari->getDetilHari($id_jenis_keg) , 
			);

		if ($data['detilhari']) {
			return false;
		}else{
			return true; 
		}

	}

	public function batalHapus(){
		$this->session->set_flashdata('calm', 'Tidak jadi dihapus');
		redirect('c_jeniskeg/lihatDaftarJenisKeg','refresh');
	}

}

/* End of file c_jeniskeg.php */
/* Location: ./application/controllers/c_jeniskeg.php */