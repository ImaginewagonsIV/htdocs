<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Gallery</title>
   <link rel="stylesheet" href="stylesheet.css">
   <link rel="stylesheet" href="gallerystyle.css">
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
         <li><a href="Gallery.php">Gallery</a></li>
         <li><a class="active" href="Submission.php">Submission</a></li>
      </ul>
   </nav>

   <div class="container">
      <?php
      include 'connection.php';

      if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['image'])
      && isset($_POST['description'])) {
         
         $id = $_POST['id'];
         $name = $_POST['username'];
         $email = $_POST['email'];
         $title = $_POST['title'];
         $image = $_POST['image'];
         $description = $_POST['description'];

         $sql = "insert into `submission_tbl` (ID, Username, Email, Title, Image, Post_description) values ($id, '$name', '$email',
        '$title', '$image',  '$description') ";

         $result = mysqli_query($con,$sql);
      }

      ?>
      <form method="post" action="Submission.php" enctype="multipart/form-data">


      <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" placeholder="Enter your Username." name="id">
         </div>


         <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="What's your Username?" name="username">
         </div>

         <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="What's your Email Adress?" name="email">
         </div>


         <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="What's the title?" name="title">
         </div>


         <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" placeholder="Submit and Image" name="image">

         </div>


         <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" placeholder="Upload an image of the car." name="description">
         </div>


         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>

   </div>

</body>

</html>