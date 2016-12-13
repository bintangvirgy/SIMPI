<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo anchor('c_bidangpengembangan/buatDataBP', 'Tambah<br>'); 
if ($BP) {
	?>
		<table border="1">
			<tr>
				<th>Bidang Pengembangan</th>
				<th>Action</th>
			</tr>
	<?php foreach ($BP as $row) {?>
			<tr>
				<td>
					<?php echo $row->bidang_pengembangan ?>
				</td>
				<td>
					<?php echo anchor('c_bidangpengembangan/gantiDataBP/'.$row->id_bidpeng, 'Ganti'); ?>
					<?php echo anchor('c_bidangpengembangan/konfirmasiHapus/'.$row->id_bidpeng, 'Hapus'); ?>
				</td>
			</tr>
	<?php
	}
?>
		</table>
<?php
}else{
	echo "Belum ada bidang pengembangan";
}
 ?>
</body>
</html>