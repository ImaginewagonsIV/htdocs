<!DOCTYPE html>
<head>
    <title>Start Quizz now!</title>
    <link href="style.css" rel = "stylesheet" type = "text/css" >
</head>
<body>

    <?php
        if(!empty($_POST)){

            $ans1 = $_POST['ans1'];
            $ans2 = $_POST['ans2'];
            $correct = 0;
            if($ans1 == 'break'){
                $correct++;
            } 
            else{
                echo "<p> Incorrect.</p>";
            }

            if($ans2 == 'while'){
                $correct++;
            } 
            else{
                echo "<p> Incorrect.</p>";
            }
            
        echo "<p> You got $correct correct! </p>";
        $grade = ($correct / 2) * 100;
        echo "<p> Your grade is:  $grade";
        }else{
            echo "<p> Please take the quizz.</p>";
        }
    

    ?>
    <h1>Welcome to the ICS2606 Quiz!</h1>
    <form action = "quiz.php" method = "post">

        <div class="question_1">
            <p>_____ statement ends execution of the current for, while, do-while, or switch structure.</p>
        <input type="text" name="ans1">
        </div>

       <div class="question_2">
        <p>_____ loop tells the PHP to execute the nested statements repeatedly, as long as the while expression evaluates to TRUE.</p>
        <input type="text" name="ans2">
       </div>

       <div class="question_3">
       <p>_____is an array of environment information</p>
       <input type="radio" name="question3" value="answa">A.) $_ENV <br>
       <input type="radio" name="question3" value="answb">B.) $_COOKIE <br>
       <input type="radio" name="question3" value="answc">C.) $_FILES <br>
       <input type="radio" name="question3" value="answd">D.) $GLOBALS <br>
       </div>

       <div class="question_4"> 
       <p>_____ removes the leading slashes for escape sequences in strings</p>
       <input type="radio" name="question4" value="answa">A.) trim ( ) <br>
       <input type="radio" name="question4" value="answb">B.) preg_match ( ) <br>
       <input type="radio" name="question4" value="answc">C.) stripslashes ( ) <br>
       <input type="radio" name="question4" value="answd">D.) remove ( ) <br>
       </div>

       <div class="question_5"> 
       <p>$_POST contains values of forms that are submitted using the post method</p>
       <input type="radio" name="question5" value="answa"> True <br>
       <input type="radio" name="question5" value="answb"> False <br>

       <div class="question_6"> 
       <p>The for loop truth expression is checked at the end of each iteration instead of in the beginning.</p>
       <input type="radio" name="question6" value="answa"> True <br>
       <input type="radio" name="question6" value="answb"> False <br>

       </div>


       <div class="submit_area">    
        <input type="submit" id="submit">
       </div>


       
    </form>
</body>
</html>