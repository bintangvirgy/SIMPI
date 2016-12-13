<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_kompetensiinti extends CI_Model {
private $id_ki;
private $kodeki;
private $ki;
private $tahun_ajaran;
private $status_terpakai;

function setIdKI($id_ki){ $this->id_ki = $id_ki; }

function setKodeki($kodeki) {
	if ($kodeki == ''){
		$query = $this->db->query('select * from kompetensiinti');
		$this->kodeki = 'KI_'.($query->num_rows()+1);
	}else{
		$this->kodeki = $kodeki;
	}
}

function setKi($ki) { $this->ki = $ki; }

function setTahunAjaran($tahun_ajaran) { $this->tahun_ajaran = $tahun_ajaran; }

function setStatus($status_terpakai) { $this->status_terpakai = $status_terpakai; }


	public function getKINow(){
		$this->db->select('*, kompetensiinti.id_ki, kompetensidasar.id_kd, indikator.id_indikator');
		$this->db->from('kompetensiinti');
		$this->db->join('kompetensidasar', 'kompetensidasar.id_ki = kompetensiinti.id_ki', 'left');
		$this->db->join('indikator', 'indikator.id_kd = kompetensidasar.id_kd', 'left');
		$this->db->order_by('kompetensiinti.id_ki', 'asc');
		$this->db->order_by('kompetensidasar.id_kd', 'asc');
		$this->db->order_by('indikator.id_indikator', 'asc');

		$query = $this->db->get();

		if ($query->result()) {
			return $query->result();
		} else{
			return false;
		}
	}

	public function getDataKI($id_ki){
		$this->db->select('*');
		$this->db->where('id_ki', $id_ki);
		$this->db->from('kompetensiinti');

		$query = $this->db->get();

		return $query->row();
	}

	public function tambahKI(){
		$data = array(
			'kodeki' => $this->kodeki ,
			'ki' => $this->ki ,
			'tahun_ajaran' => $this->tahun_ajaran ,
			'status_terpakai' => $this->status_terpakai , 
			);

		$this->db->insert('kompetensiinti', $data);
	}

	public function updateKI($id_ki){
		$data = array(
			'kodeki' => $this->kodeki ,
			'ki' => $this->ki ,
			'tahun_ajaran' => $this->tahun_ajaran ,
			'status_terpakai' => $this->status_terpakai , 
			);

		$this->db->where('id_ki', $id_ki);
		$this->db->update('kompetensiinti', $data);
	}

	public function deleteKI($id_ki){
		$this->db->where('id_ki', $id_ki);
		$this->db->delete('kompetensiinti');
	}

	public function getTahunAjaranNow(){
		
	}

}

/* End of file e_kompetensiinti.php */
/* Location: ./application/models/e_kompetensiinti.php */