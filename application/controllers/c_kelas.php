<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kelas extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDataKelas(){
		$data = array(
			'kelas' => $this->e_kelas->getKelasAll() , 
			);
		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_daftar_kelas', $data);
	}

	public function buatDataKelas(){
		$data = array(
			'KB' => $this->e_kelompokbelajar->getKelBelajarAll() ,
			'guru' => $this->e_dataGuru->getGuruAll() 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_tambah_kelas', $data);
	}
	public function tambahKelas(){
		$this->e_kelas->setKelBelajar($this->input->post('id_kel_belajar'));
		$this->e_kelas->setKelas($this->input->post('kelas'));
		$this->e_kelas->setTahunAjaran($this->input->post('tahun_ajaran'));
		$this->e_kelas->setKuota($this->input->post('kuota'));
		$this->e_kelas->setIdGuru($this->input->post('id_guru'));

		$this->e_kelas->tambahKelas();

		$this->session->set_flashdata('info', 'Kelas ditambahkan');
		redirect('c_kelas/lihatDataKelas','refresh');
	}

	public function gantiKuotaKelas($id_kelas){
		$data = array(
			'kuota' => $this->e_kelas->getKuotaKelas($id_kelas),
			'id_kelas' => $id_kelas
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_edit_kuotakelas', $data);
	}

	public function perbaruiDataKuotaKelas(){
		$kuota_new = $this->input->post('kuota_maks');
		$id_kelas = $this->input->post('id_kelas');

		$check_jml = $this->cekJumlah($kuota_new, $id_kelas);

		if ($check_jml) {
			$this->e_kelas->setKuota($kuota_new);

			$this->e_kelas->updateKuota($id_kelas);

			$this->session->set_flashdata('info', 'Jumlah kuota telah diganti');
			redirect('c_kelas/lihatDataKelas','refresh');
		}else{
			$this->session->set_flashdata('warn', 'Jumlah murid sekarang lebih banyak dari jumlah kuota');
			redirect('c_kelas/lihatDataKelas','refresh');
		}
	}

	public function cekJumlah($kuota_new, $id_kelas){
		$kuota_old = $this->e_kelas->getJumlahMurid($id_kelas);
		if ($kuota_new > $kuota_old) {
			return true;
		}else{
			return false;
		}
	}

	public function gantiGuruKelas($id_kelas){
		$data = array(
			'nama_guru' => $this->e_kelas->getGuruKelas($id_kelas) , 
			'guru' => $this->e_dataGuru->getGuruAll() ,
			'id_kelas' => $id_kelas
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_edit_gurukelas', $data);
	}

	public function perbaruiDataGuruKelas(){
		$this->e_kelas->setIdGuru($this->input->post('id_guru'));

		$this->e_kelas->updateGuruKelas($this->input->post('id_kelas'));

		$this->session->set_flashdata('info', 'Guru telah diganti');
		redirect('c_kelas/lihatDataKelas','refresh');
	}

	public function konfirmasiNonaktif($id_kelas){
		$data = array(
			'id_kelas' => $id_kelas , 
			);
	
		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_nonaktif_kelas', $data);
	}

	public function nonAktifKelas($id_kelas){
		$this->e_kelas->setStatusKelas(0);

		$this->e_kelas->updateKelas($id_kelas);

		$this->session->set_flashdata('info', 'Kelas telah di non-aktifkan');
		redirect('c_kelas/lihatDataKelas','refresh');
	}

	public function batalNonAktif(){
		$this->session->set_flashdata('calm', 'Kelas tidak jadi di non-aktifkan');
		redirect('c_kelas/lihatDataKelas','refresh');
	}

}

/* End of file c_kelas.php */
/* Location: ./application/controllers/c_kelas.php */