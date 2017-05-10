<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Page 2 - Process</title>
    <link rel="stylesheet" href="php_styles.css" type="text/css" /> 
</head>
<body>
<?php
	/*
		Always first check using isset function, and generate
		an error message, if the form is being bypassed.
	*/
	if (isset($_POST["studentId"]) && ($_POST["studentId"]!="")) {
		$studentId = htmlspecialchars($_POST["studentId"]);
		// $studentId = $_POST["studentId"];
		echo "<p>Your Student ID is $studentId</p>";
	} else {
		echo "<p>Error: Please go to the <a href=\"php_form1.php\">form</a></p>";
	}
?>
</body>
</html>