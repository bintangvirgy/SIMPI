<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
if ($this->session->userdata('id_data') == 2){ ?>
	
	SELAMAT DATANG MURID BARUUUUU
	<?php echo anchor('c_pendaftaran/daftarBaru/'. $this->session->userdata('id_murid'), 'Isi Dokumen'); ?>

<?php
}
elseif ($this->session->userdata('id_data') == 1){ ?>
<?php
echo "</br>";
echo $murid->nim;
echo "</br>";
echo $murid->nama_lengkap;
echo "</br>";
echo $murid->nama_panggilan;
echo "</br>";
echo $murid->keterangan;
echo "</br>";
echo $waliayah->nama;
echo "</br>";
echo $waliibu->nama;
echo "</br>";
echo "</br>";

echo anchor('c_pendaftaran/gantiDaftar/'. $this->session->userdata('id_murid'), 'Edit');
echo "</br>";
echo anchor('c_pendaftaran/konfirmasiBatal/', 'Batal');
echo "</br>";
echo anchor('c_pendaftaran/cekVerifikasi/'. $this->session->userdata('id_murid'), 'Cek Verifikasi');
echo "</br>";
echo anchor('c_dokumenDaftar/lihatDokumen/'.$this->session->userdata('id_murid'), 'Lihat Dokumen');
echo "</br>";
echo anchor('c_feedback/lihatFeedback/'.$this->session->userdata('id_murid'), 'Lihat Feedback');;
?>
<?php
}
?>
</body>
</html>