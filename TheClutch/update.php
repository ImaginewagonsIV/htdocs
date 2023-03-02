<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "Select * from `car_submissiontbl` where id = $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Username'];
$email = $row['User_Email'];
$carName = $row['Car_Name'];
$carBrand = $row['Car_Brand'];
$carImg = $row['Car_Picture'];
$carDesc = $row['Car_Desc'];


if (isset($_POST['submit'])){

    $name = $_POST['username'];
    $email =$_POST['userEmail'];
    $cName = $_POST['carName'];
    $cBrand= $_POST['carBrand'];
    $cPicture =$_POST['carPicture'];
    $cDesc = $_POST['carDesc'];

    $sql = "update `car_submissiontbl` set ID = $id, Username='$name',User_Email='$email', Car_Name='$cName',
    Car_Brand='$cBrand',Car_Picture='$cPicture',Car_Desc='$cDesc'
    where id = $id";

    $result = mysqli_query($con,$sql);  

    if($result){
       // echo "data updated";

       header('location: Showroom.php');
    }else{
        die(mysqli_error($con));
    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Submit A car Showcase</title>
</head>

<body>

    <div class="container">

        <form method="post">

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter your Username." name="username"
                value = <?php echo $name; ?>>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email Adress." name="userEmail"
                value = <?php echo $email; ?>>
            </div>


            <div class="form-group">
                <label>Car Name</label>
                <input type="text" class="form-control" placeholder="Enter the car's name." name="carName"
                value = <?php echo $carName; ?>>
            </div>


            <div class="form-group">
                <label>Car Brand</label>
                <input type="text" class="form-control" placeholder="Enter the car's Brand." name="carBrand"
                value = <?php echo $carBrand; ?>>
            </div>


            <div class="form-group">
                <label>Car Image</label>
                <input type="text" class="form-control" placeholder="Upload an image of the car." name="carPicture"
                value = <?php echo $carImg; ?>>
            </div>


            <div class="form-group">
                <label>Car Description</label>
                <input type="text" class="form-control" placeholder= "Describe the car you will be submitting." name="carDesc"
                value = <?php echo $carDesc; ?>>
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>

    </div>

</body>

</html>