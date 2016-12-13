<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_DataGuru extends CI_Model {

	public function getGuruAll(){
		$this->db->select('*');
		$this->db->from('dataguru');

		$query=$this->db->get();
		return $query->result();
	}

	public function getGuru($id_guru){
		$this->db->select('*');
		$this->db->from('dataguru');
		$this->db->where('id_guru', $id_guru);

		$query=$this->db->get();
		return $query->row();
	}

	public function tambahGuru($data){
		$this->db->insert('dataguru', $data);
	}

	public function updateGuru($id_guru, $data){
		$this->db->where('id_guru', $id_guru);
		$this->db->update('dataguru', $data);
	}
	
	public function deleteGuru($id_guru){
		$this->db->where('id_guru', $id_guru);
		$this->db->delete('dataguru');
	}

}

/* End of file e_guru.php */
/* Location: ./application/models/e_guru.php */