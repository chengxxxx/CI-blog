<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.center{
			float: none;
			display: block;
			margin-top: 10%;
		}
		.row-margin{
			margin: 5%;
		}
	</style>
<body>
<div class="container-fluid center col-lg-3 bg-primary">
	<div class="row-fluid row-margin">
		<form action="http://127.0.0.1/news/admin.php/Login/admin_login" method="POST">
			<div class="input-group">
				<span class="input-group-addon">username</span>
				<input id="username" class="form-control" type="text" name="username" placeholder="username" required="required" />
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon">password</span>
				<input id="password" class="form-control" type="password" name="password" required="required" placeholder="password" />
			</div>
			<br>
			<div class="input-group">
				<label for="capatch"></label>
				<input id="capatch" class="form-control" type="text" name="capatch" required="required" placeholder="capatch" />
			</div>
			<br>
			<div class="input-group">
				<label for="login"></label>
				<button id="login" class="btn btn-default" type="submit">login</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>
