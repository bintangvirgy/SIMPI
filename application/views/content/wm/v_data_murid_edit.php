<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_pendaftaran/perbaruiFormulir'); ?>
<div class="container">
        <h2>Pendaftaran</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Data Murid</a></li>
            <li><a data-toggle="tab" href="#menu1">Data Wali Murid</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <center>
                    <h3>Biodata Murid</h3></center>
                <?php echo form_open('index.php/c_pendaftaran/tambahDaftar'); ?>
                    <table style="margin:20px auto;">
                        <input type="hidden" name="id_murid" value="<?php echo $murid->id_murid ?>">
                        <tr>
                            <td>NIM</td>
                            <td>
                                <input type="text" name="nim" value="<?php echo $murid->nim ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>
                                <input type="text" name="nama_lengkap" maxlength="50" value="<?php echo $murid->nama_lengkap ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td>
                                <input type="text" name="nama_panggilan" maxlength="10" value="<?php echo $murid->nama_panggilan ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                            <?php
                            if ($murid->jenis_kelamin == 'L') {
                            ?>
                                <input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki
                                <br>
                                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                                <br>
                            <?php
                            }else{
                            ?>
                                <input type="radio" name="jenis_kelamin" value="L" > Laki-laki
                                <br>
                                <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan
                                <br>
                            <?php
                            }
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>
                                <input type="text" name="tempat_lahir" maxlength="10" value="<?php echo $murid->tempat_lahir ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input type="date" name="tanggal_lahir" value="<?php echo $murid->tanggal_lahir ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>
                                <input type="text" name="agama" maxlength="10" value="<?php echo $murid->agama ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" name="alamat" maxlength="50" value="<?php echo $murid->alamat ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor Telpon</td>
                            <td>
                                <input type="text" name="no_telpon" maxlength="40" value="<?php echo $murid->no_telpon ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Saudara</td>
                            <td>
                                <input type="number" name="jml_saudara" min="1" value="<?php echo $murid->jml_saudara ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>
                                <input type="number" name="anak_ke" min="1" value="<?php echo $murid->anak_ke ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>
                                <input type="text" name="kewarganegaraan" maxlength="20" value="<?php echo $murid->kewarganegaraan ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Bahasa Sehari-hari</td>
                            <td>
                                <input type="text" name="bahasa" maxlength="20" value="<?php echo $murid->bahasa ?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Keadaan Anak Dalam Keluarga</b></td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="keterangan" value="<?php echo $murid->keterangan ?>"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Penghuni Rumah</td>
                            <td>
                                <input type="text" name="penghuni" value="<?php echo $murid->penghuni ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan Ayah</td>
                            <td>
                            <?php 
                                if ($murid->hubungan_ayah == 'KE') {
                                ?>
                                    <input type="radio" name="hubungan_ayah" value="KE" checked> Kurang Erat
                                    <br>
                                    <input type="radio" name="hubungan_ayah" value="CE"> Cukup Erat
                                    <br>
                                    <input type="radio" name="hubungan_ayah" value="SE"> Sangat Erat
                                    <br>
                                <?php
                                }elseif ($murid->hubungan_ayah == 'CE') {
                                ?>
                                    <input type="radio" name="hubungan_ayah" value="KE"> Kurang Erat
                                    <br>
                                    <input type="radio" name="hubungan_ayah" value="CE" checked> Cukup Erat
                                    <br>
                                    <input type="radio" name="hubungan_ayah" value="SE"> Sangat Erat
                                    <br>
                                <?php
                                }elseif ($murid->hubungan_ayah == 'SE') {
                                ?>
                                    <input type="radio" name="hubungan_ayah" value="KE"> Kurang Erat
                                    <br>
                                    <input type="radio" name="hubungan_ayah" value="CE"> Cukup Erat
                                    <br>
                                    <input type="radio" name="hubungan_ayah" value="SE" checked> Sangat Erat
                                    <br>
                                <?php
                                }
                             ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan Ibu</td>
                            <td>
                            <?php 
                                if ($murid->hubungan_ibu == 'KE') {
                                ?>
                                    <input type="radio" name="hubungan_ibu" value="KE" checked> Kurang Erat
                                    <br>
                                    <input type="radio" name="hubungan_ibu" value="CE"> Cukup Erat
                                    <br>
                                    <input type="radio" name="hubungan_ibu" value="SE"> Sangat Erat
                                    <br>
                                <?php
                                }elseif ($murid->hubungan_ibu == 'CE') {
                                ?>
                                    <input type="radio" name="hubungan_ibu" value="KE"> Kurang Erat
                                    <br>
                                    <input type="radio" name="hubungan_ibu" value="CE" checked> Cukup Erat
                                    <br>
                                    <input type="radio" name="hubungan_ibu" value="SE"> Sangat Erat
                                    <br>
                                <?php
                                }elseif ($murid->hubungan_ibu == 'SE') {
                                ?>
                                    <input type="radio" name="hubungan_ibu" value="KE"> Kurang Erat
                                    <br>
                                    <input type="radio" name="hubungan_ibu" value="CE"> Cukup Erat
                                    <br>
                                    <input type="radio" name="hubungan_ibu" value="SE" checked> Sangat Erat
                                    <br>
                                <?php
                                }
                             ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Pergaulan</td>
                            <td>
                            <?php 
                                if ($murid->pergaulan == 'SK') {
                                ?>
                                    <input type="radio" name="pergaulan" value="SK" checked> Sangat Kurang
                                    <br>
                                    <input type="radio" name="pergaulan" value="K"> Kurang
                                    <br>
                                    <input type="radio" name="pergaulan" value="C"> Cukup
                                    <br>
                                    <input type="radio" name="pergaulan" value="B"> Banyak
                                    <br>
                                <?php
                                }elseif ($murid->pergaulan == 'K') {
                                ?>
                                    <input type="radio" name="pergaulan" value="SK"> Sangat Kurang
                                    <br>
                                    <input type="radio" name="pergaulan" value="K" checked> Kurang
                                    <br>
                                    <input type="radio" name="pergaulan" value="C"> Cukup
                                    <br>
                                    <input type="radio" name="pergaulan" value="B"> Banyak
                                <?php
                                }elseif ($murid->pergaulan == 'C') {
                                ?>
                                    <input type="radio" name="pergaulan" value="SK"> Sangat Kurang
                                    <br>
                                    <input type="radio" name="pergaulan" value="K"> Kurang
                                    <br>
                                    <input type="radio" name="pergaulan" value="C" checked> Cukup
                                    <br>
                                    <input type="radio" name="pergaulan" value="B"> Banyak
                                <?php
                                }elseif ($murid->pergaulan == 'B') {
                                ?>
                                    <input type="radio" name="pergaulan" value="SK"> Sangat Kurang
                                    <br>
                                    <input type="radio" name="pergaulan" value="K"> Kurang
                                    <br>
                                    <input type="radio" name="pergaulan" value="C"> Cukup
                                    <br>
                                    <input type="radio" name="pergaulan" value="B" checked> Banyak
                                <?php
                                }
                             ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Imunisasi</td>
                            <?php 
                            if ($murid->imunisasi == 'L') {
                            ?>
                                <td>
                                <input type="radio" name="imunisasi" value="L" checked> Lengkap
                                <br>
                                <input type="radio" name="imunisasi" value="B"> Belum Lengkap
                                <br>
                                </td>
                            <?php
                            }else{
                             ?>
                                <td>
                                <input type="radio" name="imunisasi" value="L"> Lengkap
                                <br>
                                <input type="radio" name="imunisasi" value="B" checked> Belum Lengkap
                                <br>
                                </td>
                             <?php
                            }
                            ?>
                        </tr>
                    </table>


            </div>
            <div id="menu1" class="tab-pane fade">
                <center>
                    <h3>Biodata Wali Murid</h3></center>
                <table style="margin:20px auto;">
                    <tr>
                        <td colspan="2"><b>Data Ayah</b></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>
                            <input type="text" name="nama_ayah" maxlength="50" value="<?php echo $waliayah->nama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir_ayah" maxlength="20" value="<?php echo $waliayah->tempat_lhr?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir_ayah" value="<?php echo $waliayah->tanggal_lhr?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama_ayah" maxlength="10" value="<?php echo $waliayah->agama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>
                            <input type="text" name="no_telpon_ayah" maxlength="40" value="<?php echo $waliayah->telp?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>
                            <input type="text" name="pendidikan_ayah" maxlength="10" value="<?php echo $waliayah->pendidikan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <input type="text" name="pekerjaan_ayah" maxlength="20" value="<?php echo $waliayah->pekerjaan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>
                            <input type="number" name="penghasilan_ayah" value="<?php echo $waliayah->penghasilan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>
                            <input type="text" name="alamat_kantor_ayah" maxlength="50" value="<?php echo $waliayah->kantor?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <input type="text" name="kewarganegaraan_ayah" maxlength="20" value="<?php echo $waliayah->warga_negara?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><b>Data Ibu</b></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>
                            <input type="text" name="nama_ibu" maxlength="50" value="<?php echo $waliibu->nama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir_ibu" maxlength="20" value="<?php echo $waliibu->tempat_lhr?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir_ibu" value="<?php echo $waliibu->tanggal_lhr?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama_ibu" maxlength="10" value="<?php echo $waliibu->agama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>
                            <input type="text" name="no_telpon_ibu" maxlength="40" value="<?php echo $waliibu->telp?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>
                            <input type="text" name="pendidikan_ibu" maxlength="10" value="<?php echo $waliibu->pendidikan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <input type="text" name="pekerjaan_ibu" maxlength="20" value="<?php echo $waliibu->pekerjaan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>
                            <input type="number" name="penghasilan_ibu" value="<?php echo $waliibu->penghasilan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>
                            <input type="text" name="alamat_kantor_ibu" maxlength="50" value="<?php echo $waliibu->kantor?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <input type="text" name="kewarganegaraan_ibu" maxlength="20" value="<?php echo $waliibu->warga_negara?>">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<input type="submit" value="Selesai">
<?php echo form_close(); ?>
</body>
</html>