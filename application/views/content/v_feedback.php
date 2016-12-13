<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php echo form_open('index.php/c_feedback/masukkanFeedback'); ?>
<table>
	<tr>
		<?php foreach ($feedback as $row) : ?>
			<td><?php echo $row->isi_feedback; ?></td>
			<td><?php 
				if ($row->status_feedback == 1){
					echo "guru";
				} elseif ($row->status_feedback == 2) {
					echo "Wali murid";
				} else{
					echo "Belum kasih session";
				}
			?></td>
		</tr>
		<?php endforeach ?>
</table>
<input type="hidden" name="id_murid" value="<?php echo $id_murid ?>">
<input type="text" name="isi_feedback">
<input type="submit" value="tambah">
<?php echo form_close(); ?>
</body>
</html>