<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_jeniskeg/perbaruiDataJenisKeg'); ?>
<input type="hidden" name="id_jenis_keg" value="<?php echo $id_jenis_keg ?>">
<input type="text" name="jenis_kegiatan" value="<?php echo $jenis_kegiatan ?>">
<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</body>
</html>