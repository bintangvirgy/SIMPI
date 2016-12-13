<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_kompetensi/perbaruiDataKD'); ?>
<input type="hidden" name="id_kd" value="<?php echo $id_kd ?>">
<input type="text" name="kodekd" value="<?php echo $kodekd ?>">
<textarea name="kd"><?php echo $kd ?></textarea>
<br>
<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</body>
</html>