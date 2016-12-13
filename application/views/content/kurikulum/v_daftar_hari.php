<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<th>Senin</th>
		<th>Selasa</th>
		<th>Rabu</th>
		<th>Kamis</th>
		<th>Jumat</th>
		<th>Sabut</th>
		<th>Minggu</th>
	</tr>
	<tr>
		<?php 
		$tgl_minggu = "";
		foreach ($hari as $row) { ?>
			<td>
				<?php
				$tanggal_get = new DateTime($row->tanggal);
				$tgl_hari = $tanggal_get->format('d M y');
				echo anchor('c_RKH/lihatHari/'.$row->id_hari, $tgl_hari);

				$tgl_minggu = $row->tanggal;
				?>
			</td>
		<?php } ?>
		<td>
			<?php 
				$tanggal_get = new DateTime($tgl_minggu.'+ 1 day');
				$minggu = $tanggal_get->format('d M y');
				echo $minggu;
			?>
		</td>
	</tr>
</table>
</body>
</html>