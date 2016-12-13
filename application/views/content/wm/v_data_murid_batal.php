<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo anchor('c_pendaftaran/batalDaftar/'. $this->session->userdata('id_murid'), 'Batal Daftar'); ?>
<?php echo anchor('c_pendaftaran/tidakBatal/'. $this->session->userdata('id_murid'), 'Tidak Batal'); ?>
</body>
</html>