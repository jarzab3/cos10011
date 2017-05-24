
<html>
<head>
</head>
<body>


<?php


?>

<h2>Cruise Validation Form</h2>

<?php

if(isset($_POST["state"])){
    $num = $_POST["state"];
}

?>

<form method="post" action="process_order.php">


    State: <select id="state_s" name="state_s" >


        <option <?php if ($num == 'ACT') echo ' selected="selected"'; ?>>ACT</option>

        <option <?php if($num == 'NSW') echo"selected"; ?> > NSW </option>


    </select>

    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="cancel" value="Cancel">
</form>




</body>
</html>



State: <select id="state_s" name="state_s" >


    <option value="none" <?php if ($state == 'none') echo 'selected="selected"';  ?>>Please select</option>
    <option value="VIC" <?php if ($state == 'VIC') echo 'selected="selected"'; ?>>VIC</option>
    <option value="NSW" <?php if ($state == 'NSW') echo 'selected="selected"'; ?>>NSW</option>
    <option value="QLD" <?php if ($state == 'QLD') echo ' selected="selected"'; ?>>QLD</option>
    <option value="NT" <?php if ($state == 'NT') echo ' selected="selected"'; ?>>NT</option>
    <option value="SA" <?php if ($state == 'SA') echo ' selected="selected"'; ?>>SA</option>
    <option value="TAS" <?php if ($state == 'TAS') echo ' selected="selected"'; ?>>TAS</option>

</select>