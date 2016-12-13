<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pilihkelas extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatKelas(){
		$data = array(
			'kelas' => $this->e_pembelajaran->getKelasJumlahMuridAll() ,
			'id_murid' => $this->session->userdata('id_murid') , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_kelas_murid', $data);
	}

	public function tambahPilihanKelas(){
		$this->e_pembelajaran->setIdMurid($this->input->post('id_murid'));
		$this->e_pembelajaran->setIdKelas($this->input->post('id_kelas'));

		$this->e_pembelajaran->tambahPembelajaran();

		$this->e_murid->setStatus(10);

		$this->e_murid->updateMurid($this->input->post('id_murid'));

		$this->session->set_flashdata('info', 'Kelas telah ditentukan');
		redirect('c_murid/lihatKelolaMurid/'.$this->input->post('id_murid'),'refresh');
	}

	public function konfirmasiLulus($id_murid){
		$data = array(
			'id_murid' => $id_murid , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_lulus_murid', $data);
	}

	public function muridLulus($id_murid){
		$this->e_murid->setStatus(8);

		$this->e_murid->updateMurid($id_murid);

		$this->e_alumni->setIdMurid($id_murid);
		$this->e_alumni->setTahunLulus(date('Y'));

		$this->e_alumni->tambahAlumni();

		$this->session->set_flashdata('info', 'Murid telah lulus dan dimasukan dalam data alumni');
		redirect('c_murid/lihatDaftarMurid', 'refresh');
	}

	public function tidakKonfirmasiLulus($id_murid){
		$this->session->set_flashdata('calm', 'Konfirmasi lulus dibatalkan');
		redirect('c_murid/lihatKelolaMurid/'.$id_murid,'refresh');
	}

	public function konfirmasiPindah($id_murid){
		$data = array(
			'id_murid' =>$id_murid , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_pindah_murid', $data);
		$this->load->view('footer');
	}

	public function muridPindah($id_murid){
		$this->e_murid->setStatus(9);
		$this->e_murid->updateMurid($id_murid);

		$this->e_alumni->setIdMurid($id_murid);
		$this->e_alumni->setTahunLulus(date('Y'));

		$this->e_alumni->tambahAlumni();

		$this->session->set_flashdata('info', 'Murid telah pindah sekolah dan dimasukan dalam data alumni');
		redirect('c_murid/lihatKelolaMurid/'.$id_murid,'refresh');
	}

	public function tidakKonfirmasiPindah($id_murid){
		$this->session->set_flashdata('calm', 'Tidak jadi pindah');
		redirect('c_murid/lihatKelolaMurid/'.$id_murid,'refresh');
	}

	public function naikKelas(){
		$data = array(
			'kelas' => $this->e_pembelajaran->getKelasJumlahMurid($this->session->userdata('id_kel_belajar')) , 
			'id_murid' => $this->session->userdata('id_murid') ,
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_naik_murid', $data);
		$this->load->view('footer');
	}

	public function perbaruiPilihanKelas(){
		$this->e_pembelajaran->setIdKelas($this->input->post('id_kelas'));

		$this->e_pembelajaran->updatePembelajaran($this->input->post('id_murid'));

		$this->session->set_flashdata('info', 'Kelas murid telah diganti');
		redirect('c_murid/lihatDaftarMurid', 'refresh');
	}

	public function konfirmasiTinggal($id_murid){
		$data = array(
			'id_murid' => $id_murid , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_tinggal_murid', $data);
		$this->load->view('footer');
	}

	public function tinggalKelas($id_murid){
		$data = array(
			'kelas' => $this->e_pembelajaran->getKelasJumlahMuridAll() ,
			'id_murid' => $id_murid , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_kelas_tinggal_murid', $data);
	}

	public function tidakKonfirmasiTinggal($id_murid){
		$this->session->set_flashdata('calm', 'Tidak jadi tinggal kelas');
		redirect('c_murid/lihatKelolaMurid/'.$id_murid,'refresh');
	}

}

/* End of file c_pilihkelas.php */
/* Location: ./application/controllers/c_pilihkelas.php */