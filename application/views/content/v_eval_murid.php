<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>
<table>
	<tr>
		<td>Semester</td>
		<td><input type="" name="" value=></td>
	</tr>
	<tr>
		<td>Nilai</td>
		<td><input type="" name=""></td>
	</tr>
</table>

<div class="dropdown">
  <button class="dropbtn">Semester</button>
  <div class="dropdown-content">
    <?php echo anchor('', '1'); ?>
    <?php echo anchor('', '2'); ?>
    <?php echo anchor('', '3'); ?>
    <?php echo anchor('', '4'); ?>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Tahun</button>
  <div class="dropdown-content">
    <?php echo anchor('', '2001'); ?>
    <?php echo anchor('', '2002'); ?>
    <?php echo anchor('', '2003'); ?>
    <?php echo anchor('', '2004'); ?>
  </div>
</div>

<br>
<?php echo anchor('c_evalHarian/lihatMinggu/', 'Laporan Harian'); ?>
<br>
<?php echo anchor('c_hafalan/index/'.$murid->id_murid, 'Laporan Hafalan'); ?>
<br>
<?php echo anchor('c_evalHarian/lihatMinggu/', 'Laporan Intra Ekstra'); ?>

</body>
</html>