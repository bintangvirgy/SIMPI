<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<?php echo form_open('c_pilihkelas/tambahPilihanKelas'); ?>
	<h3>Penentuan Kelas Murid Naik Kelas</h3>
	<select name="id_kelas">
		<?php 	foreach ($kelas as $row) {
			if ($row->kuota < $row->kuota_maks) { ?>
				<option value="<?php echo $row->id_kelas ?>"><?php echo $row->kelas.' - '.$row->kel_belajar.' '.$row->kuota.'/'.$row->kuota_maks ?></option>
			<?php }
			else{
				echo "";
			}
		} ?>
	</select>
	<input type="hidden" name="id_murid" value="<?php echo $id_murid ?>">
	<input type="submit" value="Naik Kelas">
<?php echo form_close(); ?>
</div>