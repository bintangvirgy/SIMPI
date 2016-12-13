<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_kompetensidasar extends CI_Model {
private $id_kd;
private $kodekd;
private $id_ki;
private $kd;

function setIdKD($id_kd) { $this->id_kd = $id_kd; }

function setIdki($id_ki) { $this->id_ki = $id_ki; }

function setKodekd($kodeki, $id) {

	if ($id == 0) {
		$long = $this->db->query('select * from kompetensiinti');
		$counter = $long->num_rows()+1;
		$par = 1;
		$kode = 0;

		while ( $par <= $counter) {
			if($kodeki == 'KI_'.$par){
				$kode = $par;
			}
			$par++;

		}
		$query = $this->db->query('select * from kompetensidasar where id_ki='.$this->id_ki);
		$this->kodekd = $kode.'.'.($query->num_rows()+1);
	}else{
		$this->kodekd = $kodekd;
	}
	
}


function setKd($kd) { $this->kd = $kd; }

	function tambahKD(){
		$data = array(
			'kodekd' => $this->kodekd,
			'id_ki' =>$this->id_ki ,
			'kd' => $this->kd, 
			);

		$this->db->insert('kompetensidasar', $data);
	}

	function getKD($id_kd){
		$this->db->select('*');
		$this->db->where('id_kd', $id_kd);
		$this->db->from('kompetensidasar');

		$query = $this->db->get();

		return $query->row();
	}

	function updateKD($id_kd){
		$data = array(
			'kd' => $this->kd , 
			);

		$this->db->where('id_kd', $id_kd);
		$this->db->update('kompetensidasar', $data);
	}

	function deleteKD($id_kd){
		$this->db->where('id_kd', $id_kd);
		$this->db->delete('kompetensidasar');
	}

	function deleteKDKI($id_ki){
		$this->db->where('id_ki', $id_ki);
		$this->db->delete('kompetensidasar');
	}

}

/* End of file e_kompetensidasar.php */
/* Location: ./application/models/e_kompetensidasar.php */