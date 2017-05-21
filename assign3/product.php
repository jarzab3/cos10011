<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Demonstrates knowledge from the scope of the html and css." />
    <meta name="keywords" content="HTML5, CSS" />
    <meta name="author" content="Adam Jarzebak"  />

    <link rel = "stylesheet" type = "text/css" href = "styles/style.css"/>


    <title>Product</title>

</head>
<body>

<?php include 'header.inc';?>


<main>
    <h1>Great Deals from SwinCruise</h1>
    <aside>
        <h3>Cruise Destinations</h3>
        <p>
            Where are the best cruise destinations in the world?
        </p>
        <p>
            Below, you will see a selection of some of the best and most popular destinations.
        </p>

        <nav>
            <ol>

                <li><a href="#norway">Norway</a></li>
                <li><a href="#greece">Greece</a></li>
                <li><a href="#africa">Africa</a></li>
                <li><a href="#antartica">Antartica</a></li>

            </ol>
        </nav>
        <br/>

        <section id="aside_table">

            <table>
                <tr>
                    <th>Tickets</th>
                    <th>Norway</th>
                    <th>Greece</th>
                    <th>Africa</th>
                    <th>Antartica</th>
                </tr>

                <tr>
                    <td>Adult</td>
                    <td>$2323</td>
                    <td>$435</td>
                    <td>$2324</td>
                    <td>$1324</td>

                </tr>

                <tr>
                    <td>Junior</td>
                    <td>$1923</td>
                    <td>$335</td>
                    <td>$1924</td>
                    <td>$1324</td>
                </tr>

                <tr>
                    <td>Ch2ild</td>
                    <td>$1323</td>
                    <td>$235</td>
                    <td>$1324</td>
                    <td>$1224</td>
                </tr>
            </table>
        </section>
    </aside>

    <section class="container">

        <article class="relative">

            <section class="sub_container" id="norway">
                <h3>1. Awesome Cruise</h3>
                <p>With more than 15 years of experience in the Australian cruise market, CruiseAway offers a huge range of sailings and deep discounts of up to 70%.</p>

                <hr class="style-one"/>

                <ul>

                    <li>Best cruises prices guaranteed</li>
                    <li>Offers prices below the brochure rates on many sailings
                    </li>
                    <li>Cruises available from more than 70 lines including Royal Caribbean, Carnival, Princess, PO, MSC, Norwegian and Viking River Cruises
                    </li>

                </ul>
            </section>

            <section class="absolute">

                <img class="img_product" src="images/cruise_images/cruise1.jpg" alt="cruise"/>

            </section>

        </article>
        <hr />
    </section>

    <section class="container">

        <article class="relative">

            <section class="sub_container" id="greece">
                <h3>2. Princess Cruises</h3>
                <p>Set sail all around the world aboard large ships loaded with facilities, from spas to swimming pools, with a luxury cruise line.</p>

                <hr class="style-one"/>

                <ul>

                    <li>Fleet of 18 ships that cruise all around the world</li>
                    <li>Rooms for every budget, from interior cabins to suites with balconies</li>
                    <li>Includes entertainment, all meals, room service and daily activities</li>

                </ul>
            </section>

            <section>

                <img class="img_product" src="images/cruise_images/cruise2.jpg" alt="cruise"/>

            </section>

        </article>
        <hr/>
    </section>

    <section class="container">

        <article class="relative">

            <section class="sub_container" id="africa">

                <h3>3. Cruise Direct</h3>
                <p>Find the perfect cruise for you from more than a dozen different cruise lines to choose from at a competitive price.</p>

                <hr class="style-one"/>

                <ul>

                    <li>Compare different cruise lines in one place</li>
                    <li>Find last-minute offers and discounts</li>
                    <li>Price match guarantee</li>

                </ul>
            </section>

            <section>

                <img class="img_product" src="images/cruise_images/cruise3.jpg" alt="cruise"/>

            </section>
        </article>
        <hr/>
    </section>

    <section class="container">

        <article class="relative">

            <section class="sub_container" id="antartica">
                <h3>4. Fred Olsen</h3>
                <p>This European cruise line offers a selection of sailings across Europe, the Caribbean, South and Central America and the Mediterranean.</p>

                <hr class="style-one"/>

                <ul>

                    <li>Visit destinations many lower-budget cruise lines don't, like above the Arctic Circle, without paying a premium</li>
                    <li>Customer service available on the phone seven days a week</li>
                    <li>Guaranteed you'll enjoy your cruise or they'll arrange for you to depart early
                    </li>

                </ul>
            </section>

            <section>

                <img class="img_product" src="images/cruise_images/cruise4.jpg" alt="cruise"/>

            </section>
        </article>
    </section>

</main>

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

</body>
</html>