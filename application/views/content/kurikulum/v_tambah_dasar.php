<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_kompetensi/tambahKD'); ?>
<textarea name="kd" placeholder="Kompetensi Dasar"></textarea>
<br>
<input type="hidden" name="id_ki" value="<?php echo $ki->id_ki ?>">
<br>
<input type="hidden" name="kodeki" value="<?php echo $ki->kodeki ?>">
<br>
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>