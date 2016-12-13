<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_verifdokumen extends CI_Model {

	public function getVerifDok($id_murid){
		$this->db->select('*');
		$this->db->where('id_murid', $id_murid);
		$this->db->from('verifdokumen');

		$query = $this->db->get();
		return $query->row();
	}	

}

/* End of file e_verifdokumen.php */
/* Location: ./application/models/e_verifdokumen.php */