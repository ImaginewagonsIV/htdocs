<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Post</title>
</head>

<?php
include 'connection.php';
if (isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "delete from `submission_tbl` where ID = $id ";
    $result = mysqli_query($con,$sql);
    header("location: Gallery.php");
}
?>
<body>

    <h1> Please enter the Id that you want to delete </h1>

    <form method="post" action="remove.php">
        <div class="form-group">
            <label>ID number</label>
            <input type="text" class="form-control" placeholder="Enter the Id you want to remove." name="id">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="remove">Remove</button>
        </div>
</form>

<a href= "Gallery.php"> Cancel </a>

</body>

</html>