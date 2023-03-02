<!DOCTYPE html>
<head>
     <title>PHP Code Blocks</title>
    <meta http-equiv=”content-type” content=”text/html”; charset=iso-8859-1 />
</head>
<body>

    <p> This is a paragraph </p>

    <?php
    echo "Hello This is PHP and this is the basic PHP code";
    ?>
    
    <p> This is also a paragraph </p>

    <?=
     "This is PHP delimiter"
    ?>

    <?php
    //This line comment takes up an entire line or also called as single line commment
    #This is another way of creating a line comment
    /* This is another way of creating a block comment */
    // php is white space insensitive, bellow is an example of white space
    $four = 2 + 2; // single spaces
    ?>

    <p>
    <?php echo "Its more in the <strong> Philippines </strong>.", " Its more Fun in <strong> Switzerland </strong>"; ?>

    <h1>Multiple Script Section</h1>

        <h2>First Script Section</h2>
            <?php echo "<p>Output from the first script section.</p>"; ?>
        <h2>Second Script Section</h2>
            <?php echo "<p>Output from the second script section.</p>"; ?>

    
    <?php
      // PHP is case Sensitive
        $capital = 67;
    print(" capital is $capital<br>");
    print("Variable CaPiTaL is $CaPiTaL<br>");
    ?>

    <p>

    <?php
        $x = 4;
    function assignx ()
    {
    $x = 0;
    print "\$x inside function is $x. ";
    }
    assignx();
    print "\$x outside of function is $x. ";
    ?>

    <p>

    <?php
    // multiply a value by 10 and return it to the caller
    function multiply ($value)
    {
    $value = $value * 10;
    return $value;
    }
    $retval = multiply (10);
    print "Return value is $retval\n";
    ?>

    <p>

    <?php
    $somevar = 15;
    function addit()
    {
    GLOBAL $somevar;
    $somevar++;
    print "Somevar is $somevar";
    }
    addit();
?>
<p>
    <?php
    function keep_track()
    {
    STATIC $count = 0;
    $count++;
    print $count;
    print " ";
    }
    keep_track();
    keep_track();
    keep_track();
?>

<p>

<?php
$WorldVar = "World";
$SunVar = "Sun";
$MoonVar = "Moon";
$WorldInfo = 92897000;
$SunInfo = 72000000;
$MoonInfo = 3456;

echo "<p>Hello $WorldVar !<br />";
echo "The $WorldVar is $WorldInfo miles from the $SunVar.<br />";
echo "Hello ", $SunVar, " ! <br />";
echo "The ", $SunVar, "’s core temperature is approximately $SunInfo degrees Fahrenheit.<br />";
echo " Hello ",$MoonVar, "!<br />";
echo "The $MoonVar is $MoonInfo miles in diameter. </p>";
?>

</body>

</html>