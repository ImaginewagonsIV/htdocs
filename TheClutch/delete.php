<?php 
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `car_submissiontbl` where id=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        //echo "deleted successfuly";
        header('location: showroom.php');
    }else{
        die(mysqli_error($con));
    }
}