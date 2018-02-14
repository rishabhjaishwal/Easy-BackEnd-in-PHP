<?php include("meta.php");?>
<?php include("lib.php");?>
<?php include("nav.php");?>
<div class="container-fluid">
	<div class="row">
    	<div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        <div class="panel panel-header w3-center w3-teal w3-margin-top  ">
        	<b class="w3-text-white">Admin Login</b>
        </div>
        <div class="panel panel-body ">
       		<form action="adminpanel/chklogin.php" method="post" class="form-group">
            	<label class="w3-text-teal">USERNAME<span class="fa fa-user"></span></label><p><input type="text" class="form-control" name="user" maxlength="15" required></p>
                <label class="w3-text-teal">PASSWORD<span class="fa fa-key"></span></label><p><input type="password" class="form-control" name="pass" required></p>
                <p class="w3-center"><input type="submit" class="btn btn-group-lg  w3-teal" value="Login"></p>
            </form>
        </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>
