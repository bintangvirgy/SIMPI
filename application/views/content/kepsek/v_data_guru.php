<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>ID Guru</td>
		<td><?php echo $guru->id_guru ?></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td><?php echo $guru->nama_guru ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><?php
		if ($guru->jenis_kelamin == "L") {
			echo "Laki-laki";
		} else{
			echo "Perempuan";
		}
		?></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td><?php echo $guru->tempat_lahir ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><?php echo $guru->tanggal_lahir ?></td>
	</tr>
	<tr>
		<td>Status PNS</td>
		<td><?php
		if ($guru->status_pns == 1) {
			echo "PNS";
		} else{
			echo "Non-PNS";
		}
		?></td>
	</tr>
</table>
<?php echo anchor('c_loginGuru/cekIdGuru/'.$guru->id_guru, 'ID Login'); ?>
<br>
<?php echo anchor('c_otoritasGuru/lihatOtoritas/'.$guru->id_guru, 'Kelola Otoritas'); ?>
</body>
</html>