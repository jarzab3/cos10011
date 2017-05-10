<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Single Page - Self Calling Process + Form</title>
    <link rel="stylesheet" href="php_styles.css" type="text/css" /> 
</head>
<body>
<!--
	This file demonstrates some string functions in PHP and errors in the page
-->

<!-- Process (previous form Input) -->
<?php
    $msg="";
	$formOK=FALSE;
	if (isset($_POST["studentId"]) && $_POST["studentId"]!="") {
		$studentId = $_POST["studentId"];
		
		// Validate using regular expression
		$pattern = "/^[\d]{6}[xX0-9]{1}\$/";
		if (! preg_match($pattern, $studentId) ) {
			$msg.= "Your Student ID is not valid. It must be a 7-digit number or 6-digit ending in X<br />";
		}
		if ($msg=="") {
		echo "<p>Success: Your Student ID: ", $studentId, "is in a valid format<br />We can now do other processing</p>";
		$formOK=TRUE;
		}
		}
	if ($formOK==FALSE){
		
?>

<!-- Generate Form -->
	<hr />
	<?php if ($msg==""){
	echo "<h1>New Input</h1>";
	} 
	else {
	echo "<h1>Re-Input</h1>";
	}
	?>
	<form action="php_selfprocess3.php" method="post" >
		<p>What is your ID #?
			<input type="text" id="studentId" name="studentId" 
		<?php if (isset($_POST["studentId"])) {
		echo "value='", $_POST["studentId"], "'";
		} 
		?>
		/> </p>
		<?php if (!$msg=="") { 
		echo "<p>".$msg. "</p>";
		} ?>
		<p>
			<input type="submit" value="Register" />
		</p>	
	</form>
<?php 
}
?>
</body>
</html>