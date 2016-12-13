<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kompetensi extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDataKompetensi(){
		$data['KI'] =  $this->e_kompetensiinti->getKINow();
		// print_r($data['KI']);
		// die();
		// foreach ($data['KI'] as $key) {
		// 	echo $key->id_ki;
		// }
		// die();
		// $kd = 1;
		// foreach ($data['KI'] as $row) {
		// 	$data['KI'][$kd] =  $this->e_kompetensidasar->getKD($row->id_ki);
		// 	$kd++;
		// }

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_daftar_inti', $data);
	}

	public function buatDataKI(){
		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_inti');
	}

	public function tambahKI(){
		$this->e_kompetensiinti->setKi($this->input->post('ki'));
		$this->e_kompetensiinti->setTahunAjaran($this->input->post('tahun_ajaran'));
		$this->e_kompetensiinti->setStatus(1);
		$this->e_kompetensiinti->setKodeki('');

		$this->e_kompetensiinti->tambahKI();

		$this->session->set_flashdata('info', 'Kompetensi inti telah ditambahkan');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function gantiDataKI($id_ki){
		$ki = $this->e_kompetensiinti->getDataKI($id_ki);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_edit_inti', $ki);
	}

	public function perbaruiDataKI(){
		$this->e_kompetensiinti->setKi($this->input->post('ki'));
		$this->e_kompetensiinti->setTahunAjaran($this->input->post('tahun_ajaran'));
		$this->e_kompetensiinti->setStatus($this->input->post('status_terpakai'));
		$this->e_kompetensiinti->setKodeki($this->input->post('kodeki'));

		$this->e_kompetensiinti->updateKI($this->input->post('id_ki'));

		$this->session->set_flashdata('info', 'Kompetensi inti telah diganti');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function konfirmasiKI($id_ki){
		$data = array(
			'id_ki' => $id_ki , 
			);
		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_hapus_inti', $data);
	}

	public function hapusKI($id_ki){
		$this->e_indikator->deleteIndikatorKI($id_ki);
		$this->e_kompetensidasar->deleteKDKI($id_ki);
		$this->e_kompetensiinti->deleteKI($id_ki);

		$this->session->set_flashdata('info', 'Kompetensi dasar telah dihapus');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function batalHapus(){
		$this->session->set_flashdata('calm', 'Tidak jadi dihapus');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function buatDataKD($id_ki){
		$data = array(
			'ki' => $this->e_kompetensiinti->getDataKI($id_ki) , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_dasar', $data);
	}

	public function tambahKD(){
		$this->e_kompetensidasar->setIdki($this->input->post('id_ki'));
		$this->e_kompetensidasar->setKd($this->input->post('kd'));
		$this->e_kompetensidasar->setKodekd($this->input->post('kodeki'), 0);

		$this->e_kompetensidasar->tambahKD();

		$this->session->set_flashdata('info', 'Kompetensi dasar telah ditambahkan');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function gantiDataKD($id_kd){
		$kd = $this->e_kompetensidasar->getKD($id_kd);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_edit_dasar', $kd);
	}

	public function perbaruiDataKD(){
		$this->e_kompetensidasar->setKd($this->input->post('kd'));
		$this->e_kompetensidasar->setKodekd($this->input->post('kodekd'), 1);

		$this->e_kompetensidasar->updateKD($this->input->post('id_kd'));

		$this->session->set_flashdata('info', 'Kompetensi dasar telah diganti');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function konfirmasiHapus($id_kd){
		$data = array(
			'id_kd' => $id_kd , 
			);
		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_hapus_dasar', $data);
	}

	public function hapusKD($id_kd){
		$this->e_indikator->deleteIndiKD($id_kd);
		$this->e_kompetensidasar->deleteKD($id_kd);

		$this->session->set_flashdata('info', 'Kompetensi dasar telah dihapus');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function buatDataIndikator($id_kd){
		$data = array(
			'kd' => $this->e_kompetensidasar->getKD($id_kd) , 
			'BP' => $this->e_bidangpengembangan->getBPAll() , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_tambah_indi', $data);
	}

	public function tambahIndikator(){
		$this->e_indikator->setIdKD($this->input->post('id_kd'));
		$this->e_indikator->setKodeindi($this->input->post('kodekd'), 0);
		$this->e_indikator->setIndikator($this->input->post('indikator'));
		$this->e_indikator->setIdBidpeng($this->input->post('id_bidpeng'));

		$this->e_indikator->tambahIndi();

		$this->session->set_flashdata('info', 'Indikator telah ditambahkan');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function gantiDataIndikator($id_indikator){
		$data = array(
			'indikator' => $this->e_indikator->getIndikator($id_indikator) , 
			'BP' => $this->e_bidangpengembangan->getBPAll() , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_edit_indi', $data);
	}

	public function perbaruiDataIndikator(){
		$this->e_indikator->setIndikator($this->input->post('indikator'));
		$this->e_indikator->setKodeindi($this->input->post('kodeindi'), 1);
		$this->e_indikator->setIdBidpeng($this->input->post('id_bidpeng'));

		$this->e_indikator->updateDataIndikator($this->input->post('id_indikator'));

		$this->session->set_flashdata('info', 'Indikator telah diganti');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

	public function konfirmasiIndi($id_indikator){
		$data = array(
			'id_indikator' => $id_indikator , 
			);

		$this->load->view('header');
		$this->load->view('html_head');
		$this->load->view('content/kurikulum/v_hapus_indi', $data);
	}

	public function hapusIndikator($id_indikator){
		$this->e_indikator->deleteIndikator($id_indikator);

		$this->session->set_flashdata('info', 'Indikator telah dihapus');
		redirect('c_kompetensi/lihatDataKompetensi','refresh');
	}

}

/* End of file c_kompetensi.php */
/* Location: ./application/controllers/c_kompetensi.php */