<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo anchor('c_tema/buatDataSubtema', 'Tambah'); ?>

<?php if ($subtema){ ?>
	<table border="1">
		<tr>
			<th>Nama Subtema</th>
			<th>Action</th>
		</tr>
		<?php foreach ($subtema as $row): ?>
			<tr>
				<td>
					<?php echo anchor('c_tema/lihatIndikator/'.$row->id_subtema, $row->subtema); ?>
				</td>
				<td>
					<?php echo anchor('c_tema/gantiDataSubtema/'.$row->id_subtema, 'Ganti'); ?>
					<?php echo anchor('c_tema/konfirmasiHapusSub/'.$row->id_subtema, 'Hapus'); ?>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
<?php }else{
	echo "<br>Belum ada subtema pada kelompok belajar ini";
	} ?>
</body>
</html>