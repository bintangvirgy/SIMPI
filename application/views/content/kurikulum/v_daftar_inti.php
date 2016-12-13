<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php if ($KI){
?>
		<table border="1">
			<tr>
				<th>Kompetensi Inti</th>
				<th>Kompetensi Dasar</th>
				<th>Indikator</th>
			</tr>
	<?php
	$old_kode_ki = null;
	$old_kode_kd = null;
	foreach ($KI as $row) {
	?>
			<tr>
				<td>
				<?php
					if($old_kode_ki !== $row->kodeki){
						echo $row->kodeki.'<br>'.$row->ki;
					?>
					<div style="background-color: #99ffff;">
					<?php echo anchor('c_kompetensi/gantiDataKI/'.$row->id_ki, 'Ganti'); ?>
					<?php echo anchor('c_kompetensi/konfirmasiKI/'.$row->id_ki, 'Hapus'); ?>
					<br>
					<?php echo anchor('c_kompetensi/buatDataKD/'.$row->id_ki, 'Tambah Kompetensi Dasar'); ?>
					</div>
					<?php
					$old_kode_ki = $row->kodeki;
				}
					 ?>
				<br>
				</td>

				<!--TIAP INTI PUNYA >1 DASAR-->
				<td>
					<?php if ($row->kd){
						if($old_kode_kd !== $row->kd){
						echo $row->kd;
						$old_kode_kd = $row->kd;
						?>
						<div style="background-color: #99ffff;">
						<?php echo anchor('c_kompetensi/gantiDataKD/'.$row->id_kd, 'Ganti'); ?>
						<?php echo anchor('c_kompetensi/konfirmasiHapus/'.$row->id_kd, 'Hapus'); ?>
						<br>
						<?php echo anchor('c_kompetensi/buatDataIndikator/'.$row->id_kd, 'Tambah Indikator'); ?>
						</div>
						<?php
						}
					}else{
						echo "Belum ada kompetensi dasar";?>
					<?php }
					?>
				</td>

				<!--TIAP DASAR PUNYA >1 INDIKATOR-->
				<td>
					<?php if ($row->indikator){
						echo $row->indikator;
						echo "<br>";
						echo anchor('c_kompetensi/gantiDataIndikator/'.$row->id_indikator, 'Ganti ');
						echo anchor('c_kompetensi/konfirmasiIndi/'.$row->id_indikator, 'Hapus');
					}else{
						echo "Belum ada indikator";
						?>

					<?php }
					?>
				</td>
			</tr>
		<?php
	} ?>
	<tr>
		<td>
			<?php echo anchor('c_kompetensi/buatDataKI', 'Tambah'); ?>
		</td>
	</tr>
	</table>
	<?php
}else{
	echo "<br>Belum ada kompetensi inti";
}?>

</body>
</html>