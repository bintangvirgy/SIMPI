<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_RKH extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatJenjang(){
		$data = array(
			'jenjang' => $this->e_kelompokbelajar->getKelBelajarAll(), 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_jenjang', $data);

	}

	public function lihatTemaSubtema($id_kel_belajar){
		$data = array(
			'temasub' => $this->e_tema->getTemaSubRKH($id_kel_belajar) , 
			'tahun' => $this->e_tema->getTA() , 
			'id_kel_belajar' => $id_kel_belajar ,
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_temasub', $data);
	}

	public function gantiTA(){
		$tahun = $this->input->post('tahun_ajaran');
		$id_kel_belajar = $this->input->post('id_kel_belajar');

		if ($tahun == "all") {
			$this->lihatTemaSubtema($id_kel_belajar);
		}
		else{
			$data = array(
				'temasub' => $this->e_tema->getTemaSubtemaTA($tahun, $id_kel_belajar) , 
				'tahun' => $this->e_tema->getTA() , 
				'id_kel_belajar' => $id_kel_belajar ,
				);

			$this->load->view('header');
			$this->load->view('html_head');
			$this->load->view('content/kurikulum/v_daftar_temasub', $data);
		}
	}

	public function lihatMinggu($id_subtema){
		$data = array(
			'hari' => $this->e_subtema->getTemaSubtemaHari($id_subtema),
			);

		$array = array(
			'id_subtema' => $id_subtema
		);
		
		$this->session->set_userdata( $array );

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_hari', $data);
	}

	public function lihatHari($id_hari){
		$data = array(
			'detail' => $this->e_hari->getHariDetailHari($id_hari), 
			'tanggal' => $this->e_hari->getTanggalDetailHari($id_hari),
			);

		if ($data['detail']) { //ada data
			
			$array = array(
				'data_hari' => 1,
				'id_hari' => $id_hari
			);
			
			$this->session->set_userdata( $array );

			$check_tgl = $this->cekTanggalSekarang($data['tanggal']);

			if ($check_tgl) { //jika sudah melewati
				$array = array(
					'aut_hari' => 0
				);
				
				$this->session->set_userdata( $array );
			}else{ //jika belum melewati
				$array = array(
					'aut_hari' => 1
				);
				
				$this->session->set_userdata( $array );
			}

			$this->load->view('header');
			$this->load->view('html_head');
			$this->load->view('content/kurikulum/v_data_hari', $data);
		}else{
			$array = array(
				'data_hari' => 0,
				'id_hari' => $id_hari
			);
			
			$this->session->set_userdata( $array );

			$this->load->view('header');
			$this->load->view('html_head');
			$this->load->view('content/kurikulum/v_data_hari');
		}
	}

	public function cekTanggalSekarang($tanggal){
		$tanggal_now = date('Y-m-d');
		if ($tanggal < $tanggal_now) {
			return true;
		}else{
			return false;
		}
	}

	public function buatDetilHari($id_hari){
		$data = array(
			'jeniskeg' => $this->e_jeniskeg->getJenisKegAll() ,
			'subtema' => $this->e_hari->getSubtemaHari($id_hari) ,
			'indikator' => $this->e_indisub->getIndikatorSubtema($this->session->userdata('id_subtema')) ,
			'id_hari' => $id_hari ,
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_detilhari', $data);
	}

	public function tambahDetilHari(){
		$this->e_detilhari->setIdHari($this->input->post('id_hari'));
		$this->e_detilhari->setIdJenisKeg($this->input->post('id_jenis_keg'));
		$this->e_detilhari->setUrutan($this->input->post('urutan'));
		$this->e_detilhari->setKegiatan($this->input->post('kegiatan'));
		$this->e_detilhari->setMedia($this->input->post('media'));
		$this->e_detilhari->setDurasi($this->input->post('durasi'));


		$this->e_detilhari->tambahDetilHari();
		$id_detilhari = $this->e_detilhari->getIdDetilHari();

		$this->e_indisub->setIdDetilhari($id_detilhari);
		$this->e_indisub->updateIndiSub($this->input->post('id_indisub'));

		$this->session->set_flashdata('info', 'Detil kegiatan telah ditambahkan');
		redirect('c_RKH/lihatHari/'.$this->session->userdata('id_hari'),'refresh');
	}

	public function gantiDetilHari($id_detilhari){
		$data = array(
			'jeniskeg' => $this->e_jeniskeg->getJenisKegAll() ,
			'subtema' => $this->e_hari->getSubtemaHari($this->session->userdata('id_hari')) ,
			'indikator' => $this->e_indisub->getIndikatorSubtema($this->session->userdata('id_subtema')) ,
			'detilhari' => $this->e_detilhari->getDetilHariIndiSub($id_detilhari) ,
			'id_detilhari' => $id_detilhari
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_ganti_detilhari', $data);
	}

	public function perbaruiDetilHari(){
		$this->e_detilhari->setIdJenisKeg($this->input->post('id_jenis_keg'));
		$this->e_detilhari->setUrutan($this->input->post('urutan'));
		$this->e_detilhari->setKegiatan($this->input->post('kegiatan'));
		$this->e_detilhari->setMedia($this->input->post('media'));
		$this->e_detilhari->setDurasi($this->input->post('durasi'));

		$this->e_detilhari->updateDetilHari($this->input->post('id_detilhari'));
		

		if ($this->input->post('id_indisub') != $this->input->post('id_indisub_lama')) {
			$this->e_indisub->nullDetilhari($this->input->post('id_detilhari'));
			$this->e_indisub->setIdDetilhari($this->input->post('id_detilhari'));
			$this->e_indisub->updateIndiSub($this->input->post('id_indisub'));
		}

		$this->session->set_flashdata('info', 'Detil kegiatan telah dirubah');
		redirect('c_RKH/lihatHari/'.$this->session->userdata('id_hari'),'refresh');
	}

	public function konfirmasiHapus($id_detilhari){
		$data = array(
			'id_detilhari' => $id_detilhari
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_hapus_detilhari', $data);
	}

	public function hapusDetilHari($id_detilhari){
		$this->e_indisub->nullDetilhari($id_detilhari);
		$this->e_detilhari->deleteDetilHari($id_detilhari);

		$this->session->set_flashdata('info', 'Detil hari telah dihapus');
		redirect('c_RKH/lihatHari/'.$this->session->userdata('id_hari'),'refresh');
	}

	public function batalHapus(){
		$this->session->set_flashdata('calm', 'Tidak jadi dihapus');
		redirect('c_RKH/lihatHari/'.$this->session->userdata('id_hari'),'refresh');
	}
}

/* End of file c_RKH.php */
/* Location: ./application/controllers/c_RKH.php */