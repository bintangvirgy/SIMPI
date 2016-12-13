<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_kompetensi/perbaruiDataIndikator'); ?>
<input type="hidden" name="id_indikator" value="<?php echo $indikator->id_indikator ?>">
<input type="text" name="kodeindi" value="<?php echo $indikator->kodeindi ?>">
<textarea name="indikator"><?php echo $indikator->indikator ?></textarea>
<br>
<?php foreach ($BP as $row) {
?>
<input type="radio" name="id_bidpeng" value="<?php echo $row->id_bidpeng ?>"
<?php
if ($row->id_bidpeng == $indikator->id_bidpeng) {
	echo "checked";
}
?>
>
<?php echo $row->bidang_pengembangan; ?>
<br>
<?php
} ?>
<br>
<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</body>
</html>