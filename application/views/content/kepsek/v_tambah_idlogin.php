<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_loginGuru/tambahIdLogin'); ?>
<input type="hidden" name="id_guru" value="<?php echo $id_guru ?>">
Username <br>
<input type="text" name="username">
<br> Password <br>
<input type="text" name="password">
<br>
<input type="submit" name="Buat ID">
<?php echo form_close();?>
</body>
</html>