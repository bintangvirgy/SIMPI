<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_feedback extends CI_Controller {

	public function index()
	{
		
	}
	public function lihatFeedback($id_murid){
		$data = array(
			'feedback' => $this->e_feedback->getFeedbackAll($id_murid)
			);

		$this->load->view('content/wm/v_feedback', $data);
	}

	public function masukkanFeedback(){
		$data = array(
			'owner' => $this->input->post('owner'),
			'feedback' => $this->input->post('feedback') ,
			'id_murid' => $this->input->post('id_murid') , 
			// 'status' => $this->input->post('status_feedback') - kerjakan proses login dulu, butuh session status login 
			);

		$this->e_feedback->insertDataFeedback($data);
		redirect('c_feedback/lihatFeedback/'. $this->input->post('id_murid'),'refresh');
	}

}

/* End of file c_feedback.php */
/* Location: ./application/controllers/c_feedback.php */