<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tema extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDataTema(){
		$data = array(
			'tema' => $this->e_tema->getTemaAll() , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_tema', $data);
	}

	public function buatDataTema(){
		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_tema');
	}

	public function tambahTema(){
		$this->e_tema->setTema($this->input->post('tema'));
		$this->e_tema->setTahunAjaran($this->input->post('tahun_ajaran'));
		$this->e_tema->setSemester($this->input->post('semester'));
		$this->e_tema->setStatus(1);

		$this->e_tema->tambahTema();

		$this->session->set_flashdata('info', 'Tema telah ditambahkan');
		redirect('c_tema/lihatDataTema','refresh');
	}

	public function gantiDataTema($id_tema){
		$check_sub = $this->cekSubtema($id_tema);

		if ($check_sub) { //jika ada subtema
			$this->session->set_flashdata('warn', 'Tidak dapat diganti, terdapat sub tema didalamnya');
			redirect('c_tema/lihatDataTema','refresh');
		}else{ //jika tidak ada subtema
			$tema = $this->e_tema->getTema($id_tema);

			$this->load->view('header');
			$this->load->view('html_head');
			$this->load->view('content/kurikulum/v_edit_tema', $tema);
		}
	}

	public function cekSubtema($id_tema){
		$check = array(
			'subtema' => $this->e_tema->getTemaSubtema($id_tema) , 
			);

		if ($check['subtema']) {
			return $check;
		}else{
			return false;
		}
	}

	public function perbaruiDataTema(){
		$this->e_tema->setTema($this->input->post('tema'));
		$this->e_tema->setTahunAjaran($this->input->post('tahun_ajaran'));
		$this->e_tema->setSemester($this->input->post('semester'));
		$this->e_tema->setStatus($this->input->post('status_terpakai'));

		$this->e_tema->updateTema($this->input->post('id_tema'));

		$this->session->set_flashdata('info', 'Tema telah diganti');
		redirect('c_tema/lihatDataTema','refresh');
	}

	public function konfirmasiHapus($id_tema){
		$check_sub = $this->cekSubtema($id_tema);

		if ($check_sub) { //jika ada subtema
			$this->session->set_flashdata('warn', 'Tidak dapat dihapus, terdapat sub tema didalamnya');
			redirect('c_tema/lihatDataTema','refresh');
		}else{ //jika tidak ada subtema
			$data = array(
				'id_tema' => $id_tema, 
				);

			$this->load->view('header');
			$this->load->view('html_head');
			$this->load->view('content/kurikulum/v_hapus_tema', $data);
		}
	}

	public function hapusTema($id_tema){
		$this->e_tema->deleteTema($id_tema);

		$this->session->set_flashdata('info', 'Tema telah dihapus');
		redirect('c_tema/lihatDataTema','refresh');
	}

	public function batalHapus(){
		$this->session->set_flashdata('calm', 'Tidak jadi dihapus');
		redirect('c_tema/lihatDataTema','refresh');
	}

	public function lihatDataKelBelajar($id_tema){
		$data = array(
			'KB' => $this->e_kelompokbelajar->getKelBelajarAll() ,
			);
		$array = array(
			'id_tema' => $id_tema
		);
		
		$this->session->set_userdata( $array );

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_kb', $data);
	}

	public function lihatSubtema($id_kel_belajar){
		$array = array(
			'id_kel_belajar' => $id_kel_belajar
		);
		
		$this->session->set_userdata( $array );

		$data = array(
			'subtema' => $this->e_subtema->getSubtemaAll($id_kel_belajar, $this->session->userdata('id_tema')) , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_sub', $data);
	}

	public function buatDataSubtema(){
		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_sub');
	}

	public function tambahSubtema(){
		$this->e_subtema->setIdTema($this->session->userdata('id_tema'));
		$this->e_subtema->setIdKelBelajar($this->session->userdata('id_kel_belajar'));
		$this->e_subtema->setSubtema($this->input->post('subtema'));
		$this->e_subtema->setMateri($this->input->post('muatan_materi'));
		$this->e_subtema->setHariMulai($this->input->post('hari_mulai'));
		$this->e_subtema->setHariSelesai();
		$this->e_subtema->setMinggu($this->input->post('minggu'));

		$this->e_subtema->tambahSubtema();

		$id_sub_new = $this->e_subtema->getIdSubtema();

		for ($i=0; $i < 6 ; $i++) { 
			$this->e_hari->setIdSubtema($id_sub_new);

			$tanggal_get = new DateTime($this->input->post('hari_mulai').'+ '.$i.' day');
			$tanggal = $tanggal_get->format('Y-m-d');

			$this->e_hari->setTanggal($tanggal);

			$this->e_hari->tambahHari();
		}

		$this->session->set_flashdata('info', 'Subtema telah ditambahkan');
		redirect('c_tema/lihatSubtema/'.$this->session->userdata('id_kel_belajar'),'refresh');
	}

	public function gantiDataSubtema($id_subtema){
		$check = $this->cekTanggal($id_subtema);

		if ($check) {
			$subtema = $this->e_subtema->getSubtema($id_subtema);

			$this->load->view('header');
			$this->load->view('html_head');
			$this->load->view('content/kurikulum/v_edit_subtema', $subtema);
		}else{
			$this->session->set_flashdata('warn', 'Tidak dapat diganti, tanggal telah terlewati');
			redirect('c_tema/lihatSubtema/'.$this->session->userdata('id_kel_belajar'),'refresh');
		}
	}

	public function cekTanggal($id_subtema){
		$tanggal_mulai = $this->e_subtema->getSubtemaHariDetilHari($id_subtema);
		$tanggal_now = date('Y-m-d');

		if ($tanggal_now > $tanggal_mulai) { //jika tanggal sudah melewati
			return false;
		} else{ //jika tanggal belum melewati
			return true;
		}
	}

	public function perbaruiDataSubtema(){
		$this->e_subtema->setSubtema($this->input->post('subtema'));
		$this->e_subtema->setMateri($this->input->post('muatan_materi'));

		$this->e_subtema->updateSubtema($this->input->post('id_subtema'));

		$this->session->set_flashdata('info', 'Subtema telah diganti');
		redirect('c_tema/lihatSubtema/'.$this->session->userdata('id_kel_belajar'),'refresh');
	}

	public function konfirmasiHapusSub($id_subtema){
		$check = $this->cekTanggal($id_subtema);

		if ($check) {
			$data = array(
				'id_subtema' => $id_subtema , 
				);

			$this->load->view('header');
			$this->load->view('html_head');
			$this->load->view('content/kurikulum/v_hapus_subtema', $data);
		}else{
			$this->session->set_flashdata('warn', 'Tidak dapat diganti, tanggal telah terlewati');
			redirect('c_tema/lihatSubtema/'.$this->session->userdata('id_kel_belajar'),'refresh');
		}
	}

	public function hapusSubtema($id_subtema){
		$this->e_hari->deleteHari($id_subtema);
		$this->e_subtema->deleteSubtema($id_subtema);

		$this->session->set_flashdata('info', 'Subtema telah dihapus');
		redirect('c_tema/lihatSubtema/'.$this->session->userdata('id_kel_belajar'),'refresh');
	}

	public function batalHapusSub(){
		$this->session->set_flashdata('calm', 'Tidak jadi dihapus');
		redirect('c_tema/lihatSubtema/'.$this->session->userdata('id_kel_belajar'),'refresh');
	}

	public function lihatIndikator($id_subtema){
		$data = array(
			'indisub' => $this->e_indisub->getIndisubAll($id_subtema) , 
			'id_subtema' => $id_subtema,
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_indisub', $data);
	}

	public function buatDataIndikator($id_subtema){
		$par = array(
			'id_indikator' => $this->e_indisub->getIdIndi($id_subtema) , 
			);

		if ($par['id_indikator']) {//jika ada kumpulan id_indikator
			$data = array(
				'indikator' => $this->e_indikator->getIndikatorFilter($par, 1) ,
				'id_subtema' => $id_subtema ,
				);
		}else{//jika tidak ada id_indikator sama sekali
			$data = array(
				'indikator' => $this->e_indikator->getIndikatorFilter('a', 0) , 
				'id_subtema' => $id_subtema ,
				);
		}

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_indisub', $data);
		
	}

	public function tambahIndikator(){
		$data = $this->input->post('id_indi');
		$count = 0;

		foreach ($data as $id_indikator){
			$this->e_indisub->setIdIndikator($id_indikator);
			$this->e_indisub->setIdSubtema($this->input->post('id_subtema'));
			$this->e_indisub->tambahIndiSub();
			$count++;
		}

		$this->session->set_flashdata('info', 'Sebanyak '.$count.' indikator telah ditambahkan');
		redirect('c_tema/lihatIndikator/'.$this->input->post('id_subtema'),'refresh');
	}

	public function konfirmasiHapusIndi(){
		$data = array(
			'id_indi' => $this->input->post('id_indi') , 
			'id_subtema' => $this->input->post('id_subtema') ,
		);
		
		$this->session->set_userdata( $data );

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_hapus_indisub');
		
	}

	public function hapusIndikator(){
		$count = 0;
		foreach ($this->session->userdata('id_indi') as $id_indisub) {
			$this->e_indisub->deleteIndikator($id_indisub);
			$count++;
		}

		$this->session->set_flashdata('info', 'Sebanyak '.$count.' indikator telah dihapus');
		redirect('c_tema/lihatIndikator/'.$this->session->userdata('id_subtema'),'refresh');
	}
}

/* End of file c_tema.php */
/* Location: ./application/controllers/c_tema.php */