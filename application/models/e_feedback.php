<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_feedback extends CI_Model {

	public function getFeedbackAll($id_murid){
		$this->db->select('*');
		$this->db->from('feedback');
		$this->db->where('id_murid', $id_murid);

		$query = $this->db->get();
		return $query->result();
	}

	public function insertDataFeedback($data){
		$this->db->insert('feedback', $data);
	}

}

/* End of file e_feedback.php */
/* Location: ./application/models/e_feedback.php */