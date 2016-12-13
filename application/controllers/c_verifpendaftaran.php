<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_verifpendaftaran extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatPendaftar(){
		$data = $this->cekMurid();

		if ($data) {
			$data = array(
				'pendaftar' => $this->e_murid->getPendaftarAll() 
				);
			$this->load->view('header');
			$this->load->view('content/kesiswaan/v_daftar_pendaftar', $data);
		} else{
			$this->session->set_flashdata('warn', 'Belum ada yang mendaftar');
			$this->load->view('header');
			$this->load->view('content/kesiswaan/v_menu_kesiswaan');
		}
	}

	public function cekMurid(){
		$data = sizeof($this->e_murid->getPendaftarAll());
		if($data > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function lihatDataPendaftar($id_murid){
		$data = array(
			'murid' => $this->e_murid->getMurid($id_murid) ,
			'walimurid' => $this->e_walimurid->getWaliMurid($id_murid) ,
			'dokumen' => $this->e_dokumenMurid->getDokumenMurid($id_murid) , 
			);

		$verif = $this-> cekVerif($id_murid);

		if($verif){
			$data['vmurid']	= $this->e_verifmurid->getVerifMurid($id_murid);
			$data['vkeuangan']	= $this->e_verifmurid->getVerifKeuangan($id_murid);
			$data['vwalimurid']	= $this->e_verifwali->getVerifWali($id_murid);
			$data['vdokumen']	= $this->e_verifdokumen->getVerifDok($id_murid);

			$array = array(
				'verifikasi' => 'yes'
			);
			
			$this->session->set_userdata( $array );

			$this->load->view('header');
			$this->load->view('content/kesiswaan/v_data_pendaftar', $data);
		} else{
			$this->session->set_flashdata('warn', 'Belum verifikasi');

			$array = array(
				'verifikasi' => 'no'
			);
			
			$this->session->set_userdata( $array );

			$this->load->view('header');
			$this->load->view('content/kesiswaan/v_data_pendaftar', $data);
		}
		
	}

	public function cekVerif($id_murid){
		$vmurid = $this->e_verifmurid->getVerifMurid($id_murid);
		$vkeuangan = $this->e_verifmurid->getVerifKeuangan($id_murid);

		if ($vmurid == NULL || $vkeuangan == NULL) {
			return false;
		}elseif ($vmurid->verif == 2 || $vkeuangan->verif == 2) {
			return true;
		} 
		else{
			return false;
		}
	}

}

/* End of file c_verifpendaftaran.php */
/* Location: ./application/controllers/c_verifpendaftaran.php */