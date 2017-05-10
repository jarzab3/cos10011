<?php
 if (isset($_POST["user"])) {
  $user = $_POST["user"];
  $pswd = $_POST["pswd"];
  $tries = $_POST["tries"];
  $limit=3;
  $secret = "1234"; // database connect/query/close
  if ($pswd == $secret) {
	header ("location:secure01a.php");
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
<head><title>Log In - Hidden Fields</title>
<meta charset="utf-8" />
  <link rel="stylesheet" href="../php_styles.css" type="text/css" /> 
</head>
<body>
<h1>Log in - Hidden Fields  - Hidden Fields 'tries' (Data passed to this page only)</h1>
<hr />
<form method="post" action="login01.php" >
<p>Enter username:
<input type="text" name="user" 
value="<?php echo $user; ?>"
/></p>
<p>Enter password:
<input type="text" name="pswd" />
<span class="red"><?php echo $errm; ?></span>
</p>
<input type="hidden" name="tries" 
value="<?php echo $tries; ?>"
/>
<p>
<input type="submit" value="Log in" /></p>
</form>
<hr />
<?php echo $tries, " attempt(s) recorded"; ?>
<hr />
<p><a href="../index.html">Home</a></p>
</body>
</html>