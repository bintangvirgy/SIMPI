<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_otoritas extends CI_Model {

public function getOtoritasGuru($id_guru){
	$this->db->select('*');
	$this->db->from('otoritas');
	$this->db->where('otoritas.id_guru', $id_guru);
	$this->db->join('link_otoritas', 'link_otoritas.otoritas = otoritas.otoritas', 'left');
	$this->db->order_by('link_otoritas.otoritas', 'asc');

	$query = $this->db->get();
	if ($query->result()) {
		return $query->result();
	}else{
		return false;
	}
}

public function tambahOtoritas($data){
	$this->db->insert('otoritas', $data);
}

public function deleteOtoritas($id_otoritas){
	$this->db->where('id_otoritas', $id_otoritas);
	$this->db->delete('otoritas');
}

}

/* End of file e_otoritas.php */
/* Location: ./application/models/e_otoritas.php */