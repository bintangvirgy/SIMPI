<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-md-10">
	<div class="container">
		<?php echo form_open('c_murid/perbaruiDataMurid'); ?>
			<div class="col-md-6">
				<table>
					<tr>
						<td>Nomor Induk</td>
						<td><input type="text" name="no_induk" value="<?php echo $no_induk ?>"></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap ?>"></td>
					</tr>
					<tr>
						<td>Nama Panggilan</td>
						<td><input type="text" name="nama_panggilan" value="<?php echo $nama_panggilan ?>"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>
						<?php
							if ($jenis_kelamin == 'L' ) { ?>
								<input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin ?>" checked> L
								<input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin ?>"> P
							<?php }else{ ?>
								<input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin ?>"> L
								<input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin ?>" checked> P
							<?php }
						?>
							
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir ?>"></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><input type="text" name="agama" value="<?php echo $agama ?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
					</tr>
					<tr>
						<td>Nomor Telpon</td>
						<td><input type="text" name="telp" value="<?php echo $telp ?>"></td>
					</tr>
					<tr>
						<td>Jumlah Saudara</td>
						<td><input type="text" name="jumlah_saudara" value="<?php echo $jumlah_saudara.' bersaudara' ?>"></td>
					</tr>
					<tr>
						<td>Anak Ke</td>
						<td><input type="text" name="anak_ke" value="<?php echo $anak_ke ?>"></td>
					</tr>
					<tr>
						<td>Kewarganegaraan</td>
						<td><input type="text" name="warga_negara" value="<?php echo $warga_negara ?>"></td>
					</tr>
					<tr>
						<td>Bahasa Sehari-hari</td>
						<td><input type="text" name="bahasa" value="<?php echo $bahasa ?>"></td>
					</tr>
					<tr>
						<td>Tinggal</td>
						<td>
							<?php if ($tinggal == 1) { ?>
								<input type="radio" name="tinggal" value="1" checked> Bersama keluarga sendiri
								<br>
								<input type="radio" name="tinggal" value="2"> Bersama keluarga lain
							<?php }else{ ?>
								<input type="radio" name="tinggal" value="1"> Bersama keluarga sendiri
								<br>
								<input type="radio" name="tinggal" value="2" checked> Bersama keluarga lain
							<?php } ?>
							
						</td>
					</tr>
					<tr>
						<td>Penghuni</td>
						<td>
							<input type="text" name="penghuni_dewasa" value="<?php echo $penghuni_dewasa ?>"> Remaja/Dewasa
							<br>
							<input type="text" name="penghuni_sebaya" value="<?php echo $penghuni_sebaya ?>"> Anak-anak/Sebaya
						</td>
					</tr>
					<tr>
						<td>Hubungan Ayah</td>
						<td>
							<?php if ($hub_ayah == 1) { ?>
								<input type="radio" name="hub_ayah" value="1" checked>Kurang Erat
								<br>
								<input type="radio" name="hub_ayah" value="2" >Cukup Erat
								<br>
								<input type="radio" name="hub_ayah" value="3" >Sangat Erat
							<?php }elseif($hub_ayah == 2){ ?>
								<input type="radio" name="hub_ayah" value="1" >Kurang Erat
								<br>
								<input type="radio" name="hub_ayah" value="2" checked>Cukup Erat
								<br>
								<input type="radio" name="hub_ayah" value="3" >Sangat Erat
							<?php }elseif($hub_ayah == 3){ ?>
								<input type="radio" name="hub_ayah" value="1" >Kurang Erat
								<br>
								<input type="radio" name="hub_ayah" value="2" >Cukup Erat
								<br>
								<input type="radio" name="hub_ayah" value="3" checked>Sangat Erat
							<?php }else{ ?>
								<input type="radio" name="hub_ayah" value="1" >Kurang Erat
								<br>
								<input type="radio" name="hub_ayah" value="2" >Cukup Erat
								<br>
								<input type="radio" name="hub_ayah" value="3" >Sangat Erat
							<?php } ?>
						
						</td>
					</tr>
					<tr>
						<td>Hubungan Ibu</td>
						<td>
							<?php if ($hub_ibu == 1) { ?>
								<input type="radio" name="hub_ibu" value="1" checked>Kurang Erat
								<br>
								<input type="radio" name="hub_ibu" value="2" >Cukup Erat
								<br>
								<input type="radio" name="hub_ibu" value="3" >Sangat Erat
							<?php }elseif($hub_ibu == 2){ ?>
								<input type="radio" name="hub_ibu" value="1" >Kurang Erat
								<br>
								<input type="radio" name="hub_ibu" value="2" checked>Cukup Erat
								<br>
								<input type="radio" name="hub_ibu" value="3" >Sangat Erat
							<?php }elseif($hub_ibu == 3){ ?>
								<input type="radio" name="hub_ibu" value="1" >Kurang Erat
								<br>
								<input type="radio" name="hub_ibu" value="2" >Cukup Erat
								<br>
								<input type="radio" name="hub_ibu" value="3" checked>Sangat Erat
							<?php }else{ ?>
								<input type="radio" name="hub_ibu" value="1" >Kurang Erat
								<br>
								<input type="radio" name="hub_ibu" value="2" >Cukup Erat
								<br>
								<input type="radio" name="hub_ibu" value="3" >Sangat Erat
							<?php } ?>
						
						</td>
					</tr>
					<tr>
						<td>Pergaulan Sebaya</td>
						<td>
							<?php if ($pergaulan_sebaya == 1) { ?>
								<input type="radio" name="pergaulan_sebaya" value="1" checked>Sangat Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="2" >Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="3" >Cukup
								<br>
								<input type="radio" name="pergaulan_sebaya" value="4" >Banyak
							<?php }elseif($pergaulan_sebaya == 2){ ?>
								<input type="radio" name="pergaulan_sebaya" value="1" >Sangat Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="2" checked>Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="3" >Cukup
								<br>
								<input type="radio" name="pergaulan_sebaya" value="4" >Banyak
							<?php }elseif($pergaulan_sebaya == 3){ ?>
								<input type="radio" name="pergaulan_sebaya" value="1" >Sangat Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="2" >Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="3" checked>Cukup
								<br>
								<input type="radio" name="pergaulan_sebaya" value="4" >Banyak
							<?php }elseif($pergaulan_sebaya == 4){ ?>
								<input type="radio" name="pergaulan_sebaya" value="1" >Sangat Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="2" >Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="3" >Cukup
								<br>
								<input type="radio" name="pergaulan_sebaya" value="4" checked>Banyak
							<?php }else{ ?>
								<input type="radio" name="pergaulan_sebaya" value="1" >Sangat Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="2" >Kurang
								<br>
								<input type="radio" name="pergaulan_sebaya" value="3" >Cukup
								<br>
								<input type="radio" name="pergaulan_sebaya" value="4" >Banyak
							<?php } ?>
						
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<table>
					<tr>
						<td>Kesehatan</td>
						<td><input type="text" name="kesehatan" value="<?php echo $kesehatan ?>"></td>
					</tr>
					<tr>
						<td colspan="2">
							Deskripsi Kesehatan
							<br>
							<textarea name="kesehatan_desk" style="width: 100%;"><?php echo $kesehatan_desk; ?></textarea>
						</td>
					</tr>
					<tr>
						<td>Kebutuhan Khusus</td>
						<td><input type="text" name="khusus" value="<?php echo $khusus ?>"></td>
					</tr>
					<tr>
						<td colspan="2">
							Deskripsi Kebutuhan
							<br>
							<textarea name="khusus_desk" style="width: 100%;"><?php echo $khusus_desk; ?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
						Kebiasaan Anak
						<textarea name="kebiasaan" style="width: 100%;"><?php echo $kebiasaan; ?></textarea>
						<td>
					</tr>
					<tr>
						<td>Imunisasi</td>
						<td>
							<?php if ($imunisasi == 1) { ?>
								<input type="radio" name="imunisasi" value="1" checked> Sudah
								<br>
								<input type="radio" name="imunisasi" value="2"> Belum
							<?php }elseif($imunisasi == 0){ ?>
								<input type="radio" name="imunisasi" value="1" > Sudah
								<br>
								<input type="radio" name="imunisasi" value="2" checked> Belum
							<?php } ?>
						</td>
					</tr>
				</table>
			</div>
			<input type="hidden" name="id_murid" value="<?php echo $id_murid ?>">
			<input type="submit" value="Ganti">
			<?php echo form_close(); ?>	
	</div>
</div>
</body>
</html>