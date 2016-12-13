<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_verifwali extends CI_Model {

	public function getVerifWali($id_murid){
		$this->db->select('*');
		$this->db->where('id_murid', $id_murid);
		$this->db->from('verifmurid');

		$query = $this->db->get();
		return $query->row();
	}	

}

/* End of file e_verifwali.php */
/* Location: ./application/models/e_verifwali.php */