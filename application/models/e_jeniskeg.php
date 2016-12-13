<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_jeniskeg extends CI_Model {
private $id_jenis_keg;
private $jenis_kegiatan;

function setJenisKegiatan($jenis_kegiatan){ $this->jenis_kegiatan = $jenis_kegiatan; }

	public function getJenisKegAll(){
		$this->db->select('*');
		$this->db->from('jeniskegiatan');

		$query = $this->db->get();
		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}
	}	

	public function tambahJenisKeg(){
		$data = array(
			'jenis_kegiatan' => $this->jenis_kegiatan , 
			);
	
		$this->db->insert('jeniskegiatan', $data);
	}

	public function getJenisKeg($id_jenis_keg){
		$this->db->select('*');
		$this->db->where('id_jenis_keg', $id_jenis_keg);
		$this->db->from('jeniskegiatan');

		$query = $this->db->get();
		return $query->row();
	}

	public function updateJenisKeg($id_jenis_keg){
		$data = array(
			'jenis_kegiatan' => $this->jenis_kegiatan , 
			);

		$this->db->where('id_jenis_keg', $id_jenis_keg);
		$this->db->update('jeniskegiatan', $data);
	}

	public function deleteJenisKeg($id_jenis_keg){
		$this->db->where('id_jenis_keg', $id_jenis_keg);
		$this->db->delete('jeniskegiatan');
	}

}

/* End of file e_jeniskeg.php */
/* Location: ./application/models/e_jeniskeg.php */