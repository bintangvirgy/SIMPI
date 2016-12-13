<html>

<head>
    <title></title>
</head>

<body>
    <h3>View Data Murid</h3>
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td>
                    <input type="hidden" value="<?php echo $murid->id_murid ?>"/>
                    <input type="text" value="<?php echo $murid->nim ?>"/>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" value="<?php echo $murid->nama_lengkap ?>"/>
                </td>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td>
                    <input type="hidden" value="<?php echo $murid->nama_panggilan?>"/>
                    <input type="text" value="<?php echo $murid->nim ?>"/>
                </td>
            </tr>

            <!-- <tr>
                <td>NIM</td>
                <td>
                    <input type="hidden" name="id_murid" value="<?php echo $row->id_murid ?>">
                    <input type="text" name="nim" value='<?php echo $row->nim ?>'>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama_lengkap" value="<?php echo $row->nama_lengkap ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td>
                    <input type="text" name="nama_panggilan" value="<?php echo $row->nama_panggilan ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="text" name="jenis_kelamin" value="<?php echo $row->jenis_kelamin ?>">
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>
                    <input type="text" name="tempat_lahir" value="<?php echo $row->tempat_lahir ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="text" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir ?>">
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <input type="text" name="agama" value="<?php echo $row->agama ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $row->alamat ?>">
                </td>
            </tr>
            <tr>
                <td>Nomor Telpon</td>
                <td>
                    <input type="text" name="no_telpon" value="<?php echo $row->no_telpon ?>">
                </td>
            </tr>
            <tr>
                <td>Jumlah Saudara Kandung</td>
                <td>
                    <input type="text" name="jml_saudara" value="<?php echo $row->jml_saudara ?>">
                </td>
            </tr>
            <tr>
                <td>Anak Ke-</td>
                <td>
                    <input type="text" name="anak_ke" value="<?php echo $row->anak_ke ?>">
                </td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>
                    <input type="text" name="kewarganegaraan" value="<?php echo $row->kewarganegaraan ?>">
                </td>
            </tr>
            <tr>
                <td>Bahasa Sehari-hari</td>
                <td>
                    <input type="text" name="bahasa" value="<?php echo $row->bahasa ?>">
                </td>
            </tr>
            <tr>
                <td>
                foto
                </td>
            </tr> -->
        </table>
</body>

</html>
