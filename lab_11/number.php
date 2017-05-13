<?php
/**
 * Created by Adam Jarzebak.
 * User: adam
 * Date: 13/5/17
 * Time: 2:30 PM
 */


session_start();
if (!isset ($_SESSION["number"])) {
    $_SESSION["number"] == 0;

}
$num = $_SESSION["number"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Car Form</title>

    <meta charset="utf-8" />
    <meta name="description" content="Lab 10"  />
    <meta name="keywords" content="PHP, File, input, output" />
    <link rel="stylesheet" href="addcar.css" type="text/css" />


</head>
<body>
<h1> Creating Web Applications - PHP Session Lab </h1>

<?php
echo "<p> The number is ", $num, "</p>";
?>

<p><a href="numberup.php"> Up &#x2191; </a></p>
<p><a href="numberdown.php"> Down &#x2193; </a></p>
<p><a href="numberreset.php"> Reset </a></p>

</body>

</html>


