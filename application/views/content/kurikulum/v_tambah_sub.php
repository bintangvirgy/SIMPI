<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_tema/tambahSubtema'); ?>
<input type="text" name="subtema" placeholder="Subtema">
<br>
<textarea name="muatan_materi" placeholder="Muatan materi"></textarea>
<br>
<input type="date" name="hari_mulai">
<br>
<input type="text" name="minggu" placeholder="Minggu">
<br>
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>