<?php
include 'connection.php';

$sql = "Select * from `submission_tbl`";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Username'];
$email = $row['Email'];
$title = $row['Title'];
$image = $row['Image'];
$post_description = $row['Post_description'];


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

</head>

<body>
<?php
echo $name;
echo '<br>';
echo $email;
echo '<br>';
echo $title;
echo '<br>';
echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'"/>';
echo '<br>';
echo $post_description;
?>
    
</body>

</html>