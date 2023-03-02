<?php
require "function.php";

check_login();

    $id = $_SESSION['postID'];
    $delete = mysqli_query($con, "DELETE FROM POSTS WHERE id='$id'");

    $select = "select * from posts";
    $query = mysqli_query($con, $select);

    header("Location: profile.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>

</body>

</html>