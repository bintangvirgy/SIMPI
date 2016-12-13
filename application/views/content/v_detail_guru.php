<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>View Data Murid</h3>
    <table style="margin:20px auto;">
        <tr>
            <td>ID Guru</td>
            <td>
                <?php echo $guru->id_guru ?>
            </td>
        </tr>
        <tr>
            <td>ID Otoritas</td>
            <td>
                <?php echo $guru->id_otoritas ?>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <?php echo $guru->nama_guru ?>
            </td>
        </tr>
        <tr>
            <td>ID Kelas</td>
            <td>
                <?php echo $guru->id_kelas ?>
            </td>
        </tr>
        <tr>
        	<td>
        	<?php echo anchor('c_profilGuru/gantiDataGuru/'.$guru->id_guru,'Ganti Data'); ?>
        	</td>
        </tr>
    </table>
</body>
</html>