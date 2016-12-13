<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_dataGuru/perbaruiDataGuru');?>
<input type="hidden" name="id_guru" value="<?php echo $guru->id_guru; ?>">
<table>
	<tr>
		<td>Nama Lengkap</td>
		<td>
			<input type="text" name="nama_guru" maxlength="20" value="<?php echo $guru->nama_guru; ?>">
		</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
	    <td>
	        <?php if ($guru->jenis_kelamin == 'L') { ?>
	        	<input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki
		        <br>
		        <input type="radio" name="jenis_kelamin" value="P"> Perempuan
		        <br>
	        <?php } else{?>
	        	<input type="radio" name="jenis_kelamin" value="L"> Laki-laki
		        <br>
		        <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan
		        <br>
	        <?php } ?>
	    </td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>
			<input type="text" name="tempat_lahir" maxlength="20" value="<?php echo $guru->tempat_lahir; ?>">
		</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>
			<input type="date" name="tanggal_lahir" value="<?php echo $guru->tanggal_lahir; ?>">
		</td>
	</tr>
	<tr>
		<td>Status PNS</td>
	    <td>
	    <?php if ($guru->status_pns == 1) { ?>
	    	<input type="radio" name="status_pns" value="1" checked> PNS
	        <br>
	        <input type="radio" name="status_pns" value="0"> Non-PNS
	        <br>
	    <?php } else{ ?>
	    	<input type="radio" name="status_pns" value="1"> PNS
	        <br>
	        <input type="radio" name="status_pns" value="0" checked=""> Non-PNS
	        <br>
	    <?php } ?>
	    </td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" value="Ganti">
		</td>
	</tr>
</table>
<?php echo form_close(); ?>
</body>
</html>