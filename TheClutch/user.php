<?php
include 'connect.php';
if (isset($_POST['submit'])){

    $name = $_POST['username'];
    $email =$_POST['userEmail'];
    $cName = $_POST['carName'];
    $cBrand= $_POST['carBrand'];
    $cPicture =$_POST['carPicture'];
    $cDesc = $_POST['carDesc'];

    $sql = "insert into `car_submissiontbl` (Username, User_Email, Car_Name	, Car_Brand, Car_Picture, Car_Desc)
    values ('$name','$email','$cName','$cBrand',' $cPicture','$cDesc')";
    $result = mysqli_query($con,$sql);

    if($result){
       // echo "data sulod";

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
                <input type="text" class="form-control" placeholder="Enter your Username." name="username">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email Adress." name="userEmail">
            </div>


            <div class="form-group">
                <label>Car Name</label>
                <input type="text" class="form-control" placeholder="Enter the car's name." name="carName">
            </div>


            <div class="form-group">
                <label>Car Brand</label>
                <input type="text" class="form-control" placeholder="Enter the car's Brand." name="carBrand">
            </div>


            <div class="form-group">
                <label>Car Image</label>
                <input type="text" class="form-control" placeholder="Upload an image of the car." name="carPicture">
            </div>


            <div class="form-group">
                <label>Car Description</label>
                <input type="text" class="form-control" placeholder="Describe the car you will be submitting." name="carDesc">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>

</body>

</html>