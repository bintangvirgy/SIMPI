<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_otoritasGuru/tambahOtoritas'); ?>
<input type="hidden" name="id_guru" value="<?php echo $id_guru ?>">
<input type="radio" name="otoritas" value="2" checked> Bendahara<br>
<input type="radio" name="otoritas" value="3"> Humas<br>
<input type="radio" name="otoritas" value="4"> Kesiswaan<br>
<input type="radio" name="otoritas" value="5"> Kurikulum<br>
<input type="radio" name="otoritas" value="6"> Rekrutan<br>
<input type="radio" name="otoritas" value="7"> Sarana Prasarana<br>

<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>