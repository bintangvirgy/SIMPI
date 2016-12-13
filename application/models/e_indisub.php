<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_indisub extends CI_Model {

private $id_indisub;
private $id_indikator;
private $id_subtema;
private $id_detilhari;

function setId_indisub($id_indisub) { $this->id_indisub = $id_indisub; }

function setIdIndikator($id_indikator) { $this->id_indikator = $id_indikator; }

function setIdSubtema($id_subtema) { $this->id_subtema = $id_subtema; }

function setIdDetilhari($id_detilhari) { $this->id_detilhari = $id_detilhari; }

	
	public function getIndisubAll($id_subtema){
		$this->db->select('*');
		$this->db->where('id_subtema', $id_subtema);
		$this->db->from('indisub');
		$this->db->join('indikator', 'indikator.id_indikator = indisub.id_indikator', 'left');
		$this->db->order_by('indikator.kodeindi', 'asc');

		$query = $this->db->get();
		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function getIdIndi($id_subtema){
		$this->db->select('id_indikator');
		$this->db->where('id_subtema', $id_subtema);
		$this->db->from('indisub');

		$query = $this->db->get();
		if ($query->result()) {
			return $query->result();
		}else{
			return false;
		}

	}

	public function tambahIndiSub(){
		$data = array(
			'id_indikator' => $this->id_indikator ,
			'id_subtema' => $this->id_subtema 
			);

		$this->db->insert('indisub', $data);
	}

	public function deleteIndikator($id_indisub){
		$this->db->where('id_indisub', $id_indisub);
		$this->db->delete('indisub');
	}

	public function getIndikatorSubtema($id_subtema){
		$this->db->select('*');
		$this->db->from('indisub');
		$this->db->join('indikator', 'indikator.id_indikator = indisub.id_indikator', 'left');
		$this->db->where('id_subtema', $id_subtema);
		$this->db->where('id_detilhari', NULL);

		$query = $this->db->get();
		return $query->result();
	}

	public function nullDetilhari($id_detilhari){
		$data = array(
			'id_detilhari' => NULL , 
			);

		$this->db->where('id_detilhari', $id_detilhari);
		$this->db->update('indisub', $data);
	}

	public function updateIndiSub($id_indisub){
		$data = array(
			'id_detilhari' => $this->id_detilhari , 
			);

		$this->db->where('id_indisub', $id_indisub);
		$this->db->update('indisub', $data);
	}

}

/* End of file e_indisub.php */
/* Location: ./application/models/e_indisub.php */