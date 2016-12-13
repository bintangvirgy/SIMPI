<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>Data Murid</td>
		<td>
			<?php 
				if ($vmurid->verif == 2) {
					echo "Sudah Terverifikasi";
				} elseif ($vmurid->verif == 1) {
					echo "Belum Terverifikasi";
				}
			?>
		</td>
	</tr>
	<tr>
		<td>Data Keuangan</td>
		<td>
			<?php 
				if ($vkeuangan->verif == 2) {
					echo "Sudah Terverifikasi";
				} elseif ($vkeuangan->verif == 1) {
					echo "Belum Terverifikasi";
				}
			?>
		</td>
	</tr>
	<tr>
		<td>Dokumen Murid</td>
		<td>
			<?php 
				if ($vdokumen->verif == 2) {
					echo "Sudah Terverifikasi";
				} elseif ($vdokumen->verif == 1) {
					echo "Belum Terverifikasi";
				}
			?>
		</td>
	</tr>
	<tr>
		<td>Wali Murid</td>
		<td>
			<?php 
				if ($vwalimurid->verif == 2) {
					echo "Sudah Terverifikasi";
				} elseif ($vwalimurid->verif == 1) {
					echo "Belum Terverifikasi";
				}
			?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<?php 
				echo $vmurid->keterangan. "</br>";
				echo $vkeuangan->keterangan. "</br>";
				echo $vdokumen->keterangan. "</br>";
				echo $vwalimurid->keterangan. "</br>";
			?>
		</td>
	</tr>
</table>
</body>
</html>