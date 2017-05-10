<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Single Page - Self Calling Process + Form</title>
    <link rel="stylesheet" href="php_styles.css" type="text/css" /> 
</head>
<body>
<!--
	This file combines both process and form into a single file.
	Error message or redirection are not necessary as only 1 file 
		is used for the process and form
	
-->

<!-- Process (previous form Input) -->
<?php
	if (isset($_POST["studentId"]) && $_POST["studentId"]!="") {
		$studentId = $_POST["studentId"];
		echo "<h1>Result of Previous Input</h1>";
		echo "<p>Your Student ID is $studentId</p><hr />";
	}
?>

<!-- Generate Form -->
	<h1>New Input</h1>
	<form action="php_selfprocess1.php" method="post" >
		<p>What is your ID #?
			<input type="text" id="studentId" name="studentId" />
		</p>  
		<p>
			<input type="submit" value="Register" />
		</p>	
	</form>
</body>
</html>