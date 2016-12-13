<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_bidangpengembangan extends CI_Model {

private $id_bidpeng;
private $bidang_pengembangan;

function setId_bidpeng($id_bidpeng) { $this->id_bidpeng = $id_bidpeng; }

function setBidangPengembangan($bidang_pengembangan) { $this->bidang_pengembangan = $bidang_pengembangan; }

	function getBPAll(){
		$this->db->select('*');
		$this->db->from('bidangpengembangan');

		$query = $this->db->get();

		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}
	}

	function tambahBP(){
		$data = array(
			'bidang_pengembangan' => $this->bidang_pengembangan , 
			);

		$this->db->insert('bidangpengembangan', $data);
	}

	function getBidPengembangan($id_bidpeng){
		$this->db->select('*');
		$this->db->where('id_bidpeng', $id_bidpeng);
		$this->db->from('bidangpengembangan');

		$query = $this->db->get();

		return $query->row();
	}

	function updateBP($id_bidpeng){
		$data = array(
			'bidang_pengembangan' => $this->bidang_pengembangan , 
			);

		$this->db->where('id_bidpeng', $id_bidpeng);
		$this->db->update('bidangpengembangan', $data);
	}

}

/* End of file e_bidangpengembangan.php */
/* Location: ./application/models/e_bidangpengembangan.php */