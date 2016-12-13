<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo anchor('c_tema/buatDataIndikator/'.$id_subtema, 'Tambah'); ?>

<?php if ($indisub) { ?>
<?php echo form_open('c_tema/konfirmasiHapusIndi'); ?>	
	<table>
		<tr>
			<th>Nama Indikator</th>
		</tr>
		<?php foreach ($indisub as $row): ?>
			<tr>
				<td>
					<input type="checkbox" name="id_indi[]" value="<?php echo $row->id_indisub?>">
					<?php echo $row->kodeindi.' '.$row->indikator ?>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
	<input type="hidden" name="id_subtema" value="<?php echo $id_subtema ?>">
	<input type="submit" value="Hapus">
<?php echo form_close(); ?>
<?php }else{
	echo "<br>Belum ada Indikator pada Subtema ini";
} ?>
</body>
</html>