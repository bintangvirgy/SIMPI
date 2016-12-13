<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo anchor('c_otoritasGuru/buatOtoritas/'.$id_guru, 'Tambah'); ?>

<table border="1">
	<tr>
		<th>Otoritas</th>
		<th>Action</th>
	</tr>
	<?php
	if ($otoritas) {
		foreach ($otoritas as $row) {
		?>
		<tr>
			<td><?php
				if ($row->otoritas == 1) {
					echo "Kepala Sekolah";
				}elseif ($row->otoritas == 2) {
					echo "Bendahara";
				}elseif ($row->otoritas == 3) {
					echo "Humas";
				}elseif ($row->otoritas == 4) {
					echo "Kesiswaan";
				}elseif ($row->otoritas == 5) {
					echo "Kurikulum";
				}elseif ($row->otoritas == 6) {
					echo "Rekrutan";
				}elseif ($row->otoritas == 7) {
					echo "Sarana Prasarana";
				}
			?></td>
			<td>
				<?php echo anchor('c_otoritasGuru/konfirmasiHapus/'.$row->id_otoritas, 'Hapus'); ?>
			</td>
		</tr>
		<?php
	}
	}else{
		?>
		<tr>
			<td colspan="2">Belum ada otoritas</td>
		</tr>
		<?php
	}
	?>
</table>
</body>
</html>