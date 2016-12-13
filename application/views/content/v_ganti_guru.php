<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_profilGuru/perbaruiDataGuru'); ?>
	<input type="hidden" name="id_guru" value="<?php echo $guru->id_guru ?>">
	<table>
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama_guru" value="<?php echo $guru->nama_guru?>">		
			</td>
		</tr>
		<tr>
			<td><input type="Submit" value="Ganti"></td>
		</tr>
	</table>
<?php echo form_close(); ?>
</body>
</html>