<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lapEval extends CI_Controller {

	public function index()
	{
		$data = array(
			'murid' => $this->e_murid->get_All() 
			);

		$this->load->view('header');
		$this->load->view('content/v_daftar_murid_evaluasi', $data);
	}

	public function lihatEvalMurid($id_murid){

		//HARUS DIGANTI KE TABEL PEMBELAJARAN, FUNGSINYA MINJEM KE MURID DULU
		$data = array(
			'murid' => $this->e_murid->getDataMurid($id_murid)
			);

		$this->load->view('header');
		$this->load->view('content/v_eval_murid', $data);
	}

}

/* End of file c_lapEval.php */
/* Location: ./application/controllers/c_lapEval.php */