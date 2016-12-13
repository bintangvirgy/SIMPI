<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_pertumbuhan extends CI_Model {

	public function getDataCatPertumbuhanAll($id_murid){
		$this->db->select('*');
		$this->db->from('pertumbuhanmurid');
		$this->db->where('id_murid', $id_murid);

		$query = $this->db->get();
		return $query->result();
	}

	public function getDataCatPertumbuhan($id_pertumbuhan){
		$this->db->select('*');
		$this->db->from('pertumbuhanmurid');
		$this->db->where('id_pertumbuhan', $id_pertumbuhan);

		$query = $this->db->get();
		return $query->row();
	}

	public function tambahCatPertumbuhan($data){
		$this->db->insert('pertumbuhanmurid', $data);
	}

	public function updateCatPertumbuhan($data, $where){
		$this->db->where('id_pertumbuhan', $where);
		$this->db->update('pertumbuhanmurid', $data);
	}

}

/* End of file e_pertumbuhan.php */
/* Location: ./application/models/e_pertumbuhan.php */