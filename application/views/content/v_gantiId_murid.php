<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_idWaliMurid/perbaruiIdLogin'); ?>
<table>
	<tr>
		<td>Username</td>
		<td>
		<input type="hidden" name="id_login" value="<?php echo $murid->id_login ?>"/>
		<input type="text" name="username" value="<?php echo $murid->username ?>"/>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" value="<?php echo $murid->password ?>" /></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" name="submit" value="Ganti">
		</td>
	</tr>
</table>
<?php echo form_close(); ?>
</body>
</html>