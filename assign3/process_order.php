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


    <title>SwinCruise - Payment</title>

</head>
<body>

<main>
    <h1>Confirm your purchase</h1>

    <section class="style_form">

        <form id="pay_confirm" method="post" action="https://mercury.swin.edu.au/it000000/formtest.php" novalidate="novalidate">
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
                            <p>Exras: <span id="c_confirm_extras"></span></p>
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
                <input type="hidden" name="extras" id="p_confirm_extras"/>

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

<footer>
    <hr/>
    <p>
        <strong>&#169;</strong>
        <a href="http://www.swinburne.edu.au/">
            Swinburne Universty of Technology
        </a>
    </p>

    <p> &#160;
        &#160;
        <strong>Mark up by:</strong> <a href="mailto:adam@jarzebak.eu">
            Adam Jarzebak</a></p>
</footer>

</body>
</html>