<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_verifmurid extends CI_Model {

	public function getVerifMurid($id_murid){
		$this->db->select('*');
		$this->db->where('id_murid', $id_murid);
		$this->db->where('jenis_verif', 1);
		$this->db->from('verifmurid');

		$query = $this->db->get();
		return $query->row();
	}

	public function getVerifKeuangan($id_murid){
		$this->db->select('*');
		$this->db->where('id_murid', $id_murid);
		$this->db->where('jenis_verif', 2);
		$this->db->from('verifmurid');

		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file e_verifmurid.php */
/* Location: ./application/models/e_verifmurid.php */