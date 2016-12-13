<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<h3>Penentuan Kelas Murid(Tinggal)</h3>
<?php echo form_open('c_pilihkelas/tambahPilihanKelas'); ?>
<select name="id_kelas">
	<?php foreach ($kelas as $row) { ?>
		<option value="<?php echo $row->id_kelas ?>"><?php echo $row->kelas.' - '.$row->kel_belajar.' '.$row->kuota.' / '.$row->kuota_maks; ?></option>
	<?php } ?>
</select>
<input type="hidden" name="id_murid" value="<?php echo $id_murid ?>">
<input type="submit" value="Masukan">
<?php echo form_close(); ?>
</div>