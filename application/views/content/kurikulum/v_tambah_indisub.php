<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_tema/tambahIndikator'); ?>
<?php foreach ($indikator as $row): ?>
	<input type="checkbox" name="id_indi[]" value="<?php echo $row->id_indikator?>">
	<?php echo $row->kodeindi.' '.$row->indikator ?>
	<br>
<?php endforeach ?>
<input type="hidden" name="id_subtema" value="<?php echo $id_subtema ?>">
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>