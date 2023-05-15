<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="test.css?v=<?php echo rand(); ?>">
	<title>Animated Login Page</title>
</head>
<body>
	<div class="square">
		<i style="--clr:#16f050;"></i>
		<i style="--clr:#65ec3b;"></i>
		<i style="--clr:#fffd44;"></i>
		<div class="login">
			<h2>Login</h2>
			<div class="inputBx">
				<input type="text" placeholder="Username">
			</div>
			<div class="inputBx">
				<input type="password" placeholder="Password">
			</div>
			<div class="inputBx">
				<input type="submit" value="Sign in">
			</div>
			<div class="links">
				<a href="#">Forget Password</a>
				<a href="#">Signup</a>
			</div>
		</div>
	</div