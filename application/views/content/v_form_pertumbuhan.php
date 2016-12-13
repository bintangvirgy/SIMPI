<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_pertumbuhan/tambahCatPertumbuhan'); ?>
<input type="hidden" name="id_murid" value="<?php echo $id_murid?>">
<input type="text" name="isi_pertumbuhan">
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>