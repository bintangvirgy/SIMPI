<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_murid extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDaftarMurid(){
		$data = array(
			'murid' => $this->e_murid->getMuridAll() , 
			);

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_daftar_murid', $data);
		$this->load->view('footer');
	}

	public function lihatKelolaMurid($id_murid){

		$data['murid'] = $this->lihatDataMurid($id_murid); //mewakili yg sequence 23
		$data['walimurid'] = $this->lihatDataWaliMurid($id_murid); //mewakili sequence 28
		if ($data['murid']->status == 5) {
			$data['rekom_kelas'] = $this->lihatRiwayatKelas($id_murid);
		}else{
			$data_new= $this->lihatRiwayatKelas($id_murid);
			$data = array_merge($data , $data_new);
		}

		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);

		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_data_murid', $data);
		$this->load->view('footer');
	}

	public function lihatDataMurid($id_murid){
		$murid = $this->e_murid->getDataMurid($id_murid);
		return $murid;
	}

	public function gantiDataMurid($id_murid){
		$murid = $this->e_murid->getDataMurid($id_murid);

		
		$oto = array(
			'otoritas' => $this->session->userdata('otoritas'), 
			);
		$this->load->view('header');
		$this->load->view('v_menu', $oto);
		$this->load->view('html_head');
		$this->load->view('content/kesiswaan/v_edit_murid', $murid);
		$this->load->view('footer');
	}

	public function perbaruiDataMurid(){
		$this->e_murid->setNoInduk($this->input->post('no_induk'));
		$this->e_murid->setNamaLengkap($this->input->post('nama_lengkap'));
		$this->e_murid->setNamaPanggilan($this->input->post('nama_panggilan'));
		$this->e_murid->setJenisKelamin($this->input->post('jenis_kelamin'));
		$this->e_murid->setTempatLahir($this->input->post('tempat_lahir'));
		$this->e_murid->setTanggalLahir($this->input->post('tanggal_lahir'));
		$this->e_murid->setAgama($this->input->post('agama'));
		$this->e_murid->setAlamat($this->input->post('alamat'));
		$this->e_murid->setTelp($this->input->post('telp'));
		$this->e_murid->setSaudara($this->input->post('jumlah_saudara'));
		$this->e_murid->setAnakKe($this->input->post('anak_ke'));
		$this->e_murid->setWargaNegara($this->input->post('warga_negara'));
		$this->e_murid->setBahasa($this->input->post('bahasa'));
		$this->e_murid->setKesehatan($this->input->post('kesehatan'));
		$this->e_murid->setKesehatanDesk($this->input->post('kesehatan_desk'));
		$this->e_murid->setKhusus($this->input->post('khusus'));
		$this->e_murid->setKhususDesk($this->input->post('khusus_desk'));
		$this->e_murid->setKebiasaan($this->input->post('kebiasaan'));
		$this->e_murid->setTinggal($this->input->post('tinggal'));
		$this->e_murid->setDewasa($this->input->post('penghuni_dewasa'));
		$this->e_murid->setSebaya($this->input->post('penghuni_sebaya'));
		$this->e_murid->setHubAyah($this->input->post('hub_ayah'));
		$this->e_murid->setHubIbu($this->input->post('hub_ibu'));
		$this->e_murid->setPergaulan($this->input->post('pergaulan_sebaya'));
		$this->e_murid->setImunisasi($this->input->post('imunisasi'));

		$this->e_murid->updateDataMurid($this->input->post('id_murid'));

		$this->session->set_flashdata('info', 'Data murid '.$this->input->post('nama_panggilan').' telah dirubah');
		redirect('c_murid/lihatKelolaMurid/'.$this->input->post('id_murid'),'refresh');
	}

	public function lihatRiwayatKelas($id_murid){
		$check_status = $this->cekStatus($id_murid);

		if ($check_status == 7) { //murid lama, belum ada dikelas
			$id_kel_belajar = $this->cekKelasTerakhir($id_murid);

			if ($id_kel_belajar == 4) { //TK B
				$array = array(
					'tk_b' => 1
				);
				
			}else{ // Non-TK B
				$array = array(
					'tk_b' => 0 
					);
			}

			$this->session->set_userdata( $array );
			

			$data_new = array(
				'old_kelas' => $this->e_murid->getRiwayatKelas($id_murid) , 
				);
			return $data_new;
		}elseif ($check_status == 5) { //murid baru
			return $this->lihatRekomendasiKelas($id_murid);
		}elseif ($check_status == 10) { //murid lama, punya kelas
			$data_new = array(
				'kelas' => $this->e_murid->getRiwayatKelas($id_murid) , 
				);
			return $data_new;
		}
	}

	public function cekStatus($id_murid){
		return $this->e_murid->getStatusMurid($id_murid);
	}

	public function lihatRekomendasiKelas($id_murid){
		return $this->rekomendasiKelas($id_murid);
	}

	public function cekKelasTerakhir($id_murid){
		return $this->e_pembelajaran->getKelasTerakhir($id_murid);
	}

	public function rekomendasiKelas($id_murid){
		$umur = $this->e_murid->getUmur($id_murid);

		$from = new DateTime($umur);
		$to = new DateTime('today');
		$age = $from->diff($to)->y;
		// $age = $from->diff($to)->y . "years and " . $from->diff($to)->m . " months."

		$rekom_kelas =$this->e_kelas->getRekomKelas($age);

		return $rekom_kelas;
	}

	public function lihatDataWaliMurid($id_murid){
		return $this->e_walimurid->getWaliMuridAll($id_murid);
	}

}

/* End of file murid.php */
/* Location: ./application/controllers/murid.php */