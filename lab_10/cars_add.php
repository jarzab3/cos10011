<?php

require_once("settings.php");


$make = htmlspecialchars($_POST["carmake"]);
$model = trim($_POST["carmodel"]);
$price = trim($_POST["price"]);
$yom = trim($_POST["yom"]);


$sql_table = "cars";

$conn = @mysqli_connect(
    $host,
    $user,
    $pwd,
    $sql_db
);

if (!$conn) {
    echo "<p> Database connection error</p>";
} else {
    echo "<p> Database connection success</p>";

}


$query = "insert into $sql_table (make, model, price, yom) VALUES ('$make', '$model', '$price', '$yom')";

$result = mysqli_query($conn, $query);
if (!$result) {
    echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
} else {
    echo "<p class=\"ok\">Successfully added new car record</p>";

}

mysqli_close($conn);


?>