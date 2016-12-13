<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo anchor('c_jeniskeg/buatDataJenisKeg', 'Tambah'); ?>
<?php if ($jeniskeg) { ?>
<table>
	<tr>
		<th>Jenis Kegiatan</th>
		<th>Action</th>
	</tr>

	<?php foreach ($jeniskeg as $row) { ?>
	<tr>
		<td><?php echo $row->jenis_kegiatan ?></td>
		<td>
			<?php echo anchor('c_jeniskeg/lihatDataJenisKeg/'.$row->id_jenis_keg, 'Ganti'); ?>
			<?php echo anchor('c_jeniskeg/konfirmasiHapus/'.$row->id_jenis_keg, 'Hapus'); ?>
		</td>
	</tr>
	<?php } ?>
</table>
<?php }else{
	echo "<br>Belum ada jenis kegiatan";
	} ?>
</body>
</html>