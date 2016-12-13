<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_dokumenMurid extends CI_Model {

	function getAll(){
		$this->db->select('*');
		$this->db->from('dokumenmurid');

		$query= $this->db->get();
		return $query->result();
	}

	function getDokumenMurid($id_murid){
		$this->db->select('*');
		$this->db->from('dokumenmurid');
		$this->db->where('id_murid', $id_murid);

		$query = $this->db->get();
		return $query->row();
	}

	function getDokumenAll($id_murid, $jenis_dok){
		$this->db->select('*');
		$this->db->from('dokumenmurid');
		$this->db->where('id_murid', $id_murid);
		$this->db->where('jenis_dokumen', $jenis_dok);

		$query = $this->db->get();
		if ($query) {
		    return $query->row();
		} else {
		    return false;
		}
	}

	function insertDokumen(){
		$data = array(
			'path' => $this->path,
			'id_murid' => $this->id_murid,
			'jenis_dokumen' => $this->jenis_dokumen,
			);

		$this->db->insert('dokumenmurid', $data);
	}

	function updateDokumen($id_murid, $data){
		$this->db->where('id_murid', $id_murid);
		$this->db->update('dokumenmurid', $data);
	}

	function hapusDokumen($id_murid){
		$this->db->where('id_murid', $id_murid);
		$this->db->delete('dokumenmurid');
	}

}

/* End of file e_dokumenMurid.php */
/* Location: ./application/models/e_dokumenMurid.php */