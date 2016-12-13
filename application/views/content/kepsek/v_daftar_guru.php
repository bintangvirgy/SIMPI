<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo anchor('c_dataguru/buatDataGuru', 'Tambah'); ?>

<table border="1">
	<tr>
		<th>Nama Guru</th>
		<th>Status PNS</th>
		<th>Action</th>
	</tr>
	<?php 
	foreach ($guru as $row) {
	?>
	<tr>
		<td><?php echo anchor('c_dataguru/lihatDataGuru/'. $row->id_guru, $row->nama_guru); ?></td>
		<td><?php if ($row->status_pns == 1) {
			echo "PNS";
		}else{
			echo "Bukan PNS";
		}
		?></td>
		<td>
			<?php echo anchor('c_dataGuru/gantiDataGuru/'.$row->id_guru, 'Ganti'); ?>
			<?php echo anchor('c_dataGuru/konfirmasiHapus/'.$row->id_guru, 'Hapus'); ?>
		</td>
	</tr>
	<?php
	}
	?>
</body>
</html>