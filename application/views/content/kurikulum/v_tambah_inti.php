<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_kompetensi/tambahKI'); ?>
<textarea name="ki" placeholder="Kompetensi Inti"></textarea>
<br>
<input type="hidden" name="tahun_ajaran" value="<?php echo date('Y') ?>">
<br>
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>