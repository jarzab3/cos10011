<?php
	/*
		These processes use redirection techniques and pass error message.
		Instead it autmatically jumps to the input form if nothing is passed.
		
		Redirections must be executed before any html <!DOCTYPE html> 
		but if there is no html, then they can be anywhere!.
	*/
	if (!(isset($_POST["studentId"])) OR ($_POST["studentId"]=="")) {
		header("location:php_form3.php?msg=\"No values entered\" ");
	}
    $msg="";
	$formOK=FALSE;
	if (isset($_POST["studentId"])) {
		$studentId = $_POST["studentId"];
		
		// Validate using regular expression
		$pattern = "/^[\d]{6}[xX0-9]{1}\$/";
		if (! preg_match($pattern, $studentId) ) {
			$msg.= "Your Student ID is not valid. It must be a 7-digit number or 6-digit ending in X<br />";
		}
		if ($msg=="") {
		$formOK=TRUE;
		header("location:php_form3.php?ok=Y&stid=".$studentId);
		}
		}
	if ($formOK==FALSE){
	header("location:php_form3.php?msg=".$msg."&stid=".$studentId);
	}