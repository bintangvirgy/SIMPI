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
			<td><?php echo $row->feedback; ?></td>
			<td><?php 
				if ($row->owner == 4){
					echo "Kesiswaan";
				} elseif ($row->owner == 3) {
					echo "bendahara";
				} else{
					echo "Wali Murid";
				}
			?></td>
		</tr>
		<?php endforeach ?>
</table>
<input type="hidden" name="owner" value="0">
<input type="hidden" name="id_murid" value="<?php echo $this->session->userdata('id_murid');?>">
<input type="text" name="feedback">
<input type="submit" value="tambah">
<?php echo form_close(); ?>
</body>
</html>