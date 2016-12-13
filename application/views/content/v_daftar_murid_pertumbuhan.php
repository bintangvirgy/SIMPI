<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Pertumbuhan</h2>
	<table style="margin:20px auto;" border="1">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
            <?php 
            $no=1;
            foreach ($murid as $row):
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nim ?></td>
                    <td>
                    <?php echo anchor('c_pertumbuhan/lihatMurid/'.$row->id_murid, $row->nama_panggilan);?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
</body>
</html>