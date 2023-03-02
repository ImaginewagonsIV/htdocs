<?php
require "function.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);


	$query = "select * from users where username = '$username' && password = '$password' limit 1";

	$result = mysqli_query($con, $query);

	if (mysqli_num_rows($result) > 0) {

		$row = mysqli_fetch_assoc($result);

		$_SESSION['logged'] = ($row);

		header("Location: profile.php");
		die;
	} else {
		$error = "<span style='color: red;'>Wrong Username or Password!</span>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="LogIn.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title>Document</title>
</head>

<body>
	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>

			<?php if (empty($_SESSION['info'])) : ?>
				<a href="login.php"><button class="button2"> <span class="sign"> Login </button></a>
				<a href="signup.php"><button class="button2"> <span class="sign"> Sign Up</span></button></a>
			<?php else : ?>
				<a href="logout.php"><button class="button2"> <span class="sign"> Log out</span></button></a>
			<?php endif; ?>
		</ul>
	</nav>

	<div class="login">
		<div class="login-box">

			<h2>Welcome</h2>
			<p>Enter your details</p>

			<?php

			if (!empty($error)) {
				echo $error;
			}
			?>

			<form method="post">
				<div class="box">
					<i class="material-icons">person</i>
					<input type="username" name="username" placeholder="Your username" required>
				</div>

				<div class="box">
					<i class="material-icons">lock</i>
					<input type="password" name="password" placeholder="Your Password" required>
				</div>

				<input type="submit" value="Log In">

			</form>

		</div>
	</div>
</body>