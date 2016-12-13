<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_idWaliMurid/hapusIdLogin'); ?>
	<table>
		<tr>
			<td>
			<input type="hidden" name="id_murid" value="<?php echo $murid->id_murid ?>"/>
				<input type="text" name="jwb">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="hapus?">
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>
</body>
</html>