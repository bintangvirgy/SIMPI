<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_RKH/tambahDetilHari'); ?>
<input type="hidden" name="id_hari" value="<?php echo $id_hari ?>">


<select name="id_jenis_keg">
<?php foreach ($jeniskeg as $row): ?>
	<option value="<?php echo $row->id_jenis_keg; ?>"><?php echo $row->jenis_kegiatan ?></option>
<?php endforeach ?>
</select>
<br>
<input type="text" name="urutan" placeholder="Urutan">
<br>
<textarea name="kegiatan" placeholder="Detail Kegiatan"></textarea>
<br>
<input type="text" name="media" placeholder="Media">
<br>
<input type="text" name="durasi" maxlength="3"> Menit
<br>

<?php foreach ($indikator as $row) { ?>
	<input type="radio" name="id_indisub" value="<?php echo $row->id_indisub?>"> <?php echo $row->indikator; ?>
	<br>
<?php } ?>
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>