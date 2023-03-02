<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //addition
    echo 5 + 5;
    //subtraction
    echo 5 - 5;
    //multiplication
    echo 5 * 5;
    //division
    echo 5 / 5;
    //modulo
    echo 5 % 5;
     //modulo
    echo 5 ** 5;
    ?>


    <form method="GET">

        <p>A Boss has appeared. It has 1000 health. What should you do?</p>
        <p>Type how much damage you want to deal to an attack?</p>
        <input type="number" name = "damage_inflicted">
        <button>ATTACK!</button>

    </form>
        <?php 
//BOSS HP
        $Boss_health = 1000;
//DAMAGE DEALT
        $damage_Dealt = $_GET['damage_inflicted'];
//CALCUALTED DAMAGE DEALTET
         $damage_Dealt_To_Boss =  $Boss_health - $damage_Dealt;
// DAMAGE INPUT RESPONSE

    if( $damage_Dealt < 1000 && $damage_Dealt > 0){
        echo "You have dealt $damage_Dealt to the boss. Keep it up!";
        echo " Boss remaining HP:  $damage_Dealt_To_Boss";
        exit();
    }else if ( $damage_Dealt >= 1000 && $damage_Dealt <=1500){
        echo "You have dealt $damage_Dealt to the boss. One shot!";
        echo " Boss remaining HP:  $damage_Dealt_To_Boss";
    }
    else if ( $damage_Dealt > 1500){
        echo "You have dealt $damage_Dealt to the boss. OBLITERATED! You really didn't show mercy huh Pilgrim?";
        echo " Boss remaining HP: OBLITERATED";
    }
    else if ($damage_Dealt == 0){
        echo "Enough idle, We wont go anywhere if this continues.";
    }

    
        

      
        
        
        ?>
    </form>
</body>
</html>