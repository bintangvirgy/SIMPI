<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tahunajaran extends CI_Controller {

	public function index()
	{
		
	}

	public function cekBulanGantiTA(){
		$month_now = date('n');
		if ($month_now == 12) { //diganti 7 nanti
			
		}else{
			$this->session->set_flashdata('info', 'Bukan bulan Juli');
			redirect('c_kesiswaan','refresh');
		}
	}

}

/* End of file c_tahunajaran.php */
/* Location: ./application/controllers/c_tahunajaran.php */