<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_alumni extends CI_Model {

private $id_alumni;
private $id_murid;
private $tahun_lulus;
private $sekolah_lanjutan;


function setIdMurid($id_murid) { $this->id_murid = $id_murid; }

function setTahunLulus($tahun_lulus) { $this->tahun_lulus = $tahun_lulus; }

function setSekolahLanjutan($sekolah_lanjutan) { $this->sekolah_lanjutan = $sekolah_lanjutan; }

	public function tambahAlumni(){
		$data = array(
			'id_murid' => $this->id_murid ,
			'tahun_lulus' => $this->tahun_lulus , 
			);

		$this->db->insert('alumni', $data);
	}
}

/* End of file e_alumni.php */
/* Location: ./application/models/e_alumni.php */