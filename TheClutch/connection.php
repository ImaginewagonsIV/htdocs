<?php

$con=new mysqli('localhost','root','','artdojo_crud');

if(!$con){
    die(mysqli_error($con));
}
?>