<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_hari extends CI_Model {

private $id_hari;
private $id_subtema;
private $tanggal;

function setIdSubtema($id_subtema) { $this->id_subtema = $id_subtema; }

function setTanggal($tanggal) { $this->tanggal = $tanggal; }

	public function tambahHari(){
		$data = array(
			'id_subtema' => $this->id_subtema ,
			'tanggal' => $this->tanggal, 
			);

		$this->db->insert('hari', $data);
	}

	public function deleteHari($id_subtema){
		$this->db->where('id_subtema', $id_subtema);
		$this->db->delete('hari');
	}

	public function getHariDetailHari($id_hari){
		$this->db->select('*');
		$this->db->where('hari.id_hari', $id_hari);
		$this->db->from('hari');
		$this->db->join('detilkegharian', 'detilkegharian.id_hari = hari.id_hari', 'left');
		$this->db->join('jeniskegiatan', 'jeniskegiatan.id_jenis_keg = detilkegharian.id_jenis_keg', 'left');
		$this->db->order_by('jeniskegiatan.jenis_kegiatan', 'asc');
		$this->db->order_by('detilkegharian.urutan', 'asc');

		$query = $this->db->get();

		$this->db->select('count(*) as hari');
		$this->db->where('id_hari', $id_hari);
		$this->db->from('detilkegharian');
		$baris = $this->db->get();
		
		if ($baris->row()->hari > 0) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function getTanggalDetailHari($id_hari){
		$this->db->select('tanggal');
		$this->db->where('id_hari', $id_hari);
		$this->db->from('hari');

		$query = $this->db->get();
		return $query->row()->tanggal;
	}

	public function getSubtemaHari($id_hari){
		$this->db->select('*');
		$this->db->from('hari');
		$this->db->join('indisub', 'indisub.id_subtema = hari.id_subtema', 'left');
		$this->db->where('id_hari', $id_hari);

		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file e_hari.php */
/* Location: ./application/models/e_hari.php */