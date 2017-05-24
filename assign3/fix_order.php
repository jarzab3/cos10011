
<html>
<head>

</head>
<body>

<?php


//$err_values = $_SESSION['values'];


//This function display array values fir debuging

//echo '<pre>'; print_r($err_values); echo '</pre>';



//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (empty($_POST["name"])) {
//        $nameErr = "Name is required";
//        $formValid = false;
//    } else {
//        $name = test_input($_POST["name"]);
//        // check if name only contains letters and whitespace
//        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
//            $nameErr = "Only letters and white space allowed";
//            $formValid = false;
//        }
//    }
//
//    if (empty($_POST["email"])) {
//        $emailErr = "Email is required";
//    } else {
//        $email = test_input($_POST["email"]);
//        // check if e-mail address is well-formed
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            $emailErr = "Invalid email format";
//        }
//    }
//
//    if (empty($_POST["website"])) {
//        $website = "";
//    } else {
//        $website = test_input($_POST["website"]);
//        // check if URL address syntax is valid
//        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
//            $websiteErr = "Invalid URL";
//        }
//    }
//
//    if (empty($_POST["comment"])) {
//        $comment = "";
//    } else {
//        $comment = test_input($_POST["comment"]);
//    }
//
//    if (empty($_POST["gender"])) {
//        $genderErr = "Gender is required";
//    } else {
//        $gender = test_input($_POST["gender"]);
//    }
//}
//
//function test_input($data)
//{
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
//}

//
//function err_map($v){
//    if( $v[1] == false){
//        return 'gg';
//    } else {
//        return '';
//    }
//}

//
//function calculateCost($cruise, $noPeople, $noPeople1){
//    $total = 0;
//    $price = 0;
//
//    if ($cruise == "Norway") {
//        $price = 2323;
//    } elseif ($cruise == "Greece") {
//        $price = 435;
//    } elseif ($cruise == "Africa") {
//        $price = 2324;
//    } elseif ($cruise == "Antarctica") {
//        $price = 1224;
//    }
//    $priceAdults = ($price * $noPeople);
//    $priceChildren = $price * $noPeople1;
//    $priceChildren = ($priceChildren - ($priceChildren * 0.1));
//
//    $total = $priceAdults + $priceChildren;
//
//    return $total;
//
//}

//$dataList = $err_values;


$f_name = $_GET["first_name"];
$l_name = $_GET["last_name"];
$email_address = $_GET["email_address"];
$street_address = $_GET["street_address"];
$suburb = $_GET["suburb"];
$state = $_GET["state"];
$postcode = $_GET["postcode"];
$phoneNumber = $_GET["phoneNumber"];
$product_service = $_GET["product_service"];
$noPeople = $_GET["noPeople"];
$noPeople1 = $_GET["noPeople1"];


//
//$email = $err_values[2][0];
//echo $_POST['input1'];
//if( $_POST["first_name"])
//{
//    $first_name = $_POST['first_name'];
//    echo "Welcome: ". $_POST['last_name']. "<br />";
//    echo "Your Email is: ". $_POST["email_address"]. "<br />";
//    echo "Your Mobile No. is: ". $_POST["contact"];
//} class="<?php echo err_map($err_values[7]) //


?>


<h2>Cruise Validation Form</h2>

<form method="post" action="process_order.php">
    First Name: <input id ="f0" type="text" name="first_name"
                       value="<?PHP echo $f_name ?>"  >
    <br><br>
    Last Name: <input id ="f1" type="text" name="last_name"
                      value="<?PHP echo $l_name?>"  >
    <br><br>
    Email address: <input id ="f2" type="text" name="email_address"
                          value="<?PHP echo $email_address ?>">
    <br><br>
    Street address: <input id ="f3" type="text" name="street_address"
                           value="<?PHP echo $street_address ?>"  >
    <br><br>
    Suburb: <input id ="f4" type="text" name="suburb">
    <br><br>
    State: <select id="state_s" name="state_s" value="<?PHP echo $state ?>" >>

        <option  <?php if ($state == 'none') echo 'selected="selected"'; ?>>Please select</option>
        <option <?php if ($state == 'VIC') echo 'selected="selected"'; ?>>VIC</option>
        <option  <?php if ($state == 'NSW') echo 'selected="selected"'; ?>>NSW</option>
        <option  <?php if ($state == 'QLD') echo ' selected="selected"'; ?>>QLD</option>
        <option <?php if ($state == 'NT') echo ' selected="selected"'; ?>>NT</option>
        <option  <?php if ($state == 'SA') echo ' selected="selected"'; ?>>SA</option>
        <option  <?php if ($state == 'TAS') echo ' selected="selected"'; ?>>TAS</option>

    </select>

    <br><br>

    <!--    Postcode: <input id ="f6" type="text" name="postcode"-->
    <!--                     oninput="colorElementRed(this.id)" >-->
    <!--    <br><br>-->
    <!--    Phone Number: <input id ="f7" type="text" name="PhoneNumber"-->
    <!--                         oninput="colorElementRed(this.id)"  >-->
    <!--    <br><br>-->
    <!--    Cruise: <select id ="f8" id="productService" name="product_service" value=--><?php //echo $product_service; ?><!-- >-->
    <!---->
    <!--        <option value="none"--><?php //if ($product_service == 'none') echo ' selected="selected"'; ?><!-->Please select</option>-->
    <!--        <option value="Norway"--><?php //if ($product_service == 'Norway') echo ' selected="selected"'; ?><!-->Norway</option>-->
    <!--        <option value="Greece"--><?php //if ($product_service == 'Greece') echo ' selected="selected"'; ?><!-->Greece</option>-->
    <!--        <option value="Africa"--><?php //if ($product_service == 'Africa') echo ' selected="selected"'; ?><!-->Africa</option>-->
    <!--        <option value="Antarctica"--><?php //if ($product_service == 'Antarctica') echo ' selected="selected"'; ?><!-->Antarctica</option>-->
    <!---->
    <!--    </select>-->
    <!--    <br><br>-->
    <!---->
    <!--    No of people: <input id ="f9" type="text" name="noPeople" value="--><?PHP //echo $noPeople ?><!--"-->
    <!--                         oninput="colorElementRed(this.id)" >-->
    <!--    <br><br>-->
    <!--    Total Cost: <input id ="f10" type="text" name="totalCost" value="--><?PHP //echo
    //    calculateCost($product_service, $noPeople, $noPeople1); ?><!--"-->
    <!--                       oninput="colorElementRed(this.id)"  >-->
    <!--    <br><br>-->

    <!--        E-mail: <input type="text" name="email">-->
    <!--        <span class="error">* --><?php //echo $emailErr; ?><!--</span>-->
    <!--        <br><br>-->
    <!--        Website: <input type="text" name="website">-->
    <!--        <span class="error">--><?php //echo $websiteErr; ?><!--</span>-->
    <!--        <br><br>-->
    <!--        Comment: <textarea name="comment" rows="5" cols="40"></textarea>-->
    <!--        <br><br>-->
    <!--        Gender:-->
    <!--        <input type="radio" name="gender" value="female">Female-->
    <!--        <input type="radio" name="gender" value="male">Male-->
    <!--        <span class="error">* --><?php //echo $genderErr; ?><!--</span>-->
    <!--        <br><br>-->

    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="cancel" value="Cancel">
</form>


</body>
</html>