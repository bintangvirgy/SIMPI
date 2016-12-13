<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php echo anchor('c_kelas/buatDataKelas', 'Tambah'); ?>
<?php if ($kelas) { ?>
	<table border="1">
		<tr>
			<th>Nama Kelas</th>
			<th>Kelompok Belajar</th>
			<th>Guru</th>
			<th>Kuota</th>
		</tr>

		<?php foreach ($kelas as $row) { ?>
			<tr>
				<td>
					<?php echo $row->kelas ?>
				</td>
				<td>
					<?php echo $row->kel_belajar ?>
				</td>
				<td>
					<?php echo $row->nama_guru ?>
					<?php if ($row->status_kelas == 1) { ?>
						<?php echo anchor('c_kelas/gantiGuruKelas/'.$row->id_kelas, '[+]'); ?>
					<?php } ?>
				</td>
				<td>
					<?php echo $row->kuota_maks ?>
					<?php if ($row->status_kelas == 1) { ?>
						<?php echo anchor('c_kelas/gantiKuotaKelas/'.$row->id_kelas, '[+]'); ?>
					<?php } ?>
				</td>
				<td>
					<?php if ($row->status_kelas == 1) { ?>
						<?php echo anchor('c_kelas/konfirmasiNonaktif/'.$row->id_kelas, 'Non Aktifkan Kelas'); ?>
					<?php } ?>
				</td>
			</tr>
		<?php } ?>
	</table>
<?php }else{
	echo "<br>Belum ada kelas yang terdaftar";
	} ?>
</body>
</html>