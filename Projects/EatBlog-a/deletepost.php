<?php
require "function.php";

check_login();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION['postID']= $id;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="fillerHeader">
        <h3>&nbsp;<h3>
    </div>
    

    <div class=deleteBg>

        <div class=edit-box>

            <h1>Delete this post?</h1>

            <a href="deletepostconfirmed.php"><button class="button" type="button">Yes</button></a>

            <a href="profile.php"><button class="button" type="button">Cancel</button></a>

        </div>
    </div>
</body>

</html>