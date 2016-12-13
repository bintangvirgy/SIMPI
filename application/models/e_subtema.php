<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_subtema extends CI_Model {

private $id_subtema;
private $id_tema;
private $id_kel_belajar;
private $subtema;
private $muatan_materi;
private $hari_mulai;
private $hari_selesai;
private $minggu;

function setId_subtema($id_subtema) { $this->id_subtema = $id_subtema; }

function setIdTema($id_tema) { $this->id_tema = $id_tema; }

function setIdKelBelajar($id_kel_belajar) { $this->id_kel_belajar = $id_kel_belajar; }

function setSubtema($subtema) { $this->subtema = $subtema; }

function setMateri($muatan_materi) { $this->muatan_materi = $muatan_materi; }

function setHariMulai($hari_mulai) { $this->hari_mulai = $hari_mulai; }

function setHariSelesai() { 
	$selesai = new DateTime($this->hari_mulai.'+ 6 day');
	$this->hari_selesai = $selesai->format('Y-m-d');
}

function setMinggu($minggu) { $this->minggu = $minggu; }

	public function getSubtemaAll($id_kel_belajar, $id_tema){
		$this->db->select('*');
		$this->db->where('id_kel_belajar', $id_kel_belajar);
		$this->db->where('id_tema', $id_tema);
		$this->db->from('subtema');

		$query = $this->db->get();

		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function tambahSubtema(){
		$data = array(
			'id_tema' => $this->id_tema ,
			'id_kel_belajar' => $this->id_kel_belajar ,
			'subtema' => $this->subtema ,
			'muatan_materi' => $this->muatan_materi ,
			'hari_mulai' => $this->hari_mulai ,
			'hari_selesai' => $this->hari_selesai ,
			'minggu' => $this->minggu , 
			);

		$this->db->insert('subtema', $data);
	}

	public function getIdSubtema(){
		$this->db->select('id_subtema');
		$this->db->from('subtema');
		$this->db->order_by('id_subtema', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		return $query->row()->id_subtema;
	}

	public function getSubtemaHariDetilHari($id_subtema){
		$this->db->select('hari_mulai');
		$this->db->where('id_subtema', $id_subtema);
		$this->db->from('subtema');

		$query = $this->db->get();
		if ($query->row()) {
			return $query->row()->hari_mulai;
		}else{
			return false;
		}
	}

	public function getSubtema($id_subtema){
		$this->db->select('*');
		$this->db->where('id_subtema', $id_subtema);
		$this->db->from('subtema');

		$query = $this->db->get();
		return $query->row();
	}
	
	public function updateSubtema($id_subtema){
		$data = array(
			'subtema' => $this->subtema ,
			'muatan_materi' => $this->muatan_materi, 
			);
	
		$this->db->where('id_subtema', $id_subtema);
		$this->db->update('subtema', $data);
	}

	public function deleteSubtema($id_subtema){
		$this->db->where('id_subtema', $id_subtema);
		$this->db->delete('subtema');
	}

	public function getTemaSubtemaHari($id_subtema){
		$this->db->select('*');
		$this->db->where('id_subtema', $id_subtema);
		$this->db->from('hari');

		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file e_subtema.php */
/* Location: ./application/models/e_subtema.php */