<?php
session_start();

if(!$_SESSION["loged"]){
    if (isset($_POST['username']) && isset($_POST['password'])){

 	    if($_POST['username'] == "admin" && $_POST['password']=="password"){

		    $_SESSION["loged"] =$_POST['username'] .$_POST['password'];
	        header('Location: controller.php');

        }else {

            echo '<div class="alert alert-danger"> username or password is wrong! </div>';

        }
    }
}else {

	header('Location: controller.php');

    exit();

}

?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" >
<div class="panel-heading">
   <div class="panel-title">Please Sign In Double Submit Cookies</div>
</div>
Username:admin<br>
Password:password
<div style="padding-top:30px" class="panel-body" >

<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

<form id="loginform" class="form-horizontal" role="form" method="post" action="index.php">
   
   <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username">
   </div>
   
   <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
   </div>
   
   <div style="margin-top:10px" class="form-group">
      <div class="col-sm-12 controls">
         <input id="btn-login"   class="btn btn-success" type="submit" value="login">
      </div>
   </div>

</form>