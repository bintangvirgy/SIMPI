<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_murid extends CI_Model {
private $id_murid;
private $no_induk;
private $nama_lengkap;
private $nama_panggilan;
private $jenis_kelamin;
private $tempat_lahir;
private $tanggal_lahir;
private $agama;
private $alamat;
private $telp;
private $jumlah_saudara;
private $anak_ke;
private $warga_negara;
private $bahasa;
private $kesehatan;
private $kesehatan_desk;
private $khusus;
private $khusus_desk;
private $kebiasaan;
private $tinggal;
private $penghuni_dewasa;
private $penghuni_sebaya;
private $hub_ayah;
private $hub_ibu;
private $pergaulan_sebaya;
private $imunisasi;
private $status;


function setId_murid($id_murid) { $this->id_murid = $id_murid; }

function setNoInduk($no_induk) { $this->no_induk = $no_induk; }

function setNamaLengkap($nama_lengkap) { $this->nama_lengkap = $nama_lengkap; }

function setNamaPanggilan($nama_panggilan) { $this->nama_panggilan = $nama_panggilan; }

function setJenisKelamin($jenis_kelamin) { $this->jenis_kelamin = $jenis_kelamin; }

function setTempatLahir($tempat_lahir) { $this->tempat_lahir = $tempat_lahir; }

function setTanggalLahir($tanggal_lahir) { $this->tanggal_lahir = $tanggal_lahir; }

function setAgama($agama) { $this->agama = $agama; }

function setAlamat($alamat) { $this->alamat = $alamat; }

function setTelp($telp) { $this->telp = $telp; }

function setSaudara($jumlah_saudara) { $this->jumlah_saudara = $jumlah_saudara; }

function setAnakKe($anak_ke) { $this->anak_ke = $anak_ke; }

function setWargaNegara($warga_negara) { $this->warga_negara = $warga_negara; }

function setBahasa($bahasa) { $this->bahasa = $bahasa; }

function setKesehatan($kesehatan) { $this->kesehatan = $kesehatan; }

function setKesehatanDesk($kesehatan_desk) { $this->kesehatan_desk = $kesehatan_desk; }

function setKhusus($khusus) { $this->khusus = $khusus; }

function setKhususDesk($khusus_desk) { $this->khusus_desk = $khusus_desk; }

function setKebiasaan($kebiasaan) { $this->kebiasaan = $kebiasaan; }

function setTinggal($tinggal) { $this->tinggal = $tinggal; }

function setDewasa($penghuni_dewasa) { $this->penghuni_dewasa = $penghuni_dewasa; }

function setSebaya($penghuni_sebaya) { $this->penghuni_sebaya = $penghuni_sebaya; }

function setHubAyah($hub_ayah) { $this->hub_ayah = $hub_ayah; }

function setHubIbu($hub_ibu) { $this->hub_ibu = $hub_ibu; }

function setPergaulan($pergaulan_sebaya) { $this->pergaulan_sebaya = $pergaulan_sebaya; }

function setImunisasi($imunisasi) { $this->imunisasi = $imunisasi; }

function setStatus($status) { $this->status = $status; }


	public function getMuridAll(){
		$this->db->select('*, murid.id_murid');
		$this->db->from('murid');
		$this->db->join('pembelajaran', 'pembelajaran.id_murid = murid.id_murid', 'left');
		$this->db->join('kelas', 'kelas.id_kelas = pembelajaran.id_kelas', 'left');
		$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');
		$this->db->where('status !=', 8);
		$this->db->order_by('murid.nama_lengkap', 'asc');

		$query=$this->db->get();
		return $query->result();
	}

	public function getDataMurid($id_murid){
		$this->db->select('*');
		$this->db->where('id_murid', $id_murid);
		$this->db->from('murid');

		$query = $this->db->get();
		return $query->row();
	}

	public function getIdMurid(){
		$this->db->select('id_murid');
		$this->db->from('murid');
		$this->db->order_by('id_murid', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		return $query->row()->id_murid;
	}

	public function tambahNullMurid($data){
		$data = array(
			'id_murid' => $this->id_murid, 
			);
		
		$this->db->insert('murid', $data);
	}

	public function updateDataMurid($id_murid){
		$data = array(
			'no_induk' => $this->no_induk ,
			'nama_lengkap' => $this->nama_lengkap ,
			'nama_panggilan' => $this->nama_panggilan ,
			'jenis_kelamin' => $this->jenis_kelamin ,
			'tempat_lahir' => $this->tempat_lahir ,
			'tanggal_lahir' => $this->tanggal_lahir ,
			'agama' => $this->agama ,
			'alamat' => $this->alamat ,
			'telp' => $this->telp ,
			'jumlah_saudara' => $this->jumlah_saudara ,
			'anak_ke' => $this->anak_ke ,
			'warga_negara' => $this->warga_negara ,
			'bahasa' => $this->bahasa ,
			'kesehatan' => $this->kesehatan ,
			'kesehatan_desk' => $this->kesehatan_desk ,
			'khusus' => $this->khusus ,
			'khusus_desk' => $this->khusus_desk ,
			'kebiasaan' => $this->kebiasaan ,
			'tinggal' => $this->tinggal ,
			'penghuni_dewasa' => $this->penghuni_dewasa ,
			'penghuni_sebaya' => $this->penghuni_sebaya ,
			'hub_ayah' => $this->hub_ayah ,
			'hub_ibu' => $this->hub_ibu ,
			'pergaulan_sebaya' => $this->pergaulan_sebaya ,
			'imunisasi' => $this->imunisasi ,
			);

		$this->db->where('id_murid', $id_murid);
		$this->db->update('murid', $data);
	}

	public function updateMurid($id_murid){
		$data = array(
			'status' =>$this->status , 
			);

		$this->db->where('id_murid', $id_murid);
		$this->db->update('murid', $data);
	}
	
	public function delete($id_murid){
		$this->db->where('id_murid', $id_murid);
		$this->db->delete('murid');
	}

	public function setStatusMurid(){
		return 4;
	}

	public function getPendaftarAll(){
		$this->db->select('*');
		$this->db->from('murid');
		$this->db->where('status', 2);
		$this->db->or_where('status', 3);
		$this->db->or_where('status', 11);

		$query = $this->db->get();
		return $query->result();
	}

	public function getPendaftarBatal(){
		$this->db->select('*');
		$this->db->from('murid');
		$this->db->where('status', 4);

		$query = $this->db->get();
		return $query->result;
	}

	public function getStatusMurid($id_murid){
		$this->db->select('status');
		$this->db->where('id_murid', $id_murid);
		$this->db->from('murid');

		$query = $this->db->get();
		return $query->row()->status;
	}

	public function getUmur($id_murid){
		$this->db->select('tanggal_lahir');
		$this->db->where('id_murid', $id_murid);
		$this->db->from('murid');

		$query = $this->db->get();
		return $query->row()->tanggal_lahir;
	}

	public function getRiwayatKelas($id_murid){
		$this->db->select('kelas.kelas , kelompokbelajar.kel_belajar , kelompokbelajar.id_kel_belajar');
		$this->db->where('murid.id_murid', $id_murid);
		$this->db->from('murid');
		$this->db->join('pembelajaran', 'pembelajaran.id_murid = murid.id_murid', 'left');
		$this->db->join('kelas', 'kelas.id_kelas = pembelajaran.id_kelas', 'left');
		$this->db->join('kelompokbelajar', 'kelompokbelajar.id_kel_belajar = kelas.id_kel_belajar', 'left');

		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file m_data_murid.php */
/* Location: ./application/models/m_data_murid.php */