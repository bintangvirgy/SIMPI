<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_walimurid extends CI_Model {

private $id_murid;
private $nama;
private $tempat_lhr;
private $tanggal_lhr;
private $agama;
private $telp;
private $pendidikan;
private $pekerjaan;
private $penghasilan;
private $kantor;
private $warga_negara;
private $jenis_wali;


function setId_murid($id_murid) { $this->id_murid = $id_murid; }

function setNama($nama) { $this->nama = $nama; }

function setTempat_lhr($tempat_lhr) { $this->tempat_lhr = $tempat_lhr; }

function setTanggal_lhr($tanggal_lhr) { $this->tanggal_lhr = $tanggal_lhr; }

function setAgama($agama) { $this->agama = $agama; }

function setTelp($telp) { $this->telp = $telp; }

function setPendidikan($pendidikan) { $this->pendidikan = $pendidikan; }

function setPekerjaan($pekerjaan) { $this->pekerjaan = $pekerjaan; }

function setPenghasilan($penghasilan) { $this->penghasilan = $penghasilan; }

function setKantor($kantor) { $this->kantor = $kantor; }

function setWarga_negara($warga_negara) { $this->warga_negara = $warga_negara; }

function setJenis_wali($jenis_wali) { $this->jenis_wali = $jenis_wali; }


	public function get_all(){
		$this->db->select('*');
		$this->db->from('walimurid');

		$query=$this->db->get();
		return $query->result();
	}

	public function getWaliMurid($id_murid, $jenis_wali){
		$this->db->select('*');
		$this->db->from('walimurid');
		$this->db->where('id_murid', $id_murid);
		$this->db->where('jenis_wali', $jenis_wali);

		$query=$this->db->get();
		return $query->row();
	}

	public function getWaliMuridAll($id_murid){
		$this->db->select('*');
		$this->db->from('walimurid');
		$this->db->where('id_murid', $id_murid);

		$query=$this->db->get();
		return $query->result();
	}

	public function insertDataWaliMurid($data){
		$data = array(
			'id_murid' => $this->id_murid,
			'nama' => $this->nama,
			'tempat_lhr' => $this->tempat_lhr,
			'tanggal_lhr' => $this->tanggal_lhr,
			'agama' => $this->agama,
			'telp' => $this->telp,
			'pendidikan' => $this->pendidikan,
			'pekerjaan' => $this->pekerjaan,
			'penghasilan' => $this->penghasilan,
			'kantor' => $this->kantor,
			'warga_negara' => $this->warga_negara,
			'jenis_wali' => $this->jenis_wali,
			);

		$this->db->insert('walimurid', $data);
	}

	public function updateDataWaliMurid($id_murid, $jenis_wali){
		$data = array(
			'nama' => $this->nama,
			'tempat_lhr' => $this->tempat_lhr,
			'tanggal_lhr' => $this->tanggal_lhr,
			'agama' => $this->agama,
			'telp' => $this->telp,
			'pendidikan' => $this->pendidikan,
			'pekerjaan' => $this->pekerjaan,
			'penghasilan' => $this->penghasilan,
			'kantor' => $this->kantor,
			'warga_negara' => $this->warga_negara,
			);

		$this->db->where('id_murid', $id_murid);
		$this->db->where('jenis_wali', $jenis_wali);
		$this->db->update('walimurid', $data);
	}
	
	public function delete($id_murid){
		$this->db->where('id_murid', $id_murid);
		$this->db->delete('walimurid');
	}

}

/* End of file e_walimurid.php */
/* Location: ./application/models/e_walimurid.php */