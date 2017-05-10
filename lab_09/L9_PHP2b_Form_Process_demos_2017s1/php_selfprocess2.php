<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Single Page - Self Calling Process + Form</title>
    <link rel="stylesheet" href="php_styles.css" type="text/css" /> 
</head>
<body>
<!--
	This file demonstrates some string functions in PHP
-->

<!-- Process (previous form Input) -->
<?php
	if (isset($_POST["studentId"]) && $_POST["studentId"]!="") {
		$studentId = $_POST["studentId"];
		echo "<h1>Result of Previous Input</h1>";
		echo "<p>Your Student ID is $studentId</p>";

		// Validate using string functions
		if (strlen ($studentId) != 7) {
			echo "<p>Your Student ID is not 7 characters long.</p>";
		}
		$lastChar = substr ($studentId, 6, 1);
		if ((strtoupper($lastChar) != "X") && (!is_numeric($lastChar))) {
			echo "<p>The 7th character in your Student ID is not valid. It must be a number or X</p>";
		}
		
		// Validate using regular expression
		$pattern = "/^[\d]{6}[xX0-9]{1}\$/";
		if (! preg_match($pattern, $studentId) )
			echo "<p>Your Student ID is not valid. It must be a 7-digit number or 6-digit ending in X</p>";
		}
?>

<!-- Generate Form -->
	<hr />
	<h1>New Input</h1>
	<form action="php_selfprocess2.php" method="post" >
		<p>What is your ID #?
			<input type="text" id="studentId" name="studentId" />
		</p>  
		<p>
			<input type="submit" value="Register" />
		</p>	
	</form>
</body>
</html>