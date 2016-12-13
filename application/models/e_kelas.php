<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_kelas extends CI_Model {

private $id_kelas;
private $id_kel_belajar;
private $kelas;
private $tahun_ajaran;
private $kuota_maks;
private $id_guru;
private $status_kelas;

function setId_kelas($id_kelas) { $this->id_kelas = $id_kelas; }

function setKelBelajar($id_kel_belajar) { $this->id_kel_belajar = $id_kel_belajar; }

function setKelas($kelas) { $this->kelas = $kelas; }

function setTahunAjaran($tahun_ajaran) { $this->tahun_ajaran = $tahun_ajaran; }

function setKuota($kuota_maks) { $this->kuota_maks = $kuota_maks; }

function setIdGuru($id_guru) { $this->id_guru = $id_guru; }

function setStatusKelas($status_kelas) { $this->status_kelas = $status_kelas; }

	public function getKelasAll(){
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');
		$this->db->join('dataguru', 'dataguru.id_guru = kelas.id_guru', 'left');
		$this->db->order_by('kelas.status_kelas', 'desc');
		$this->db->order_by('kelompokbelajar.id_kel_belajar', 'asc');
		$this->db->order_by('kelas.kelas', 'asc');

		$query = $this->db->get();
		return $query->result();
	}

	public function tambahKelas(){
		$data = array(
			'id_kel_belajar' => $this->id_kel_belajar ,
			'kelas' => $this->kelas ,
			'tahun_ajaran' => $this->tahun_ajaran ,
			'kuota_maks' => $this->kuota_maks ,
			'id_guru' => $this->id_guru , 
			'status_kelas' => 1
			);

		$this->db->insert('kelas', $data);
	}

	public function getKuotaKelas($id_kelas){
		$this->db->select('kuota_maks');
		$this->db->where('id_kelas', $id_kelas);
		$this->db->from('kelas');

		$query = $this->db->get();
		return $query->row()->kuota_maks;
	}

	public function getJumlahMurid($id_kelas){
		$this->db->select('count(*) as jumlah');
		$this->db->where('id_kelas', $id_kelas);
		$this->db->from('pembelajaran');

		$query = $this->db->get();
		return $query->row()->jumlah;

	}

	public function updateKuota($id_kelas){
		$data = array(
			'kuota_maks' => $this->kuota_maks , 
			);

		$this->db->where('id_kelas', $id_kelas);
		$this->db->update('kelas', $data);
	}

	public function getGuruKelas($id_kelas){
		$this->db->select('dataguru.nama_guru');
		$this->db->where('kelas.id_kelas', $id_kelas);
		$this->db->from('kelas');
		$this->db->join('dataguru', 'dataguru.id_guru = kelas.id_guru', 'left');

		$query = $this->db->get();
		return $query->row()->nama_guru;
	}

	public function updateGuruKelas($id_kelas){
		$data = array(
			'id_guru' => $this->id_guru , 
			);

		$this->db->where('id_kelas', $id_kelas);
		$this->db->update('kelas', $data);
	}

	public function updateKelas($id_kelas){
		$data = array(
			'status_kelas' => $this->status_kelas , 
			);

		$this->db->where('id_kelas', $id_kelas);
		$this->db->update('kelas', $data);
	}

	public function getRekomKelas($umur){
		if ($umur == 2) { //playgroup A
			$this->db->select('*');
			$this->db->where('kelas.id_kel_belajar', 1);
			$this->db->where('kelas.status_kelas !=', 0);
			$this->db->from('kelas');
			$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');
			$this->db->order_by('kelas.kelas', 'asc');
		}elseif ($umur == 3) { //playgroup B
			$this->db->select('*');
			$this->db->where('kelas.id_kel_belajar', 2);
			$this->db->where('kelas.status_kelas !=', 0);
			$this->db->from('kelas');
			$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');
			$this->db->order_by('kelas.kelas', 'asc');
		}elseif ($umur == 4) { //TK A
			$this->db->select('*');
			$this->db->where('kelas.id_kel_belajar', 3);
			$this->db->where('kelas.status_kelas !=', 0);
			$this->db->from('kelas');
			$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');
			$this->db->order_by('kelas.kelas', 'asc');
		}elseif ($umur == 5) { //TK B
			$this->db->select('*');
			$this->db->where('kelas.id_kel_belajar', 4);
			$this->db->where('kelas.status_kelas !=', 0);
			$this->db->from('kelas');
			$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');
			$this->db->order_by('kelas.kelas', 'asc');
		}

		$query = $this->db->get();

		return $query->result();
	}
}

/* End of file e_kelas.php */
/* Location: ./application/models/e_kelas.php */