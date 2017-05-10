<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Process myfirst phpform</title>
	<!-- Other meta here -->
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- Begin processing -->
<?php
	// Write all your customise functions here
	
    // include any files here
		
	// Checks if process was triggered by a form submit, if not display an error message
	if (isset ($_POST["fname"])) {
		// Transfer all form data to variables
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$favnum = $_POST["favnum"];	
	
	// Proceed if nothing is wrong
			echo "<h1>Welcome $fname $lname!</h1>\n"; 
			echo "<p>Your favourite number is $favnum </p>\n";
			
	} else {
		// Display error message, if process not triggered by a form submit
		echo "<p class=\"error\">Error: Please enter data in the <a href=\"myfirst_phpform.html\">form</a></p>";
		// OR header ("location: myfirst_phpform.html");
	}
?>
</body>
</html>