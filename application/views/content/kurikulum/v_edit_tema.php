<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_tema/perbaruiDataTema'); ?>
<input type="hidden" name="id_tema" value="<?php echo $id_tema ?>">
<input type="text" name="tema" value="<?php echo $tema ?>">
<br>
<input type="text" name="tahun_ajaran" value="<?php echo $tahun_ajaran ?>">
<br>
<input type="text" name="semester" value="<?php echo $semester ?>">
<br>
<?php if ($status_terpakai == 1){?>
	<input type="radio" name="status_terpakai" value="0"> Belum Terpakai
	<br>
	<input type="radio" name="status_terpakai" value="1" checked> Sudah Terpakai
<?php
}elseif($status_terpakai == 0){?>
	<input type="radio" name="status_terpakai" value="0" checked> Belum Terpakai
	<br>
	<input type="radio" name="status_terpakai" value="1"> Sudah Terpakai
<?php
}
?>
<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</body>
</html>