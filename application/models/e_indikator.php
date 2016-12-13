<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_indikator extends CI_Model {
private $id_indikator;
private $kodeindi;
private $id_kd;
private $indikator;
private $id_bidpeng;

function setIdIndikator($id_indikator) { $this->id_indikator = $id_indikator; }

function setIdKI($id_ki){ $this->id_ki = $id_ki; }

function setIdKD($id_kd) { $this->id_kd = $id_kd; }

function setKodeindi($kodekd, $id) {
	if ($id == 0) {
		$query = $this->db->query('select * from indikator where id_kd='.$this->id_kd);
		$this->kodeindi = $kodekd.'.'.($query->num_rows()+1);
	}else{
		$this->kodeindi = $kodekd;
	}
}

function setIndikator($indikator) { $this->indikator = $indikator; }

function setIdBidpeng($id_bidpeng) { $this->id_bidpeng = $id_bidpeng; }


	function tambahIndi(){
		$data = array(
			'kodeindi' => $this->kodeindi ,
			'id_kd' => $this->id_kd ,
			'indikator' => $this->indikator , 
			'id_bidpeng' => $this->id_bidpeng , 
			);

		$this->db->insert('indikator', $data);
	}

	function getIndikator($id_indikator){
		$this->db->select('*');
		$this->db->where('id_indikator', $id_indikator);
		$this->db->from('indikator');

		$query = $this->db->get();
		return $query->row();
	}

	function updateDataIndikator($id_indikator){
		$data = array(
			'indikator' => $this->indikator ,
			'id_bidpeng' => $this->id_bidpeng , 
			);

		$this->db->where('id_indikator', $id_indikator);
		$this->db->update('indikator', $data);
	}

	function deleteIndikator($id_indikator){
		$this->db->where('id_indikator', $id_indikator);
		$this->db->delete('indikator');
	}

	function deleteIndiKD($id_kd){
		$this->db->where('id_kd', $id_kd);
		$this->db->delete('indikator');
	}

	function deleteIndikatorKI($id_ki){
		$query = $this->db->query('select * from kompetensidasar where id_ki='.$id_ki);
		$data = $query->result();
		
		foreach ($data as $row) {
			$this->db->where('id_kd', $row->id_kd);
			$this->db->delete('indikator');
		}
	}

	function getIndikatorFilter($array , $id){
		if ($id == 1) { //filter
			$this->db->select('*');
			
			foreach ($array['id_indikator'] as $row) {
				$this->db->where('id_indikator !=', $row->id_indikator);
			}

			$this->db->from('indikator');

			$query = $this->db->get();
			return $query->result();
		}else{ //tidak difilter
			$this->db->select('*');
			$this->db->from('indikator');

			$query = $this->db->get();
			return $query->result();
		}
	}

}

/* End of file e_indikator.php */
/* Location: ./application/models/e_indikator.php */