<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dataguru extends CI_Controller {

	public function index()
	{
		$data = array(
			'guru' => $this->e_dataGuru->getGuruAll() , 
			);

		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_daftar_guru', $data);
	}

	public function buatDataGuru(){
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_tambah_guru');
	}

	public function tambahGuru(){
		$data = array(
			'nama_guru' => $this->input->post('nama_guru') ,
			'jenis_kelamin' => $this->input->post('jenis_kelamin') ,
			'tempat_lahir' => $this->input->post('tempat_lahir') ,
			'tanggal_lahir' => $this->input->post('tanggal_lahir') ,
			'status_pns' => $this->input->post('status_pns') , 
			);
		$this->e_dataGuru->tambahGuru($data);
		$this->session->set_flashdata('warn', $this->input->post('nama_guru').' telah masuk dalam daftar guru');
		redirect('c_dataguru','refresh');
	}

	public function gantiDataGuru($id_guru){
		$data = array(
			'guru' => $this->e_dataGuru->getGuru($id_guru), 
			);
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_data_guru_ganti', $data);
	}

	public function perbaruiDataGuru(){
		$data = array(
			'nama_guru' => $this->input->post('nama_guru') ,
			'jenis_kelamin' => $this->input->post('jenis_kelamin') ,
			'tempat_lahir' => $this->input->post('tempat_lahir') ,
			'tanggal_lahir' => $this->input->post('tanggal_lahir') ,
			'status_pns' => $this->input->post('status_pns') , 
			);

		$this->e_dataGuru->updateGuru($this->input->post('id_guru'), $data);
		$this->session->set_flashdata('warn', 'Data pada guru '.$this->input->post('nama_guru').' telah diperbarui');
		redirect('c_dataguru','refresh');
	}

	public function konfirmasiHapus($id_guru){
		$data = array(
			'id_guru' => $id_guru, 
			);

		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_data_guru_hapus', $data);
	}

	public function hapusGuru($id_guru){
		$this->e_dataGuru->deleteGuru($id_guru);
		$this->session->set_flashdata('warn', 'Data guru telah dihapus');
		redirect('c_dataguru','refresh');
	}

	public function batalHapus(){
		$this->session->set_flashdata('warn', 'Data guru tidak jadi dihapus');
		redirect('c_dataguru','refresh');
	}

	public function lihatDataGuru($id_guru){
		$data = array(
			'guru' => $this->e_dataGuru->getGuru($id_guru) , 
			);
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_data_guru', $data);
	}
}

/* End of file c_dataguru.php */
/* Location: ./application/controllers/c_dataguru.php */