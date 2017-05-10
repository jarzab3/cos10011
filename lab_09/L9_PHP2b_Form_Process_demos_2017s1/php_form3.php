<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Page 1 - Form</title>
	<link rel="stylesheet" href="php_styles.css" type="text/css" /> 
</head>
<body>
	<!-- 
		Use HTML or HTML as file extension if there are not PHP codes
		example php_form2.htm. The process file must be .php.
	-->
	<?php if ((isset($_GET["ok"]))&& (isset($_GET["stid"]))){
	echo "<p>Success: Your Student ID: ". $_GET["stid"]. "is in a valid format<br />We can now do other processing</p>";
	}
	else {
?>  
    <h1>New Input</h1>
	<form action="php_process3.php" method="post" >
		<p>What is your ID #?
			<input type="text" id="studentId" name="studentId" 
		<?php if (isset($_GET["stid"])) {
		echo "value='", $_GET["stid"], "'";
		} ?>
		/> 
		<?php if (isset($_GET["msg"])) { 
		echo "  ".$_GET["msg"];
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