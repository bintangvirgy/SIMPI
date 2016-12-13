<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Unggah Dokumen</h2>
<?php echo form_open_multipart('index.php/c_dokumenDaftar/unggahDokumen'); ?>
<input type="file" name="userfile" size="20">
<input type="submit" value="upload">
<?php echo form_close(); ?>
</body>
</html>