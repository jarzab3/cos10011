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
		example php_form1.htm. The process file must be .php.
	-->
	<h1>New Input</h1>
	<form action="php_process1.php" method="post" >
		<p>What is your ID #?
			<input type="text" id="studentId" name="studentId" />
		</p>  
		<p>
			<input type="submit" value="Register" />
		</p>	
	</form>
</body>
</html>