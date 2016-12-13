<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo anchor('main/logout', 'Log Out'); ?>
    <div><h2>17. Daftar ID Login</h2></div>
    <?php echo anchor('c_idWaliMurid/buatIdLogin', 'Tambah ID Login'); ?>
    <div class="row">
        <div style="width:600px;margin:50px;">
            <table style="margin:20px auto;" border="1">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
                <?php 
                $no=1;
                foreach ($murid as $row): 
                
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->nim ?></td>
                        <td>
                        <?php echo $row->nama_panggilan ?>
                        </td>
                        <td>
                            <?php echo anchor('c_idWaliMurid/gantiIdLogin/'.$row->id_murid, 'Ganti'); ?>
                            <?php echo anchor('c_idWaliMurid/konfirmasiHapus/'.$row->id_murid, 'Hapus'); ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
    <div><h2>1. Pendaftaran Murid</h2></div>
    <?php echo anchor('c_pendaftaran/infoDaftar/'. $this->session->userdata('id_murid'), 'Info Daftar'); ?>

    <div><h2>2. Kelola Dokumen</h2></div>
    <?php echo anchor('c_dokumenDaftar/lihatDokumen/'. $this->session->userdata('id_murid'), 'Lihat Dokumen'); ?>

    <div><h2>3. Melihat Data Murid</h2></div>
    <div class="row">
        <div style="width:600px;margin:50px;">
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
                        <?php echo anchor('c_dataMurid/lihatDataMurid/'.$row->id_murid, $row->nama_panggilan);?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>

    <div><h2>5. Memberikan Feedback Evaluasi Murid</h2></div>
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
                    <?php echo anchor('c_feedback/lihatFeedback/'.$row->id_murid, $row->nama_panggilan);?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>


    <div><h2>6. Mengelola data pribadi guru</h2></div>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($guru as $row) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo anchor('c_profilGuru/lihatDataGuru/'.$row->id_guru, $row->nama_guru); ?></td>
            </tr>
        <?php }
         ?>
    </table>

    <div><h2>7. Mengelola Catatan Pertumbuhan</h2></div>
            <?php echo anchor('c_pertumbuhan', 'Pertumbuhan'); ?>
    <div><h2>8+10 Mengelola Laporan Evaluasi Murid (hafalan)</h2></div>
            <?php echo anchor('c_lapEval', 'Eval Murid'); ?>
</body>
</html>