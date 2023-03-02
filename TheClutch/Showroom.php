<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Showroom</title>
      <link rel="stylesheet" href="stylesheet.css">
      <link rel="stylesheet" href="showroomstyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      

      
   </head>
   <body>
      <nav>
         <div class="logo">
            The Clutch
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="Homepage.html">Home</a></li>
            <li><a class="active" href="Showroom.html">Showroom</a></li>
            <li><a href="Gallery.html">Gallery</a></li>
            <li><a href="AboutUs.html">About us</a></li>
            <li><a href="Feedback.html">Feedback</a></li>
         </ul>
      </nav>
   
      <div class="container" id="submitCar">
         <button class="btn btn-primary my-5" id="submit"><a href ="user.php">Submit a car to showcase here!</a> 
         </button>
      </div>

      <div class ="container">

         <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">UserID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Car Name</th>
                <th scope="col">Car Brand</th>
                <th scope="col">Car Image</th>
                <th scope="col">Car Description</th>
                <th scope="col">Operation</th>
              </tr>
            </thead>
            <tbody>

               <?php
               $sql="Select * from `car_submissiontbl`";
               $result = mysqli_query($con,$sql);
               if($result){
                 while ($row =mysqli_fetch_assoc($result)){
                  $id = $row['ID'];
                  $name = $row['Username'];
                  $email = $row['User_Email'];
                  $cName = $row['Car_Name'];
                  $carBrand = $row['Car_Brand'];
                  $carImg = $row['Car_Picture'];
                  $carDesc = $row['Car_Desc'];
                  echo'<tr>
                  <th scope ="row">'.$id.'</th>
                  <td> '.$name.'</td>
                  <td> '.$email.'</td>
                  <td> '.$cName.'</td>
                  <td> '.$carBrand.'</td>
                  <td> '.$carImg.'</td>
                  <td> '.$carDesc.'</td>
                  <td>
                  <button><a href="update.php? updateid='.$id.'">Update</a></button>
                  <button><a href="delete.php?deleteid='.$id.' "> Delete</a></button>
                  </td>
                  </tr>' ;
                  
                 }
                  
               }
               ?>
           

            </tbody>
          </table>

      </div> 
      
   </body>
</html>