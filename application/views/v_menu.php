<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <?php 
						$old_otoritas = "";
						foreach ($otoritas as $row): ?>
						<?php if ($row->otoritas != $old_otoritas){
							$old_otoritas = $row->otoritas;
							echo "---------------<br>";
						} ?>
						<li><a href="<?php echo base_url().$row->controller ?>"><i class="glyphicon glyphicon-record"></i> <?php echo $row->tulisan ?></a></li>
					<?php endforeach ?>
                    <!-- <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                        </a>
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
</body>
</html>