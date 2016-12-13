<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_pembelajaran extends CI_Model {

private $id_pembelajaran;
private $id_murid;
private $id_kelas;

function setIdMurid($id_murid) { $this->id_murid = $id_murid; }

function setIdKelas($id_kelas) { $this->id_kelas = $id_kelas; }

	public function getNilaiSemester($id_murid){
		$this->db->select('*');
		$this->db->from('nilai');
		$this->db->where('id_murid', $id_murid);

		$query = $this->db->get();
		return $query->row();
	}

	public function getRiwayatKelas($id_murid){
		$this->db->select('*');
		$this->db->where('id_murid', $id_murid);
		$this->db->from('pembelajaran');

		$query = $this->db->get();
		if ($query->row()) {
			return $query->row();
		}else{
			return false;
		}
	}

	public function tambahPembelajaran(){
		$data = array(
			'id_murid' => $this->id_murid ,
			'id_kelas' => $this->id_kelas , 
			);

		$this->db->insert('pembelajaran', $data);
	}

	public function getKelasTerakhir($id_murid){
		$this->db->select('kelas.id_kel_belajar');
		$this->db->where('pembelajaran.id_murid', $id_murid);
		$this->db->from('pembelajaran');
		$this->db->join('kelas', 'kelas.id_kelas = pembelajaran.id_kelas', 'left');

		$query = $this->db->get();
		return $query->row()->id_kel_belajar;
	}
	public function getKelasJumlahMurid($id_kel_belajar){
		$this->db->select('*, count(*) as kuota');
		$this->db->from('pembelajaran');
		$this->db->where('kelas.id_kel_belajar', $id_kel_belajar+1);
		$this->db->where('murid.status !=', 8);
		$this->db->join('kelas', 'kelas.id_kelas = pembelajaran.id_kelas', 'left');
		$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');
		$this->db->join('murid', 'murid.id_murid = pembelajaran.id_murid', 'left');
		$this->db->group_by('pembelajaran.id_kelas');

		$query = $this->db->get();
		return $query->result();
	}

	public function getKelasJumlahMuridAll(){
		$this->db->select('*, count(*) as kuota');
		$this->db->from('pembelajaran');
		$this->db->where('murid.status !=', 8);
		$this->db->join('kelas', 'kelas.id_kelas = pembelajaran.id_kelas', 'left');
		$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');
		$this->db->join('murid', 'murid.id_murid = pembelajaran.id_murid', 'left');
		$this->db->group_by('pembelajaran.id_kelas');

		$query = $this->db->get();
		return $query->result();
	}

	public function updatePembelajaran($id_murid){
		$data = array(
			'id_kelas' => $this->id_kelas , 
			);

		$this->db->where('id_murid', $id_murid);
		$this->db->update('pembelajaran', $data);
	}

}

/* End of file e_pembelajaran.php */
/* Location: ./application/models/e_pembelajaran.php */