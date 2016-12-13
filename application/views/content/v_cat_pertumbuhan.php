<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<?php foreach ($pertumbuhan as $row) : ?>
		<tr>
			<td><?php echo $row->isi_pertumbuhan; ?></td>
			<td><?php echo anchor('c_pertumbuhan/gantiCatPertumbuhan/'.$row->id_pertumbuhan, 'Ganti'); ?> </td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>