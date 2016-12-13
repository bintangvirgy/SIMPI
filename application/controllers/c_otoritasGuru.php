<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_otoritasGuru extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatOtoritas($id_guru){
		$data = array(
			'id_guru' => $id_guru,
			'otoritas' => $this->e_otoritas->getOtoritasGuru($id_guru) , 
			);

		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_otoritas', $data);
	}

	public function buatOtoritas($id_guru){
		$data = array(
			'id_guru' => $id_guru, 
			);
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_otoritas_daftar', $data);
	}

	public function tambahOtoritas(){
		$data = array(
			'id_guru' => $this->input->post('id_guru') ,
			'otoritas' => $this->input->post('otoritas')
			);

		$this->e_otoritas->tambahOtoritas($data);

		$this->session->set_flashdata('warn', ' Otoritas telah ditambahkan');
		redirect('c_otoritasGuru/lihatOtoritas/'.$this->input->post('id_guru'),'refresh');
	}

	public function konfirmasiHapus($id_otoritas){
		$data = array(
			'id_otoritas' => $id_otoritas , 
			);

		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('content/kepsek/v_hapus_otoritas', $data);
	}

	public function hapusOtoritas($id_otoritas){
		$this->e_otoritas->deleteOtoritas($id_otoritas);

		$this->session->set_flashdata('warn', ' Otoritas telah dihapus');
		redirect('c_dataGuru','refresh');
	}

	public function batalHapus(){
		$this->session->set_flashdata('warn', ' Otoritas tidak jadi dihapus');
		redirect('c_dataGuru','refresh');
	}
}

/* End of file c_otoritasGuru.php */
/* Location: ./application/controllers/c_otoritasGuru.php */