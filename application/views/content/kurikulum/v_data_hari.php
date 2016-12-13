<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo anchor('c_RKH/buatDetilHari/'.$this->session->userdata('id_hari'), 'Tambah Harian');

if ($this->session->userdata('data_hari') == 1) { ?>
	<table border="1">
	<tr>
		<th>Jenis Kegiatan</th>
		<th>Kegiatan</th>
		<th>Durasi</th>
		<th>Media</th>
		<th>Action</th>
	</tr>
		<?php
		$nama_jenis = "";
		foreach ($detail as $row) { ?>
			<tr>
				<td>
					<?php 
					if ($nama_jenis != $row->jenis_kegiatan) {
						echo $row->jenis_kegiatan;
						$nama_jenis = $row->jenis_kegiatan;
					}else{
						echo "";
					}
					?>
				</td>
				<td>
					<?php echo $row->kegiatan ?>
				</td>
				<td>
					<?php echo $row->durasi ?>
				</td>
				<td>
					<?php echo $row->media ?>
				</td>
				<td>
					<?php 
					if ($this->session->userdata('aut_hari') == 1) { ?>
						<?php echo anchor('c_RKH/gantiDetilHari/'.$row->id_detilhari, 'Ganti'); ?>
					 	<?php echo anchor('c_RKH/konfirmasiHapus/'.$row->id_detilhari, 'Hapus'); ?>
					<?php } ?>
				</td>
			</tr>
		<?php } ?>
	</table>	
<?php
}else{
	echo "<br>Belum ada detail hari";
}
?>
</body>
</html>