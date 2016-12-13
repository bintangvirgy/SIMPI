<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php echo form_open('c_RKH/perbaruiDetilHari'); ?>

<select name="id_jenis_keg">
<?php foreach ($jeniskeg as $row): ?>
	<option value="<?php echo $row->id_jenis_keg; ?>"><?php echo $row->jenis_kegiatan ?></option>
<?php endforeach ?>
</select>
<br>
<input type="text" name="urutan" placeholder="urutan" value="<?php echo $detilhari->urutan ?>">
<br>
<textarea name="kegiatan" placeholder="Detail Kegiatan"><?php echo $detilhari->kegiatan ?></textarea>
<br>
<input type="text" name="media" placeholder="Media" value="<?php echo $detilhari->media ?>">
<br>
<input type="text" name="durasi" maxlength="3" value="<?php echo $detilhari->durasi ?>"> Menit
<br>

<input type="radio" name="id_indisub" value="<?php echo $detilhari->id_indikator?>" checked> <?php echo $detilhari->indikator; ?>
<br>
<?php foreach ($indikator as $row) { ?>
	<input type="radio" name="id_indisub" value="<?php echo $row->id_indisub?>"> <?php echo $row->indikator; ?>
	<br>
<?php } ?>
<input type="radio" name="id_indisub" value=""> Kosongkan
<br>

<input type="hidden" name="id_indisub_lama" value="<?php echo $detilhari->id_indikator?>">
<input type="hidden" name="id_detilhari" value="<?php echo $id_detilhari ?>">
<input type="submit" value="Ganti">
<?php echo form_close(); ?>

</body>
</html>