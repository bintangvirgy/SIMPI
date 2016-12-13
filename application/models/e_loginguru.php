<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_loginguru extends CI_Model {

	function login($username, $password){
	    $this->db->select('*');
	    $this->db->from('loginguru');
	    $this->db->where('username', $username);
	    $this->db->having('password', $password);

	    $query = $this->db->get();
	    if ($query->num_rows() > 0) {
	        return $query->row();
	    } else {
	        return false;
	    }
	}

	function getLoginGuru($id_guru){
		$this->db->select('id_login');
		$this->db->from('loginguru');
		$this->db->where('id_guru', $id_guru);

		$query = $this->db->get();

		if ($query->row()) {
			return true;
		}
		else{
			return false;
		}
	}

	function getLoginGuruAll($username){
		$this->db->select('username');
		$this->db->from('loginguru');
		$this->db->where('username', $username);

		$query = $this->db->get();

		if ($query->row()) {
			return false;
		}
		else{
			return true;
		}
	}

	function tambahLogin($data){
		$this->db->insert('loginguru', $data);
	}

	function getDataLogin($id_guru){
		$this->db->select('*');
		$this->db->from('loginguru');
		$this->db->where('id_guru', $id_guru);

		$query = $this->db->get();
		return $query->row();
	}

	function updateLogin($id_guru, $data){
		$this->db->where('id_guru', $id_guru);
		$this->db->update('loginguru', $data);
	}

}

/* End of file e_loginguru.php */
/* Location: ./application/models/e_loginguru.php */