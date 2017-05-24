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


    <title>SwinCruise - Card Payment</title>

</head>
<body>

<main>
    <h2>Card Payment</h2>

    <section id="card_payment_section">

        <form id="payment_form" action="process_order.php" novalidate="novalidate">

            <section class="test">

                <input type="text" name="card_number" id="card_number" maxlength="16" placeholder="0000000000000000000"/>
                <input type="text" name="card_name" id="card_name" maxlength="50" placeholder="John Smith"/>
                <input type="text" name="expires" id="expires" maxlength="5" placeholder="mm/yy" oninput="autofillSlash()"/>
                <input type="text" name="cvv" id="cvv" maxlength="4" placeholder="CVV"/>

                <select id="card_type" name="card_type">
                    <option value="Visa">Visa</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="AmericanExpress">AmericanExperess</option>
                </select>

                <br/>
                <br/>
                <br/>
                <br/>

            </section>

            <section id="buttons_pay_page">
            <span>

                <input type="submit" value="Confirm Booking" id="card_confirmBooking"/>

                <input type="reset" value="Reset" id="card_cancel"/>

           </span>
            </section>

        </form>

    </section>

</main>


</body>
</html>