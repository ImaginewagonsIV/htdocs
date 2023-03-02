<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form method="GET">
    <input type="text" name = "pilgrim">
<button>Choose Pilgrim</button>
</form>
<body>
    <?php
    //String
    $name = "The Pilgrims";

    //Integer
    $number = 7;

    //Float
    $number = 7.5;

    //Boolean
   $Boolean = true;
   $Boolean = false;

   //Array

    $pilgrims =  array("The Cruator", "The Hunter", "The Librarian", "The Wanderer", "The Caretaker", "The Spirit Walker", "The Gardener");
   

    if($pilgrims[$_GET['pilgrim']] == null){
        echo "Please choose a pilgrim";
    }else
    
    echo "You have chosen, ". $pilgrims[$_GET['pilgrim']];
    ?>
</body>
</html>