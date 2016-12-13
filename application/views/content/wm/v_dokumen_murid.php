<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br><br><br>
<center>
<div class="row">
	<div class="col-sm-4">
		<?php 
		// var_dump($this->session->userdata('kk'));
		// die();
			if ($this->session->userdata('kk') == 0) {
				echo "KK<br>BELUM UPLOAD<br>";?>
				<img src="<?php echo base_url().'assets/aspire/'?>images/camera-icon-md.png">
				<?php
				echo form_open_multipart('index.php/c_dokumenDaftar/unggahDokumen');?>
				
					<input type="file" name="dokumen" size="20">
					<input type="hidden" name="jenis_dok" value="1">
					<input type="submit" value="Upload">
				
				
				<?php
				echo form_close();
			} else{
				echo "KK<br>";?>
				<img style="width:80%; height: auto" src="<?php echo base_url().'/assets/img/'.$kk->path?>">
				<?php
			}
		 ?>
	</div>
	<div class="col-sm-4">
		<?php 
			if ($this->session->userdata('akta') == 0) {
				echo "Akta<br>BELUM UPLOAD<br>";?>
				<img src="<?php echo base_url().'assets/aspire/'?>images/camera-icon-md.png">
				<?php
				echo form_open_multipart('index.php/c_dokumenDaftar/unggahDokumen');?>
				
					<input type="file" name="dokumen" size="20">
					<input type="hidden" name="jenis_dok" value="2">
					<input type="submit" value="Upload">
				
				
				<?php
				echo form_close();
			} else{
				echo "KK<br>";?>
				<img style="width:80%; height: auto" src="<?php echo base_url().'/assets/img/'.$akta->path?>">
				<?php
			}
		 ?>
	</div>
	<div class="col-sm-4">
		<?php 
			if ($this->session->userdata('foto') == 0) {
				echo "Foto<br>BELUM UPLOAD<br>";?>
				<img src="<?php echo base_url().'assets/aspire/'?>images/camera-icon-md.png">
				<?php
				echo form_open_multipart('index.php/c_dokumenDaftar/unggahDokumen');?>
				
					<input type="file" name="dokumen" size="20">
					<input type="hidden" name="jenis_dok" value="3">
					<input type="submit" value="Upload">
				
				
				<?php
				echo form_close();
			} else{
				echo "KK<br>";?>
				<img style="width:80%; height: auto" src="<?php echo base_url().'/assets/img/'.$foto->path?>">
				<?php
			}
		 ?>
	</div>
</div>
</center>
</body>
</html>