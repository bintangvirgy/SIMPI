<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_loginGuru/perbaruiIdLogin'); ?>
<input type="hidden" name="id_guru" value="<?php echo $guru->id_guru ?>" >
Username <br>
<input type="text" name="username" value="<?php echo $guru->username ?>">
<br> Password <br>
<input type="text" name="password" value="<?php echo $guru->password ?>">
<br>
<input type="submit" name="Ganti">
<?php echo form_close();?>
</body>
</html>