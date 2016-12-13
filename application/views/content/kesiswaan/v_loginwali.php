<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo anchor('c_loginwalimurid/buatIdLogin', 'Tambah'); ?>

<table border="1">
	<tr>
		<th>Username</th>
		<th>ID</th>
		<th>Action</th>
	</tr>
	<?php 
	foreach ($idlogin as $row) {
	?>
	<tr>
		<td><?php echo $row->username ?></td>
		<td><?php echo $row->id_murid ?></td>
		<td>
			<?php echo anchor('c_loginwalimurid/gantiIdLogin/'.$row->id_murid, 'Lupa Pass / Ganti ID   '); ?>
			<?php echo anchor('c_loginwalimurid/konfirmasiHapus/'.$row->id_murid, 'Hapus'); ?>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>