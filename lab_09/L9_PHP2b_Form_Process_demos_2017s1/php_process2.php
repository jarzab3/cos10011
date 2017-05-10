<?php
	/*
		This process uses a redirection technique and do away with
		the error message. Instead it autmatically jumps to the
		input form.
		
		Remember, for this to work properly, it must the first thing
		executed (before <!DOCTYPE html>).
	*/
	if (!isset($_POST["studentId"]) || ($_POST["studentId"]=="")) {
		header("location:php_form2.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Page 2 - Process</title>
	<link rel="stylesheet" href="php_styles.css" type="text/css" /> 
</head>
<body>
<?php
	$studentId = $_POST["studentId"];
	echo "<p>Your Student ID is $studentId</p>";
?>
</body>
</html>