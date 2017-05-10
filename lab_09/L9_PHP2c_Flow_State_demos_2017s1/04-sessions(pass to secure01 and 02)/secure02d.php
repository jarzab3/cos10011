<?php 
  session_start ();
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Secured Page 2 - Sessions</title>
<meta charset="utf-8" />
 <link rel="stylesheet" href="../php_styles.css" type="text/css" />
 </head>
<body>
<?php
  if (isset ($_SESSION["user"])) {
    $user = $_SESSION["user"];
    echo "<h2>Welcome: ", $user, "</h2>";
?>
	<h1>Secured Page 2 - Sessions</h1>
	<hr />
	<p>Sample data 2</p>
	<p><?php 
	   echo "<a href='secure01d.php'>Page 1</a>";
	?> 
	<a href="logout04.php">Log out</a></p>
<?php
  } else {
    echo "<p class='red'>Please log in</p>";
	/* OR header ("location:login4.php"); */
  }
?>
<hr />
<p><a href="../index.html">Home</a></p>
</body>
</html>