<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_tema extends CI_Model {

private $id_tema;
private $tema;
private $tahun_ajaran;
private $semester;
private $status_terpakai;

function setId_tema($id_tema) { $this->id_tema = $id_tema; }

function setTema($tema) { $this->tema = $tema; }

function setTahunAjaran($tahun_ajaran) { $this->tahun_ajaran = $tahun_ajaran; }

function setSemester($semester) { $this->semester = $semester; }

function setStatus($status_terpakai) { $this->status_terpakai = $status_terpakai; }


	public function getTemaAll(){
		$this->db->select('*');
		$this->db->from('tema');

		$query = $this->db->get();

		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function tambahTema(){
		$data = array(
			'tema' => $this->tema ,
			'tahun_ajaran' => $this->tahun_ajaran ,
			'semester' => $this->semester ,
			'status_terpakai' => $this->status_terpakai , 
			);

		$this->db->insert('tema', $data);
	}

	public function getTemaSubtema($id_tema){
		$this->db->select('*');
		$this->db->where('id_tema', $id_tema);
		$this->db->from('subtema');

		$query = $this->db->get();

		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function getTema($id_tema){
		$this->db->select('*');
		$this->db->where('id_tema', $id_tema);
		$this->db->from('tema');

		$query = $this->db->get();
		return $query->row();
	}

	public function updateTema($id_tema){
		$data = array(
			'tema' => $this->tema ,
			'tahun_ajaran' => $this->tahun_ajaran ,
			'semester' => $this->semester ,
			'status_terpakai' => $this->status_terpakai , 
			);

		$this->db->where('id_tema', $id_tema);
		$this->db->update('tema', $data);
	}

	public function deleteTema($id_tema){
		$this->db->where('id_tema', $id_tema);
		$this->db->delete('tema');
	}

	public function getTA(){
		$this->db->select('tahun_ajaran');
		$this->db->from('tema');
		$this->db->group_by('tahun_ajaran');

		$query = $this->db->get();
		return $query->result();
	}

	public function getTemaSubRKH($id_kel_belajar){
		$this->db->select('*');
		$this->db->where('id_kel_belajar', $id_kel_belajar);
		$this->db->from('subtema');
		$this->db->join('tema', 'tema.id_tema = subtema.id_tema', 'left');
		$this->db->order_by('tema.tema', 'asc');
		$this->db->order_by('subtema.subtema', 'asc');

		$query = $this->db->get();
		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function getTemaSubtemaTA($tahun_ajaran, $id_kel_belajar){
		$this->db->select('*');
		$this->db->where('id_kel_belajar', $id_kel_belajar);
		$this->db->where('tahun_ajaran', $tahun_ajaran);
		$this->db->from('tema');
		$this->db->join('subtema', 'subtema.id_tema = tema.id_tema', 'left');
		$this->db->order_by('tema.tema', 'asc');
		$this->db->order_by('subtema.subtema', 'asc');

		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file e_tema.php */
/* Location: ./application/models/e_tema.php */