<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('index.php/c_loginwalimurid/tambahIdLogin'); ?>
<table style="margin:20px auto;">
			<tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
<?php echo form_close(); ?>
</body>
</html>