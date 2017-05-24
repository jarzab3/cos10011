<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="php" />
    <meta name="keywords" content="php" />
    <meta name="author" content="Adam Jarzebak"  />

    <title>php</title>

</head>
<body>

<?php

include ("mathfunctions.php")

?>

<?php

    if(isset($_POST["number"])){
    $num = $_POST["number"];

    if (isPositiveInteger($num)){
    echo "<p>", $num, "! is", factorial ($num), ".</p>";
    }
    else {
    echo "<p> Please enter a positive integer.</p>";

    }
    }

    echo "<p> <a href='factorial_with_get.php'> Return to the Entry page</a></p>";

?>

</body>

</html>