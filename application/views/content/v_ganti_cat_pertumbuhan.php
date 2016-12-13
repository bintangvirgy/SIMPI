<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_pertumbuhan/perbaruiCatPertumbuhan'); ?>
<table>
	<tr>
		<td>Isi Catatan</td>
		<td>
			<input type="text" name="id_pertumbuhan" value="<?php echo $pertumbuhan->id_pertumbuhan?>">
			<input type="text" name="id_murid" value="<?php echo $pertumbuhan->id_murid?>">
			<input type="text" name="isi_pertumbuhan" value="<?php echo $pertumbuhan->isi_pertumbuhan?>">
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="Perbarui">
		</td>
	</tr>
</table>
<?php echo form_close(); ?>
</body>
</html>