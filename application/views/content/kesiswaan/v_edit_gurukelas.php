<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo 'Guru sebelumnya '.$nama_guru ?>
<br>
<?php echo form_open('c_kelas/perbaruiDataGuruKelas'); ?>
<select name="id_guru">
	<?php foreach ($guru as $row) { ?>
		<option value="<?php echo $row->id_guru ?>"><?php echo $row->nama_guru; ?></option>
	<?php } ?>
</select>

<input type="hidden" name="id_kelas" value="<?php echo $id_kelas ?>">
<input type="submit" value="Ganti guru">
<?php echo form_close(); ?>
</body>
</html>