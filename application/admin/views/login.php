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
<body>
<div class="container">
	<div>
		<form action="http://127.0.0.1/news/admin.php/Login/admin_login" method="POST">
			<input name="username" type="text" autofocus="autofocus" required="required" placeholder="username">
			<input name="password" type="password" required="required" placeholder="password">
			<input name="capatch" type="text" placeholder="capatch">
			<button type="submit">LOGIN</button>
		</form>
	</div>
</div>
</body>
</html>
