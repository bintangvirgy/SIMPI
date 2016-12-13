<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dataMurid extends CI_Controller {

	public function index()
	{
		
	}

	public function lihatDataMurid($id_murid){
		$data = array(
			'murid'=>$this->e_murid->getDataMurid($id_murid),
			// 'dokumen'=>$this->e_DokumenMurid->getDokumenMurid($id_murid),
			// 'pertumbuhan'=>$this->e_Pertumbuhan->getPertumbuhan($id_murid),
			// 'pembelajaran'=>$this->e_Pembelajaran->getTemaSubtemaNow($id_murid)
			);
        $this->load->view('header');
        $this->load->view('content/v_detail_murid', $data);
	}

}

/* End of file c_dataMurid.php */
/* Location: ./application/controllers/c_dataMurid.php */