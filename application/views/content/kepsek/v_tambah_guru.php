<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_dataguru/tambahGuru'); ?>
<table>
	<tr>
	    <td>Nama Lengkap</td>
	    <td>
	        <input type="text" name="nama_guru" maxlength="20">
	    </td>
	</tr>
	<tr>
	    <td>Jenis Kelamin</td>
	    <td>
	        <input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki
	        <br>
	        <input type="radio" name="jenis_kelamin" value="P"> Perempuan
	        <br>
	    </td>
	</tr>
	<tr>
	    <td>Tempat Lahir</td>
	    <td>
	        <input type="text" name="tempat_lahir" maxlength="20">
	    </td>
	</tr>
	<tr>
	    <td>Tanggal Lahir</td>
	    <td>
	        <input type="date" name="tanggal_lahir">
	    </td>
	</tr>
	<tr>
	    <td>Status PNS</td>
	    <td>
	        <input type="radio" name="status_pns" value="1" checked> PNS
	        <br>
	        <input type="radio" name="status_pns" value="0"> Non-PNS
	        <br>
	    </td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" value="Tambah">
		</td>
	</tr>
</table>
<?php echo form_close(); ?>
</body>
</html>