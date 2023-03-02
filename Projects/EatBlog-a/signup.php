<?php
	require "function.php";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = addslashes($_POST['username']);
		$password = addslashes($_POST['password']);
		$date = date('Y-m-d H:i:s');
		$firstname = ($_POST['firstname']);
		$lastname = ($_POST['lastname']);


		$query = "insert into users (username,password,date,firstname,lastname) 
		values ('$username','$password','$date','$firstname','$lastname')";

		$result = mysqli_query($con,$query);

		header("Location: login.php");
		die;
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="LogIn.css">
    
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title>Sign up</title>
</head>
<body>
	<nav> 
		<ul>
			<li><a href="home.php">Home</a></li>

			<a href="login.php"><button class = "button2"> <span class = "sign"> Login </button></a>
			<a href="signup.php"><button class = "button2"> <span class="sign"> Sign Up</span></button></a>
		</ul>
    </nav>
	
	<div class="signup"> 
        <div class="signup-box">
            <h2>Sign Up for Free</h2>
			<p>It's quick and easy</p>
			
			<form method="post" id = "form">
				<div class ="box">
					<i class="material-icons">person</i>
					<input type = "text" name = "firstname" placeholder = "First Name" id = "First_Name" required>
				</div>
			
				<div class = "box">
					<i class="material-icons">person</i>
					<input type = "text" name = "lastname" placeholder = "Last Name" id = "Last_Name" required>
				</div>
			
                <div class="box">
                    <i class="material-icons">account_circle</i>
                    <input type="text" name="username" placeholder="Your username" id = "User_Name" required>
                </div>
            
                <div class="box">
                    <i class="material-icons">lock</i>
                    <input type="password" name="password" placeholder="Your Password" id = "Password" required>
                </div>

                <input type="submit" id = "submit" value="Sign Up" onclick="return validateForm();"></input>
           
            </form>

        </div>
    </div>
	<script src = "signup_validation.js" defer> </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>