<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_detilhari extends CI_Model {

private $id_detilhari;
private $id_hari;
private $id_jenis_keg;
private $urutan;
private $kegiatan;
private $media;
private $durasi;

function setId_detilhari($id_detilhari) { $this->id_detilhari = $id_detilhari; }

function setIdHari($id_hari) { $this->id_hari = $id_hari; }

function setIdJenisKeg($id_jenis_keg) { $this->id_jenis_keg = $id_jenis_keg; }

function setUrutan($urutan) { $this->urutan = $urutan; }

function setKegiatan($kegiatan) { $this->kegiatan = $kegiatan; }

function setMedia($media) { $this->media = $media; }

function setDurasi($durasi) { $this->durasi = $durasi; }


	public function getDetilHari($id_jenis_keg){
		$this->db->select('*');
		$this->db->where('id_jenis_keg', $id_jenis_keg);
		$this->db->from('detilkegharian');

		$query = $this->db->get();
		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function tambahDetilHari(){
		$data = array(
			'id_hari' => $this->id_hari ,
			'id_jenis_keg' => $this->id_jenis_keg ,
			'urutan' => $this->urutan ,
			'kegiatan' => $this->kegiatan ,
			'media' => $this->media ,
			'durasi' => $this->durasi , 
			);

		$this->db->insert('detilkegharian', $data);
	}

	public function getIdDetilHari(){
		$this->db->select('id_detilhari');
		$this->db->from('detilkegharian');
		$this->db->order_by('id_detilhari', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		return $query->row()->id_detilhari;
	}

	public function getDetilHariIndiSub($id_detilhari){
		$this->db->select('*');
		$this->db->from('detilkegharian');
		$this->db->join('indisub', 'indisub.id_detilhari = detilkegharian.id_detilhari', 'left');
		$this->db->join('indikator', 'indikator.id_indikator = indikator.id_indikator', 'left');
		$this->db->where('detilkegharian.id_detilhari', $id_detilhari);

		$query = $this->db->get();
		return $query->row();
	}

	public function updateDetilHari($id_detilhari){
		$data = array(
			'id_jenis_keg' => $this->id_jenis_keg ,
			'urutan' => $this->urutan ,
			'kegiatan' => $this->kegiatan ,
			'media' => $this->media ,
			'durasi' => $this->durasi , 
			);

		$this->db->where('id_detilhari', $id_detilhari);
		$this->db->update('detilkegharian', $data);
	}

	public function deleteDetilHari($id_detilhari){
		$this->db->where('id_detilhari', $id_detilhari);
		$this->db->delete('detilkegharian');
	}

}

/* End of file e_detilhari.php */
/* Location: ./application/models/e_detilhari.php */