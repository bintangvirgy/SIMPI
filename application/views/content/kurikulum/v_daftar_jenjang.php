<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Nama Kelompok Belajar</th>
	</tr>
	<?php foreach ($jenjang as $row): ?>
	<tr>
		<td><?php echo anchor('c_RKH/lihatTemaSubtema/'.$row->id_kel_belajar, $row->kel_belajar); ?></td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>