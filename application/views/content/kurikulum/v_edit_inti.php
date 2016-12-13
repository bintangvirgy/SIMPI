<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_kompetensi/perbaruiDataKI'); ?>
<input type="hidden" name="id_ki" value="<?php echo $id_ki ?>">
<br>
<input type="text" name="kodeki" value="<?php echo $kodeki ?>">
<br>
<textarea name="ki"><?php echo $ki ?></textarea>
<br>
<input type="text" name="tahun_ajaran" value="<?php echo $tahun_ajaran ?>">
<br>
<?php 
if ($status_terpakai == 0) {
?>
<input type="radio" name="status_terpakai" value="0" checked> Belum Terpakai
<br>
<input type="radio" name="status_terpakai" value="1"> Sudah Terpakai
<br>
<?php 
}elseif ($status_terpakai == 1) {
?>
<input type="radio" name="status_terpakai" value="0"> Belum Terpakai
<br>
<input type="radio" name="status_terpakai" value="1" checked> Sudah Terpakai
<br>
<?php 
}
?>
<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</body>
</html>