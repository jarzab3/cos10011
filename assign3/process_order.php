<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Demonstrates knowledge from the scope of the html and css."/>
    <meta name="keywords" content="HTML5, CSS"/>
    <meta name="author" content="Adam Jarzebak"/>

    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    <link rel="icon" type="image/png" href="images/icon_title.png" sizes="16x16">

    <script src="scripts/part1.js"></script>

    <title>SwinCruise - Process Order</title>
</head>
<body>

<?php

function sanitise($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php
$errmsg = "";
$formValid = true;

$t = true;
$f = false;

session_start();

if (isset($_POST["first_name"])) {
    $firstname = $_POST["first_name"];
    $firstname = sanitise($firstname);
//    echo $firstname;
} else {
    $nameErr = "Incorrect first name";
    $formValid = false;
//    header ("location: enquire.php");
}

if (isset($_POST["last_name"])) {
    $lastname = $_POST["last_name"];
    $lastname = sanitise($lastname);
} else {
    $nameErr = "Incorrect last name";
    $formValid = false;
}

if (isset($_POST["email_address"])) {
    $email_address = $_POST["email_address"];
    $email_address = sanitise($email_address);
} else {
    $nameErr = "Incorrect email address";
    $formValid = false;
}

if (isset($_POST["street_address"])) {
    $street_address = $_POST["street_address"];
    $street_address = sanitise($street_address);
} else {
    $nameErr = "Incorrect street address";
    $formValid = false;
}

if (isset($_POST["suburb"])) {
    $suburb = $_POST["suburb"];
    $suburb = sanitise($suburb);
} else {
    $nameErr = "Incorrect suburb";
    $formValid = false;
}

if (isset($_POST["state"])) {
    $state = $_POST["state"];
    $state = sanitise($state);
} else {
    $nameErr = "Incorrect state";
    $formValid = false;
}

if (isset($_POST["postcode"])) {
    $postcode = $_POST["postcode"];
    $postcode = sanitise($postcode);
} else {
    $nameErr = "Incorrect postcode";
    $formValid = false;
}

if (isset($_POST["PhoneNumber"])) {
    $phoneNumber = $_POST["PhoneNumber"];
    $phoneNumber = sanitise($phoneNumber);
} else {
    $nameErr = "Incorrect phone number";
    $formValid = false;
}

if (isset($_POST["product_service"])) {
    $product_service = $_POST["product_service"];
    $product_service = sanitise($product_service);
} else {
    $nameErr = "Incorrect product/service";
    $formValid = false;
}

if (isset($_POST["noPeople"])) {
    $noPeople = $_POST["noPeople"];
    $noPeople = sanitise($noPeople);
} else {
    $nameErr = "Incorrect no of adults";
    $formValid = false;
}

if (isset($_POST["noPeople1"])) {
    $noPeople1 = $_POST["noPeople1"];
    $noPeople1 = sanitise($noPeople1);
} else {
    $nameErr = "Incorrect no of child";
    $formValid = false;
}

//if (isset($_POST[""])) {
//    $noPeople1 = $_POST["noPeople1"];
//    $noPeople1 = array(sanitise($noPeople1), $t);
//} else {
//    $nameErr = "Incorrect no of child";
//    $formValid = false;
//}

//---------------------------------

if (!preg_match("/^[a-zA-Z]+$/", $firstname)) {
//    $firstname[1] = $f;
    $errmsg .= "Only letters and white space allowed in first name\n";
    $formValid = false;
}

if (!preg_match("/^[a-zA-Z]+$/", $lastname)) {
//    $lastname[1] = $f;
    $errmsg .= "Only letters and white space allowed in last name\n";
    $formValid = false;
}

if (!preg_match("/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/", $email_address)) {
//    $email_address[1] = $f;
    $errmsg .= "Incorrect email address\n";
    $formValid = false;
}

if (!preg_match("/^.+/", $street_address)) {
//    $street_address[1] = $f;
    $errmsg .= "Incorrect street address\n";
    $formValid = false;
}

if (!preg_match("/^.+$/", $suburb)) {
//    $suburb[1] = $f;
    $errmsg .= "Incorrect suburb\n";
    $formValid = false;
}

if ($state == "none"){
//    $state[1] = $f;
    $errmsg .= "Please select the state\n";
    $formValid = false;
}

if ($postcode == '') {
//    $postcode[1] = $f;
    $errmsg .= "Please select the postcode\n";
    $formValid = false;
}

if (!preg_match("/^\d{1,10}$/", $phoneNumber)) {
//    $phoneNumber[1] = $f;
    $errmsg .= "Incorrect phone number\n";
    $formValid = false;
}

if ($product_service == "none") {
//    $product_service[1] = $f;
    $errmsg .= "Please select at least one cruise\n";
    $formValid = false;
}

if ($noPeople == 0) {
//    $noPeople = $f;
    $errmsg .= "Please select at least one customer\n";
    $formValid = false;
}else{
//    $noPeople1 = $f;
//    $totalNoPeople = $noPeople[0] + $noPeople1[0];
}

//=======================================

if ($errmsg != "") {

    header("location: fix_order.php?first_name=$firstname&last_name=$lastname&email_address=$email_address&street_address=$street_address&suburb=$suburb&state=$state&postcode=$postcode&phoneNumber=$phoneNumber&product_service= $product_service&noPeople= $noPeople&noPeople1= $noPeople1");

//    $_SESSION['values'] =
//
//    $o = array( $firstname, $lastname, $email_address, $street_address, $suburb, $state,
//        $postcode, $phoneNumber, $product_service, $noPeople, $noPeople1);
//    echo $_POST['first_name'];

} else {

//    echo "<p> Welcome $firstname[0] $lastname[0]</p>";

//    echo "<p> You are now booked on the $tour. Species: $species </p>";
//
//    echo "<p> Age: $age</p>";
//
//    echo "<p> Preference: $preference</p>";
//
//    echo "<p> Number of travellers: $partySize</p>";

}
?>

<main>
    <h1>Confirm your purchase</h1>

    <section class="style_form">

        <form id="pay_confirm" method="post" action="https://mercury.swin.edu.au/it000000/formtest.php"
              novalidate="novalidate">
            <fieldset>
                <legend>Is there all good?</legend>
                <table id="payment_table">
                    <tr>
                        <td>
                            <p>Your Name: <span id="confirm_name"></span></p>
                            <p>Email: <span id="c_email"></span></p>
                            <p>Telephone: <span id="c_number"></span></p>
                            <p>Postcode: <span id="c_postcode"></span></p>
                            <p>Cruise: <span id="c_cruise"></span></p>
                            <p>No of people: <span id="c_noPeople"></span></p>
                            <p>Total Cost: $<span id="c_confirm_cost"></span></p>
<!--                            <p>Extras: <span id="c_confirm_extras"></span></p>-->
                        </td>
                        <td>
                            <p>Card Number: <span id="confirm_card_no"></span></p>
                            <p>Card Owner Name: <span id="confirm_card_name"></span></p>
                            <p>Expire Date: <span id="confirm_expires"></span></p>
                            <p>Card Type: <span id="confirm_card_type"></span></p>
                        </td>
                    </tr>
                </table>

                <input type="hidden" name="card_number" id="p_card_number"/>
                <input type="hidden" name="card owner" id="p_card_name"/>
                <input type="hidden" name="expires date" id="p_expires"/>
                <input type="hidden" name="cvv" id="p_cvv"/>
                <input type="hidden" name="card type" id="p_card_type"/>

                <input type="hidden" name="firstname" id="p_firstname"/>
                <input type="hidden" name="lastname" id="p_lastname"/>
                <input type="hidden" name="telephone" id="p_number"/>
                <input type="hidden" name="postcode" id="p_postcode"/>
                <input type="hidden" name="cruise" id="p_cruise"/>
                <input type="hidden" name="No of People" id="p_noPeople"/>
                <input type="hidden" name="total cost" id="p_confirm_cost"/>
<!--                <input type="hidden" name="extras" id="p_confirm_extras"/>-->

                <br/>
                <br/>

                <section class="align_center">

                    <button type="button"><a href="card_payment.php">Pay Now</a></button>
                    <button type="button" id="cancelButton">Cancel</button>

                </section>
                <section class="align_center">
                    <input type="submit" value="Purchase" id="confirmBooking"/>
                </section>
            </fieldset>
        </form>

    </section>

</main>

<?php include 'footer.inc'; ?>

</body>
</html>