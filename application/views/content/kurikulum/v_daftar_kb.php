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
	<?php foreach ($KB as $row): ?>
	<tr>
		<td><?php echo anchor('c_tema/lihatSubtema/'.$row->id_kel_belajar, $row->kel_belajar); ?></td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>