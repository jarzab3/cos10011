<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="description" content="Demonstrates some basic HTML content elements and CSS" />
    <meta name="keywords" content="HTML5, tags" />
    <meta name="author" content="Adam Jarzebak"  />

    <link rel = "stylesheet" type = "text/css" href = "styles/style.css"/>

    <title>Main page </title>

</head>

<body>

<?php include 'header.inc';?>

<main id="main_container">

    <section>

        <section class="slides">
            <input type="radio" name="radio-btn" id="img-1" checked='checked' />
            <section class="slide-container">
                <section class="slide" id="imageContainer">
                    <p class="cruise_text">Immerse yourself in the world’s most interesting places. Azamara Club Cruises boasts more overnights in ports, longer stays and night time tours.</p>
                </section>
                <section class="nav">
                    <label for="img-6" class="prev">&#x2039;</label>
                    <label for="img-2" class="next">&#x203a;</label>
                </section>
            </section>


            <input type="radio" name="radio-btn" id="img-2" />
            <section class="slide-container">
                <section class="slide" id="imageContainer1">
                    <p class="cruise_text">Upscale but comfortable. Semi-formal and exciting. Modern luxury. These are the words one you’ll associate with Celebrity Cruises after your cruise vacation. Celebrity is a superb cruise line, founded in 1988 with a focus on bringing excellent service and cuisine to you in the most comfortable and luxurious setting.</p>
                </section>
                <section class="nav">
                    <label for="img-1" class="prev">&#x2039;</label>
                    <label for="img-3" class="next">&#x203a;</label>
                </section>
            </section>

            <input type="radio" name="radio-btn" id="img-3" />
            <section class="slide-container">
                <section class="slide" id="imageContainer2">
                    <p class="cruise_text">Crystal Cruises is known as being amongst the most awarded luxury cruise lines. With innovative programming like ComputerUniversity@Sea, it’s easy to see why.</p>
                </section>
                <section class="nav">
                    <label for="img-2" class="prev">&#x2039;</label>
                    <label for="img-4" class="next">&#x203a;</label>
                </section>
            </section>

            <input type="radio" name="radio-btn" id="img-4" />
            <section class="slide-container">
                <section class="slide" id="imageContainer3">
                    <p class="cruise_text">Epicureans are delighted by the Oceania Cruises experience where Jacques Pepin is Executive Culinary Director and the Culinary Tours introduce you to a world of flavors.</p>
                </section>
                <section class="nav">
                    <label for="img-3" class="prev">&#x2039;</label>
                    <label for="img-5" class="next">&#x203a;</label>
                </section>
            </section>

            <input type="radio" name="radio-btn" id="img-5" />
            <section class="slide-container">
                <section class="slide" id="imageContainer4">
                    <p class="cruise_text">Whatever you desire, on a Seabourn cruise you’ll have it. This luxury brand offers small ships that allow you to explore less traveled ports for unique experiences.
                    </p>
                </section>
                <section class="nav">
                    <label for="img-4" class="prev">&#x2039;</label>
                    <label for="img-6" class="next">&#x203a;</label>
                </section>
            </section>

            <input type="radio" name="radio-btn" id="img-6" />
            <section class="slide-container">
                <section class="slide" id="imageContainer5">
                    <p class="cruise_text">Viking has brought the intimate, culture centric atmosphere of their river cruises to ocean sailing. Debuting in 2015 this cruise line offers in-depth European itineraries.</p>
                </section>
                <section class="nav">
                    <label for="img-5" class="prev">&#x2039;</label>
                    <label for="img-1" class="next">&#x203a;</label>
                </section>
            </section>

            <section class="nav-dots">
                <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                <label for="img-6" class="nav-dot" id="img-dot-6"></label>
            </section>

        </section>


    </section>

    <hr/>


    <section id="main_index">
        <section id="style_index">

            <h2>Your one stop destination for Cruise Holidays from Australia and around the World.</h2>

            <h3>Choose from all the worlds great destinations including;</h3>


            <ul>
                <li>
                    Australia
                </li>
                <li>
                    New Zealand
                </li>

                <li>
                    South Pacific
                </li>
                <li>
                    Mediterranean
                </li>

                <li>
                    Mediterranean
                </li>
                <li>
                    Europe
                </li>

            </ul>

            <p>
                <strong>“All ships all destinations”.</strong>
            </p>

            We do not charge booking fees, credit card charges or cancellation fees over and above shipping company terms and conditions

            We let our experience, knowledge and passion for cruising be your safest, most comforting and reliable choice.
        </section>
    </section>

    <footer>
        <hr/>
        <p>
            <strong>&#169;</strong>
            <a  href="http://www.swinburne.edu.au/">
                Swinburne Universty of Technology
            </a>
        </p>

        <p>  &#160;
            &#160;
            <strong>Mark up by:</strong> <a href="mailto:adam@jarzebak.eu">
                Adam Jarzebak</a></p>

    </footer>

</main>
</body>

</html>