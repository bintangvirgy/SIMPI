<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
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
                        <input type="hidden" name="id_murid" value="<?php echo $this->session->userdata('id_murid') ?>">
                        <input type="hidden" name="status" value=3>
                        <tr>
                            <td>NIM</td>
                            <td>
                                <input type="text" name="nim">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>
                                <input type="text" name="nama_lengkap" maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td>
                                <input type="text" name="nama_panggilan" maxlength="10">
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
                                <input type="text" name="tempat_lahir" maxlength="10">
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input type="date" name="tanggal_lahir">
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>
                                <input type="text" name="agama" maxlength="10">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" name="alamat" maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor Telpon</td>
                            <td>
                                <input type="text" name="no_telpon" maxlength="40">
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Saudara</td>
                            <td>
                                <input type="number" name="jml_saudara" min="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>
                                <input type="number" name="anak_ke" min="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>
                                <input type="text" name="kewarganegaraan" maxlength="20">
                            </td>
                        </tr>
                        <tr>
                            <td>Bahasa Sehari-hari</td>
                            <td>
                                <input type="text" name="bahasa" maxlength="20">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Keadaan Anak Dalam Keluarga</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Ada masalah kesehatan yang perlu di perhatikan secara khusus?
                                <br>
                                <textarea name="keterangan1" rows="10" cols="30">
                                    -
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Ada permasalahan khusus pada diri anak?
                                <br>
                                <textarea name="keterangan2" rows="10" cols="30">
                                    -
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Kebiasaan / Kesenangan / Ketidaksenangan anak
                                <br>
                                <textarea name="keterangan3" rows="10" cols="30">
                                    -
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Tinggal bersama</td>
                            <td>
                                <input type="radio" name="keterangan4" value="Keluarga Sendiri" checked> Keluarga sendiri
                                <br>
                                <input type="radio" name="keterangan4" value="Bersama Keluarga Lain"> Bersama Keluarga lain
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Penghuni Rumah</td>
                            <td>
                                <input type="text" name="penghuni" value="... dewasa/remaja, ... anak-anak/sebaya">
                            </td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan Ayah</td>
                            <td>
                                <input type="radio" name="hubungan_ayah" value="KE" checked> Kurang Erat
                                <br>
                                <input type="radio" name="hubungan_ayah" value="CE"> Cukup Erat
                                <br>
                                <input type="radio" name="hubungan_ayah" value="SE"> Sangat Erat
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan Ibu</td>
                            <td>
                                <input type="radio" name="hubungan_ibu" value="KE" checked> Kurang Erat
                                <br>
                                <input type="radio" name="hubungan_ibu" value="CE"> Cukup Erat
                                <br>
                                <input type="radio" name="hubungan_ibu" value="SE"> Sangat Erat
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Pergaulan</td>
                            <td>
                                <input type="radio" name="pergaulan" value="SK" checked> Sangat Kurang
                                <br>
                                <input type="radio" name="pergaulan" value="K"> Kurang
                                <br>
                                <input type="radio" name="pergaulan" value="C"> Cukup
                                <br>
                                <input type="radio" name="pergaulan" value="B"> Banyak
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Imunisasi</td>
                            <td>
                                <input type="radio" name="imunisasi" value="L" checked> Lengkap
                                <br>
                                <input type="radio" name="imunisasi" value="B"> Belum Lengkap
                                <br>
                            </td>
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
                            <input type="text" name="nama_ayah" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir_ayah" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir_ayah">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama_ayah" maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="alamat_ayah" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>
                            <input type="text" name="no_telpon_ayah" maxlength="40">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>
                            <input type="text" name="pendidikan_ayah" maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <input type="text" name="pekerjaan_ayah" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>
                            <input type="number" name="penghasilan_ayah">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>
                            <input type="text" name="alamat_kantor_ayah" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon Kantor</td>
                        <td>
                            <input type="text" name="no_telpon_kantor_ayah" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <input type="text" name="kewarganegaraan_ayah" maxlength="20">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><b>Data Ibu</b></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>
                            <input type="text" name="nama_ibu" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir_ibu" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir_ibu">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama_ibu" maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="alamat_ibu" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>
                            <input type="text" name="no_telpon_ibu" maxlength="40">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>
                            <input type="text" name="pendidikan_ibu" maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <input type="text" name="pekerjaan_ibu" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>
                            <input type="number" name="penghasilan_ibu">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>
                            <input type="text" name="alamat_kantor_ibu" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon Kantor</td>
                        <td>
                            <input type="text" name="no_telpon_kantor_ibu" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <input type="text" name="kewarganegaraan_ibu" maxlength="20">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Selesai">
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</body>

</html>