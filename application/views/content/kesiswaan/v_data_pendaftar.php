<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_verifpendaftaran/verifMurid');

echo "Nama Panggilan ".$murid->nama_panggilan;
echo "</br>";
echo "Nama Lengkap ".$murid->nama_lengkap;
echo "</br>";

if ($this->session->userdata('verifikasi') == 'yes') {
	if ($vmurid->verif == 1) {
		echo "Data murid masih belum diverifikasi";
		echo "</br>";
		echo $vmurid->keterangan;
	} else{
		echo "Data murid telah diverifikasi";
		echo "</br>";
		echo "Status sebelumnya adalah ".$murid->status;
	}	
}
echo "</br>";
echo "</br>";

echo "Keuangan <b>Belum</b>";
echo "</br>";
if ($this->session->userdata('verifikasi') == 'yes') {
	if ($vkeuangan->verif == 1) {
		echo "Data keuangan masih belum diverifikasi";
		echo "</br>";
		echo $vkeuangan->keterangan;
	} else{
		echo "Data keuangan telah diverifikasi";
		echo "</br>";
		echo "Status sebelumnya adalah . . . . . .";
	}	
}
echo "</br>";
echo "</br>";

echo "Nama Ayah ".$walimurid->nama_ayah;
echo "</br>";
echo "Nama Ibu ".$walimurid->nama_ibu;
echo "</br>";
echo "</br>";
if ($this->session->userdata('verifikasi') == 'yes') {
	if ($vwalimurid->verif == 1) {
		echo "Data wali murid masih belum diverifikasi";
		echo "</br>";
		echo $vwalimurid->keterangan;
	} else{
		echo "Data wali murid telah diverifikasi";
		echo "</br>";
		echo "Status sebelumnya adalah . . . . . .";
	}	
}

echo "</br>";
echo "</br>";

echo "Dokumen <b>Belum</b>";
echo "</br>";
if ($this->session->userdata('verifikasi') == 'yes') {
	if ($vdokumen->verif == 1) {
		echo "Data dokumen masih belum diverifikasi";
		echo "</br>";
		echo $vdokumen->keterangan;
	} else{
		echo "Data dokumen telah diverifikasi";
		echo "</br>";
		echo "Status sebelumnya adalah . . . . . .";
	}	
}
echo "</br>";

echo form_close(); ?>
</body>
</html>