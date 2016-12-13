<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_kelas/perbaruiDataKuotaKelas'); ?>
<input type="hidden" name="id_kelas" value="<?php echo $id_kelas ?>">
<input type="text" name="kuota_maks" value="<?php echo $kuota ?>">
<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</body>
</html>