<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_bidangpengembangan/perbaruiDataBP'); ?>
<input type="hidden" name="id_bidpeng" value="<?php echo $id_bidpeng ?>">
<input type="text" name="bidang_pengembangan" value="<?php echo $bidang_pengembangan ?>">
<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</body>
</html>