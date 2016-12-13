<body>
    <div class="col-md-10">
        <div class="container">
            <h2>Kelola Data Murid</h2>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Data Murid</a></li>
                <li><a data-toggle="tab" href="#menu1">Riwayat Kelas</a></li>
                <li><a data-toggle="tab" href="#menu2">Data Wali Murid</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <center>
                        <h3>Biodata Murid</h3></center>
                    <div class="row">
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td>Nomor Induk</td>
                                    <td>
                                        <?php echo ': '.$murid->no_induk ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>
                                        <?php echo ': '.$murid->nama_lengkap ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Panggilan</td>
                                    <td>
                                        <?php echo ': '.$murid->nama_panggilan ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>
                                        <?php if ($murid->jenis_kelamin == "L") {
									echo ": Laki-laki";
								} else{
									echo ": Perempuan";
								} 
								?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>
                                        <?php echo ': '.$murid->tempat_lahir ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>
                                        <?php
									$murid->date=date_create($murid->tanggal_lahir);
									echo ': '.date_format($murid->date,"d M Y");
								?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>
                                        <?php echo ': '.$murid->agama ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>
                                        <?php echo ': '.$murid->alamat ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nomor Telpon</td>
                                    <td>
                                        <?php echo ': '.$murid->telp ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Saudara</td>
                                    <td>
                                        <?php echo ': '.$murid->jumlah_saudara.' bersaudara' ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Anak Ke</td>
                                    <td>
                                        <?php echo ': '.$murid->anak_ke ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kewarganegaraan</td>
                                    <td>
                                        <?php echo ': '.$murid->warga_negara ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bahasa Sehari-hari</td>
                                    <td>
                                        <?php echo ': '.$murid->bahasa ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tinggal</td>
                                    <td>
                                        <?php
										if ($murid->tinggal == 1) {
											echo ": Bersama keluarga sendiri";
										}else{
											echo ": Bersama keluarga lain";
										}
									?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penghuni Rumah</td>
                                    <td>
                                        <?php echo ': '.$murid->penghuni_dewasa.' dewasa, '.$murid->penghuni_sebaya.' anak-anak' ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hubungan Ayah</td>
                                    <td>
                                        <?php
										if ($murid->hub_ayah == 1) {
											echo ": Kurang Erat";
										}elseif($murid->hub_ayah == 2){
											echo ": Cukup Erat";
										}elseif($murid->hub_ayah == 3){
											echo ": Sangat Erat";
										}
									?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hubungan Ibu</td>
                                    <td>
                                        <?php
										if ($murid->hub_ibu == 1) {
											echo ": Kurang Erat";
										}elseif($murid->hub_ibu == 2){
											echo ": Cukup Erat";
										}elseif($murid->hub_ibu == 3){
											echo ": Sangat Erat";
										}
									?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pergaulan Sebaya</td>
                                    <td>
                                        <?php
										if ($murid->pergaulan_sebaya == 1) {
											echo ": Sangat Kurang";
										}elseif($murid->pergaulan_sebaya == 2){
											echo ": Kurang";
										}elseif($murid->pergaulan_sebaya == 3){
											echo ": Sangat Cukup";
										}elseif ($murid->pergaulan_sebaya == 4) {
											echo ": Banyak";
										}
									?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Imunisasi</td>
                                    <td>
                                        <?php
										if ($murid->imunisasi == 1) {
											echo ": Sudah";
										}elseif($murid->imunisasi == 2){
											echo ": Belum";
										}
									?>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <?php if ($murid->kesehatan == 1) {?>
                                            Deskripsi Kesehatan
                                            <br>
                                            <?php echo $murid->kesehatan_desk ?>
                                                <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <?php if ($murid->khusus == 1) {?>
                                            Kebutuhan Khusus
                                            <br>
                                            <?php echo $murid->khusus_desk ?>
                                                <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kebiasaan Anak</td>
                                    <td>
                                        <?php echo $murid->kebiasaan ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <center>
                        <?php echo anchor('c_murid/gantiDataMurid/'.$murid->id_murid, 'Ganti Data'); ?>
                    </center>
                </div>


                <div id="menu1" class="tab-pane fade">
                    <div class="row">

                        <?php if ($murid->status == 5){ ?>
                            <center>
                                <h3>Penentuan Kelas Murid Baru</h3></center>
                            <div class="col-md-6">
                                <?php
			                	$old_title = "";
			                	foreach ($rekom_kelas as $row) {
			                		if ($old_title != $row->kel_belajar) {
			                			echo '<h4>KATEGORI : '.$row->kel_belajar.'</h4>';
			                			$old_title = $row->kel_belajar;
			                		}else{
			                			echo "";
			                		}
			                	} ?>
			                	Murid ini direkomendasikan untuk masuk ke kelas:
                                <?php foreach ($rekom_kelas as $row) {
                                	echo $row->kelas;
                                }

                                $from = new DateTime($murid->tanggal_lahir);
								$to = new DateTime('today');
								$age = $from->diff($to)->y;
                                ?>
                                Dikarenakan mempunyai umur <?php echo $age; ?>
                            </div>
                            <?php
                            $array = array(
                            	'id_murid' => $murid->id_murid ,
                            	'status' => $murid->status ,
                            );
                            
                            $this->session->set_userdata( $array );

                            echo anchor('c_pilihkelas/lihatKelas', 'Tentukan Kelas');
                        }

		                elseif ($murid->status == 7 && $this->session->userdata('tk_b') == 0) { ?>
                                <center>
                                    <h3>Penentuan Kelas Murid Lama</h3></center>
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Kelompok Belajar</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $murid->nama_lengkap; ?>
                                            </td>
                                            <td>
                                                <?php echo $old_kelas->kelas ?>
                                            </td>
                                            <td>
                                                <?php echo $old_kelas->kel_belajar ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-3">
                                        <?php echo anchor('c_pilihkelas/konfirmasiPindah/'.$murid->id_murid, 'Pindah Sekolah'); ?>
                                            |
                                        <?php
                                        	$send = array(
                                        		'id_murid' => $murid->id_murid , 
                                        		'id_kel_belajar' => $old_kelas->id_kel_belajar , 
                                        		);
                                        	
                                        	$this->session->set_userdata( $send );
                                        	echo anchor('c_pilihkelas/naikKelas', 'Naik Kelas'); ?>
                                    </div>
                                </div>
                    </div>
                    <?php }

                    elseif ($murid->status == 7 && $this->session->userdata('tk_b') == 1) { ?>
                     	<center><h3>Penentuan Kelulusan</h3></center>
                     	<div class="col-md-12">
	                        <table class="table table-striped">
	                            <tr>
	                                <th>Nama</th>
	                                <th>Kelas</th>
	                                <th>Kelompok Belajar</th>
	                            </tr>
	                            <tr>
	                                <td>
	                                    <?php echo $murid->nama_lengkap; ?>
	                                </td>
	                                <td>
	                                    <?php echo $old_kelas->kelas ?>
	                                </td>
	                                <td>
	                                    <?php echo $old_kelas->kel_belajar ?>
	                                </td>
	                            </tr>
	                        </table>

	                        <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <?php echo anchor('c_pilihkelas/konfirmasiLulus/'.$murid->id_murid, 'Lulus'); ?>
                                        |
                                    <?php echo anchor('c_pilihkelas/konfirmasiTinggal/'.$murid->id_murid, 'Tinggal Kelas'); ?>
                                </div>
                            </div>
	                    </div>
                     <?php }

                     elseif ($murid->status == 10) { ?>
                     	<center><h3>Data Kelas Saat Ini</h3></center>
                     	<div class="col-md-12">
	                        <table class="table table-striped">
	                            <tr>
	                                <th>Nama</th>
	                                <th>Kelas</th>
	                                <th>Kelompok Belajar</th>
	                            </tr>
	                            <tr>
	                                <td>
	                                    <?php echo $murid->nama_lengkap; ?>
	                                </td>
	                                <td>
	                                    <?php echo $kelas->kelas ?>
	                                </td>
	                                <td>
	                                    <?php echo $kelas->kel_belajar ?>
	                                </td>
	                            </tr>
	                        </table>

	                        <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <?php
		                            $array = array(
		                            	'id_murid' => $murid->id_murid ,
		                            	'status' => $murid->status ,
		                            );
		                            
		                            $this->session->set_userdata( $array );
                                    echo anchor('c_pilihkelas/lihatKelas/', 'Ganti Kelas'); ?>
                                </div>
                            </div>
	                    </div>
                      <?php } ?>
                </div>

               
            </div>
             <div id="menu2" class="tab-pane fade">
                <div class="row">
                <center><h3>Data Wali Murid</h3></center>
                	<?php foreach ($walimurid as $row) { ?>
                		<div class="col-md-6">
	                		<table>
	                			<tr>
	                				<td>Nama</td>
	                				<td><?php echo $row->nama; ?></td>
	                			</tr>
	                			<tr>
	                				<td>Tempat Lahir</td>
	                				<td><?php echo $row->tempat_lhr; ?></td>
	                			</tr>
	                			<tr>
	                				<td>Tanggal Lahir</td>
	                				<td><?php echo $row->tanggal_lhr; ?></td>
	                			</tr>
	                			<tr>
	                				<td>Agama</td>
	                				<td><?php echo $row->agama; ?></td>
	                			</tr>
	                			<tr>
	                				<td>No. Telpon</td>
	                				<td><?php echo $row->telp; ?></td>
	                			</tr>
	                			<tr>
	                				<td>Pendidikan</td>
	                				<td><?php echo $row->pendidikan; ?></td>
	                			</tr>
	                			<tr>
	                				<td>Pekerjaan</td>
	                				<td><?php echo $row->pekerjaan; ?></td>
	                			</tr>
	                			<tr>
	                				<td>Penghasilan</td>
	                				<td><?php echo $row->penghasilan; ?></td>
	                			</tr>
	                			<tr>
	                				<td>Alamat Kantor</td>
	                				<td><?php echo $row->kantor; ?></td>
	                			</tr>
	                			<tr>
	                				<td>Kewarganegaraan</td>
	                				<td><?php echo $row->warga_negara; ?></td>
	                			</tr>
	                		</table>
	                	</div>
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</body>