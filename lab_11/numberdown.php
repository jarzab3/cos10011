<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 13/5/17
 * Time: 2:37 PM
 */


session_start();
if (!isset ($_SESSION["number"])) {
//    $_SESSION["number"] == 0;
    $num = $_SESSION["number"];

}


$num--;
$_SESSION["number"] = $num;
header("location:number.php");

?>

