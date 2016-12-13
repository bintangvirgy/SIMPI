<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_kelompokbelajar extends CI_Model {

private $id_kel_belajar;
private $kel_belajar;

public function getKelBelajarAll(){
	$this->db->select('*');
	$this->db->from('kelompokbelajar');

	$query = $this->db->get();

	return $query->result();
}

}

/* End of file e_kelompokbelajar.php */
/* Location: ./application/models/e_kelompokbelajar.php */