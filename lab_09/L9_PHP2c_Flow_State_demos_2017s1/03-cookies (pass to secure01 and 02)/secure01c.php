<!DOCTYPE html>
<html lang="en">
<head><title>Secured Page 1 - Cookies</title>
<meta charset="utf-8" />
 <link rel="stylesheet" href="../php_styles.css" type="text/css" />
 </head>
<body>
<?php
  if (isset ($_COOKIE["user"])) {
    $user = $_COOKIE["user"];
    echo "<h2>Welcome: ", $user, "</h2>";
?>
	<h1>Secured Page 1 - Cookies</h1>
	<hr />
	<p>Sample data 1</p>
	<p><?php 
	   echo "<a href='secure02c.php'>Page 2</a>";
	?>
	<a href="logout03.php">Log out</a></p>
<?php
  } else {
    echo "<p class='red'>Please log in</p>";
   /* OR header ("location:login3.php"); */
  }
?>
<hr />
<p><a href="../index.html">Home</a></p>
</body>
</html>