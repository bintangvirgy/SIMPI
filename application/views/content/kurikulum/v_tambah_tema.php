<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_tema/tambahTema'); ?>
<input type="text" name="tema" placeholder="Nama Tema">
<br>
<input type="text" name="semester" placeholder="Semester">
<br>
<input type="hidden" name="tahun_ajaran" value="<?php echo date('Y') ?>">
<br>
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>