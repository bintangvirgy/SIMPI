<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo anchor('c_tema/buatDataTema', 'Tambah'); ?>
<?php if ($tema){ ?>
	<table border="1">
		<tr>
			<th>Nama Tema</th>
			<th>Action</th>	
		</tr>
			<?php foreach ($tema as $row): ?>
				<tr>
					<td>
						<?php echo anchor('c_tema/lihatDataKelBelajar/'.$row->id_tema, $row->tema); ?>
					</td>
					<td>
						<?php echo anchor('c_tema/gantiDataTema/'.$row->id_tema, 'Ganti'); ?>
						<?php echo anchor('c_tema/konfirmasiHapus/'.$row->id_tema, 'Hapus'); ?>
					</td>
				</tr>
			<?php endforeach ?>

	</table>
<?php
}else{
	echo "<br>Belum ada tema";
} ?>
</body>
</html>