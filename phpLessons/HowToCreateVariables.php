<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method = "GET">
    <input name = "character" type="text">
    <Button >Submit</BUTton>
</form>
    <?php
    // use '$' to declare a variable
    // Declaring A String
        $name = $_GET['character'];

        echo $name." Goes all out!"; 

        // this is a comment btw.
    ?>
</body>
</html>