<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_kelas/tambahKelas'); ?>
<select name="id_kel_belajar">
	<?php foreach ($KB as $row) { ?>
		<option value="<?php echo $row->id_kel_belajar ?>"><?php echo $row->kel_belajar; ?></option>
	<?php } ?>
</select>

<br>
<input type="text" name="kelas" placeholder="Kelas" maxlength="1">
<br>
<input type="text" name="tahun_ajaran" placeholder="Tahun ajaran" maxlength="4">
<br>
<input type="text" name="kuota" placeholder="Kuota" maxlength="2">
<br>
<select name="id_guru">
	<?php foreach ($guru as $row) { ?>
		<option value="<?php echo $row->id_guru ?>"><?php echo $row->nama_guru; ?></option>
	<?php } ?>
</select>
<br>
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>