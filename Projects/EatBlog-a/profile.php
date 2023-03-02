<?php
require "function.php";

check_login();

if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['action']) && $_POST['action'] == 'delete') {
	//Delete profile
	$id = $_SESSION['logged']['id'];
	$query = "delete from users where id = '$id' limit 1";
	$result = mysqli_query($con, $query);

	if (file_exists($_SESSION['logged']['image'])) {
		unlink($_SESSION['logged']['image']);
	}

	header("Location: logout.php");
	die;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['username'])) {
	//profile edit
	$image_added = false;
	if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
		$folder = "uploads/";
		if (!file_exists($folder)) {
			mkdir($folder, 0777, true);
		}
		$image = $folder . $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], $image);

		if (file_exists($_SESSION['logged']['image'])) {
			unlink($_SESSION['logged']['image']);
		}

		$image_added = true;
	}

	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);
	$firstname = ($_POST['firstname']);
	$lastname = ($_POST['lastname']);
	$id = $_SESSION['logged']['id'];

	if ($image_added == true) {
		$query = "update users set username = '$username', password='$password', firstname = '$firstname', lastname = '$lastname', image = '$image' where id ='$id' limit 1";
	} else {
		$query = "update users set username = '$username', password='$password', firstname = '$firstname', lastname = '$lastname' where id ='$id' limit 1";
	}

	$result = mysqli_query($con, $query);

	$query = "select * from users where id = '$id' limit 1";
	$result = mysqli_query($con, $query);

	if (mysqli_num_rows($result) > 0) {
		$_SESSION['logged'] = mysqli_fetch_assoc($result);
	}

	header("Location: profile.php");
	die;
}
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['tag'])) {
	//posting
	$image = "";
	if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
		$folder = "uploads/";
		if (!file_exists($folder)) {
			mkdir($folder, 0777, true);
		}
		$image = $folder . $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], $image);
	}

	$user_id = $_SESSION['logged']['id'];
	$tag = addslashes($_POST['tag']);
	$title = addslashes($_POST['title']);
	$post = addslashes($_POST['post']);
	$date = date('Y-m-d H:i:s');


	$query = "insert into posts (user_id,tag,title,post,date,image) values ('$user_id','$tag','$title','$post','$date','$image')";

	$result = mysqli_query($con, $query);

	header("Location: Home_loggedin.php");
	die;
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    /> -->
	<title>Eat Blog-a</title>
	<link rel="stylesheet" href="profile.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
	<nav>
		<ul>
			<li><a href="Home_loggedin.php">Home</a></li>

			<li><a href="profile.php">Profile</a></li>

			<a href="logout.php"><button class="button2"> <span class="sign"> Log out</span></button></a>

		</ul>
	</nav>


	<div class="body">
		<?php if (!empty($_GET['action']) && $_GET['action'] == 'edit') : ?>
			<div>
				<div class="header">
					<h3>&nbsp;<h3>
				</div>

				<div class=login>

					<div class=edit-box>

						<form class="profile" method="post" enctype="multipart/form-data">
							<img name="profilepic" class="postPic" src="<?php echo $_SESSION['logged']['image'] ?>">
							<p>Upload Profile Picture</p><br>
							<div class="profile-upload">
								<input type="file" name="image"><br>
							</div>
							<div class="box">
								<label>
									<p>Firstname</p>
								</label>
								<i class="material-icons">person</i>
								<input value="<?php echo $_SESSION['logged']['firstname'] ?>" type="text" name="firstname" placeholder="First Name" required><br>
							</div>
							<div class="box">
								<label>
									<p>Lastname</p>
								</label>
								<i class="material-icons">person</i>
								<input value="<?php echo $_SESSION['logged']['lastname'] ?>" type="text" name="lastname" placeholder="Last Name" required><br>
							</div>
							<div class="box">
								<label>
									<p>Username</p>
								</label>
								<i class="material-icons">account_circle</i>
								<input value="<?php echo $_SESSION['logged']['username'] ?>" type="text" name="username" placeholder="Your username" required><br>
							</div>
							<div class="box">
								<label>
									<p>Password</p>
								</label>
								<i class="material-icons">lock</i>
								<input value="<?php echo $_SESSION['logged']['password'] ?>" type="text" name="password" placeholder="Your Password" required><br>
							</div>

							<button class="button">Save</button>
							<a href="profile.php">
								<button type="button" class="button">Cancel</button>
							</a>
						</form>
					</div>
				</div>
			</div>

		<?php elseif (!empty($_GET['action']) && $_GET['action'] == 'delete') : ?>
			<div class="header">
				<h3>&nbsp;<h3>
			</div>

			<div>

				<div class=login>

					<div class=edit-box>

						<form class="profile" method="post">
							<img name="profilepic" class="postPic" src="<?php echo $_SESSION['logged']['image'] ?>">
							<br>
							<p> Are you sure you want to delete your profile? </p> <br>

							<div class="box">
								<?php echo "Name: " . $_SESSION['logged']['firstname'] . " " . $_SESSION['logged']['lastname'] ?><br>
							</div>

							<div class="box">
								<?php echo "Username: " . $_SESSION['logged']['username'] ?><br>
							</div>

							<input type="hidden" name="action" value="delete">

							<button class="button">Delete</button>
							<a href="profile.php">
								<button type="button" class="button">Cancel</button>
							</a>
						</form>

					</div>
				</div>
			</div>

		<?php else : ?>
			<div class="header">
				<h3> &nbsp;<h3>
			</div>
			<div class="row">
				<div class="column">
					<div class="card1">
						<div><img name="profilepic" class="bigIcon" src="<?php echo $_SESSION['logged']['image'] ?>"></p>
							<div style="text-align:center;">
								<p class="about">About me</p>
								<p>Name: <?php echo $_SESSION['logged']['firstname'] ?> <?php echo $_SESSION['logged']['lastname'] ?></p>
								<p>Username: <?php echo $_SESSION['logged']['username'] ?></p>
								<form method="post" enctype="multipart/form-data">

									<a href="profile.php?action=edit"><button class="button" type="button">Edit Profile</button></a>
									<a href="profile.php?action=delete"><button class="button" type="button">Delete Profile</button></a>

								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Automatic Posting -->

				<div class="column">

					<div>
						<?php
						$id = $_SESSION['logged']['id'];
						$query = "select * from posts where user_id = '$id' order by date limit 8";

						$result = mysqli_query($con, $query);
						?>
						<?php if (mysqli_num_rows($result) > 0) : ?>

							<div>
								<?php while ($row = mysqli_fetch_assoc($result)) : ?>

									<?php
									$user_id = $row['user_id'];
									$query = "select username, image from users where id ='$user_id' limit 1";
									$res = mysqli_query($con, $query);

									$user_row = mysqli_fetch_assoc($res);
									?>

									<div class="card1">
										<div>
											<table>
												<tr>
													<div class="profile"><img class="icon" src="<?= $user_row['image'] ?>"></div>
													<h5>Posted by: <?php echo $_SESSION['logged']['username'] ?> <br>
														<?php echo date("jS M, Y", strtotime($row['date'])) ?>
													</h5>
													<h3><?php echo $row['tag'] ?>: <?php echo $row['title'] ?></h3>
												</tr>
											</table><br>



											<?php if (file_exists($row['image'])) ?>

											<div class="img" style="text-align:center;">
												<img class="postPic" src="<?= $row['image'] ?>">
											</div><br>

											<?php if (!empty($POST['post'])); ?>
											<div style="text-align:center; padding-left:50px; padding-right:50px;"><?php echo $row['post'] ?></div>

											<form style="padding-right:80px; padding-bottom:30px;">
												<a href="deletepost.php?id=<?php echo $row['id'] ?>"><button class="button2" type="button">Delete</button></a>
											</form>
										</div>
									</div><br>
								<?php endwhile; ?>
							</div>

					</div>

				<?php endif; ?>
				</div>
			</div>
	</div>
<?php endif; ?>
</body>

</html>