<?php
 session_start();
 if (isset($_POST["user"])) {
  $user = $_POST["user"];
  $pswd = $_POST["pswd"];
  $tries = $_POST["tries"];
  $limit=3;
  $scrt = "1234"; // database connect/query/close
  if ($pswd == $scrt) {
	$_SESSION ["user"] = $user;
	header ("location:secure01d.php");
  } else {
	$errm = "Invalid password";
    $tries++;
	if ($tries>$limit){
	header ("location:../index.html");
	}
  }
 } else {
  $user = "";
  $pswd = "";
  $errm = "";
  $tries = 0;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Log in - Sessions</title>
<meta charset="utf-8" />
  <link rel="stylesheet" href="../php_styles.css" type="text/css" /> </head>
<body>
<h1>Log in - Sessions</h1>
<hr />
<form method="post" action="login04.php" >
<p>Enter username:
<input type="text" name="user" 
value="<?php echo $user; ?>"
/></p>
<p>Enter password:
<input type="text" name="pswd" />
<span class="red"><?php echo $errm; ?></span>
</p>
<p><input type="hidden" name="tries" 
value="<?php echo $tries; ?>"
/><p>
<input type="submit" value="Log in" /></p>
</form>
<hr />
<p><?php echo $tries, " attempt(s) recorded"; ?></p>
<hr />
<p><a href="../index.html">Home</a></p>
</body>
</html>