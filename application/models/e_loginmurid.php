<?php
class E_loginmurid extends CI_Model{

function login($username, $password){
    $this->db->select('*');
    $this->db->from('loginmurid');
    $this->db->where('username', $username);
    $this->db->having('password', $password);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}

function getLoginMuridAll(){
    $this->db->select('*');
    $this->db->from('loginmurid');

    $query = $this->db->get();
    return $query->result();
}

function getLoginMurid($username){
    $this->db->select('username');
    $this->db->from('loginmurid');
    $this->db->where('username', $username);

    $query = $this->db->get();
    return $query -> row();
}

function getDataIdLogin($id_murid){
    $this->db->select('*');
    $this->db->from('loginmurid');
    $this->db->where('id_murid', $id_murid);

    $query = $this->db->get();
    return $query->row();
}

function updateIdLogin($data, $where){
    $this->db->where('id_login', $where);
    $this->db->update('loginmurid', $data);
}

function deleteIdLogin($where){
    $this->db->where('id_murid', $where);
    $this->db->delete('loginmurid');
}

function tambahLogin($data){
    $this->db->insert('loginmurid', $data);
}
}
?>