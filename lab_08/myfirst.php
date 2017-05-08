<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<h1>My first php website</h1>

<?php
    $marks = array(85, 85, 95);
    $marks[1] = 90;
    $ave = ($marks[0] + $marks[1] + $marks[2]);
    if ($ave >=50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>The average score is $ave. You $status</p>"
?>

</body>
</html>

