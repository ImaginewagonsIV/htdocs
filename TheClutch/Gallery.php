<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Gallery</title>
   <link rel="stylesheet" href="gallerystyle.css">
   <link rel="stylesheet" href="stylesheet.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
   <nav>
      <div class="logo">
         Art Dojo
      </div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
      </label>
      <ul>
         <li><a href="Homepage.html">Home</a></li>
         <li><a class="active" href="Gallery.php">Gallery</a></li>
         <li><a href="Submission.php">Submission</a></li>
      </ul>
   </nav>

   <?php


   include 'connection.php';
   $sql = "Select * from `submission_tbl`";
   $result = mysqli_query($con, $sql);

   while ($row =  mysqli_fetch_assoc($result)) {

      $name = $row['Username'];
      $email = $row['Email'];
      $title = $row['Title'];
      $image = $row['Image'];
      $post_description = $row['Post_description'];

      echo $name;
      echo '<br>';
      echo $email;
      echo '<br>';
      echo $title;
      echo '<br>';
      echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '"/>';
      echo '<br>';
      echo $post_description;
   }
   ?>
   <a href="remove.php">Remove </a>

   <h1>Test</h1>
   
   <div class="parent-div">
      <h1>Test</h1>
      <div class="container">
         <h1>test</h1>
      </div>
   </div>



</body>

</html>