<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php echo form_open('c_RKH/gantiTA'); ?>

<select name="tahun_ajaran">
<option value="all">All</option>
<?php foreach ($tahun as $row): ?>
	<option value="<?php echo $row->tahun_ajaran; ?>"><?php echo $row->tahun_ajaran.'/'.($row->tahun_ajaran+1) ?></option>
<?php endforeach ?>
</select>
<input type="hidden" name="id_kel_belajar" value="<?php echo $id_kel_belajar ?>">
<input type="submit" value="Ganti">
<?php echo form_close(); ?>


<table border="1">
	<tr>
		<th>Tema</th>
		<th>Subtema</th>
		<th>Minggu</th>
		<th>Tanggal</th>
		<th>Tahun Ajaran</th>
	</tr>
	<?php foreach ($temasub as $row) { ?>
	<tr>
		<td>
			<?php echo $row->tema; ?>
		</td>
		<td>
			<?php echo anchor('c_RKH/lihatMinggu/'.$row->id_subtema, $row->subtema); ?>
		</td>
		<td>
			<?php echo $row->minggu ?>
		</td>
		<td>
			<?php echo date('d M y', strtotime($row->hari_mulai)).' - '.date('d M y', strtotime($row->hari_selesai)) ?>
		</td>
		<td>
			<?php echo $row->tahun_ajaran.'/'.($row->tahun_ajaran+1); ?>
		</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>