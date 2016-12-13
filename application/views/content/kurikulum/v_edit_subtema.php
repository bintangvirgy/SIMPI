<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_tema/perbaruiDataSubtema'); ?>
<input type="hidden" name="id_subtema" value="<?php echo $id_subtema ?>">
<input type="text" name="subtema" value="<?php echo $subtema ?>">
<br>
<textarea name="muatan_materi"><?php echo $muatan_materi; ?></textarea>
<br>
<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</body>
</html>