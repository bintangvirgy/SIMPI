<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_kompetensi/tambahIndikator'); ?>
<textarea name="indikator" placeholder="Indikator"></textarea>
<br>
<?php foreach ($BP as $row) {
?>
<input type="radio" name="id_bidpeng" value="<?php echo $row->id_bidpeng ?>"> <?php echo $row->bidang_pengembangan; ?>
<br>
<?php
} ?>
<input type="hidden" name="id_kd" value="<?php echo $kd->id_kd ?>">
<br>
<input type="hidden" name="kodekd" value="<?php echo $kd->kodekd ?>">
<br>
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>