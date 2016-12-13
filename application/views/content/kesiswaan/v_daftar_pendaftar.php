<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php foreach ($pendaftar as $row): ?>
	<table>
		<tr>
			<td>Nama</td>
			<td><?php echo anchor('c_verifpendaftaran/lihatDataPendaftar/'. $row->id_murid, $row->nama_panggilan); ?></td>
		</tr>
	</table>
<?php endforeach ?>
</body>
</html>