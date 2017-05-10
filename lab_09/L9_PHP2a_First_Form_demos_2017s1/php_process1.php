<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Process 1</title>
	<!-- Other meta here -->
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="nav.js" type="text/javascript"></script>
</head>
<body>
<!-- Begin processing -->
<?php
	// Write all your customise functions here
	function reverse ($str) {
		$result = "";
		for ($i = 0; $i < strlen ($str); $i++) {
			$result = substr($str, $i, 1) . $result;
		}
		return $result;
	}
	
    // include the menu
	include_once ("php_menu.html");
		
	// Checks if process was triggered by a form submit, if not display an error message
	if (isset ($_POST["fname"])) {
		// Transfer all form data to variables
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$favnum = $_POST["favnum"];	
	
		// validate data by assuming all is correct
		$err_msg = "";
		// Look for data that is wrong
		if (strlen ($fname) == 0 ) {
			$err_msg .= "<p>Error: enter first name.</p>";
		} 
		if ($lname == "") {
			$err_msg .= "<p>Error: enter last name.</p>";
		} 
		if ($favnum == 0) {
			$err_msg .= "<p>Error: enter favourite number.</p>";
		}
		
		// Proceed if nothing is wrong
		if ($err_msg == "") {
			echo "<h1>Welcome $fname!</h1>"; 

			// Call function reverse
			echo "<p>", reverse ($fname), " ", reverse ($lname), "</p>";
			
			echo "<ol>";
			for ($i = 0; $i < $favnum; $i++) {
				echo "<li>item ",($i+1), " </li>";
			}
			echo "</ol>";
		} else {
			// Display error message, if data validation fails
			echo $err_msg;
		}
	} else {
		// Display error message, if process not triggered by a form submit
		echo "Error: Please enter data in the <a href=\"php_form1.php\">form</a>";
	}
?>
</body>
</html>