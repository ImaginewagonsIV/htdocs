<!DOCTYPE html>
<head>
    <title>Login</title>
    <link href="style.css" rel = "stylesheet" type = "text/css" >
</head>
<body>
    <div id = "main"></div>
    <h2>Login</h2>
    <form method = "post">
        <label> User Name</label>
        <input type="text" name = "username" class = "text" placeholder="User Name" autocomplete = "off" required><br>

        <label> Password</label>
        <input type="password" name = "password" class = "text" placeholder="Password" autocomplete = "off" required><br>
            
        <button type="submit" name = "submit" >Login</button>
    </form>
    </body>
</html>

<?php 
    
    if (isset($_POST['submit'])) {
        $un = $_POST['username'];
        $pw = $_POST['password'];

        if($un =='ICS2608' && $pw == 'correct'){
            header ("location: homepage.php");
            exit();
        } 
        else
            echo "Invalid Username or Password";
    }
?>