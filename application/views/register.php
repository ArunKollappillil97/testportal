<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
				text-align: center;
				margin-top: 10%;
			}
		</style>
	</head>
	<body>
		
		<form method="POST" action="<?php echo base_url();?>index.php/register/validation">
			<h1>eduChamp</h1>
			<input type="text" placeholder="Username" name="user_name" value="<?php echo set_value('user_name');?>" /><br>
			<span><?php echo form_error('user_name');?></span>
			<input type="text" placeholder="Email" name="user_email" value="<?php echo set_value('user_email');?>" /><br>
			<span><?php echo form_error('user_email');?></span>
			<input type="password" placeholder="Password" name="user_password" value="<?php echo set_value('user_password');?>" /><br>
			<span><?php echo form_error('user_password');?></span>
			<input class="primary" type="submit" name="register" value="Register" />
			<a class="button" href="<?php echo base_url();?>index.php/login">Login</a>
		</form>
	</body>
</html>