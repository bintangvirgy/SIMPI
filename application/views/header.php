<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
if ($this->session->flashdata('warn')) { ?>
	<p class="bg-danger"><?php echo $this->session->flashdata('warn'); ?></p>
<?php
}elseif ($this->session->flashdata('info')) { ?>
	<p class="bg-success"><?php echo $this->session->flashdata('info'); ?></p>
<?php
}elseif ($this->session->flashdata('calm')) { ?>
	<p class="bg-warning"><?php echo $this->session->flashdata('calm'); ?></p>
<?php
} 
?>
<?php
if ($this->session->userdata('id_login')) {
    echo "welcome ";
	echo anchor('c_login/logout', '  Log Out'.'</br>');
}
?>