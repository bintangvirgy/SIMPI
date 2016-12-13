<!DOCTYPE html>
<html>
<head>
	<title>SIMPI LOGIN</title>
</head>
<body>
<div class="container-fluid" style="background-color: #ff5254; padding: 10px 0px 10px 0px">
        <div class="container-fluid border-dashed2" style="background-color: #ff5254;">
            <div class="container">
	<div class="row">
                <div class="col-md-12">
                    <img  class="logo" src="<?php echo base_url().'assets/aspire/images/logo.png'?>">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax p1">
        <div class="container">
            <div class="col-md-6">
                <img style="width: 100%" src="<?php echo base_url().'assets/aspire/images/kids.png'?>">
            </div>
            <div class="col-md-6">
                <div class="border-round">
                <?php echo form_open('index.php/c_login/login_proses'); ?>
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="text" class="form-control" id="email" name="username">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<!-- <table>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Login"></td>
	</tr>
</table>
 --></body>
</html>