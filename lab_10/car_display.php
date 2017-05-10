<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="php"/>
    <meta name="keywords" content="php"/>
    <meta name="author" content="Adam Jarzebak"/>


    <title>database lab09</title>

</head>

<body>

<nav>
    <a href="addcar.html">Add Car</a> |
    <a href="car_display.php">Display Cars</a> |
    <a href="cars_search.php">Search for cars</a> |
</nav>

<h2>Database</h2>

<?php

require_once("settings.php");

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

$sql_table = "cars";

$query = "select make, model, price FROM cars ORDER BY make, model";

$result = mysqli_query($conn, $query);

if (!$result) {
    echo "<p>Something is wrong with", $query, "</p>";

} else {
    echo "<table border=\"1\">\n";
    echo "<tr>\n "
        . "<th scope=\"col\">Make</th>\n "
        . "<th scope=\"col\">Model</th>\n "
        . "<th scope=\"col\">Price</th>\n "

        . "</tr>\n ";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>\n ";
        echo "<td>", $row["make"], "</td>\n";
        echo "<td>", $row["model"], "</td>\n";
        echo "<td>", $row["price"], "</td>\n";
        echo "</tr>\n ";
    }
    echo "</table>\n ";

    mysqli_free_result($result);

    mysqli_close($conn);
}

?>



</body>

</html>

