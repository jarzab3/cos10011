<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Demonstrates knowledge from the scope of the html and css." />
    <meta name="keywords" content="HTML5, CSS"/>
    <meta name="author" content="Adam Jarzebak"/>

    <link rel = "stylesheet" type = "text/css" href = "styles/style.css"/>

    <title>About</title>

</head>
<body>

<?php include 'header.inc';?>

<main id="main_container">

    <section id="about_main">

        <dl>

            <dt>
                Name
            </dt>
            <dd>
                Adam Jarzebak
            </dd>

            <dt>
                Student

            </dt>

            <dd>
                101304282

            </dd>

            <dt>
                Course
            </dt>

            <dd>
                BSc Computer Science
            </dd>

            <dt>
                My photo
            </dt>

            <dd>
                <figure>
                    <img class="roundrect" src="images/DSC_0002.JPG" alt="Photo of Adam Jarzebak" height="200" width="200"/>
                </figure>
            </dd>
            <dt>

                My Timetable
            </dt>
            <dd>

                <br/>
                <br/>

                <section class="timtable" id="timetabl">

                    <table>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>

                        <tr>
                            <td id="am" rowspan="8"></td>
                            <td>8:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>

                            <td>8:30</td>
                            <td></td>
                            <td rowspan="4" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_4" >TNE 30009</a>
                                </section>
                            </td>
                            <td rowspan="4" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_6" >COS 10011</a>
                                </section>
                            </td>
                            <td rowspan="4" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_8" >INF 30020</a>
                                </section>
                            </td>
                            <td></td>

                        </tr>

                        <tr>
                            <td>9:00</td>
                            <td></td><td></td>

                        </tr>

                        <tr>
                            <td>9:30</td>
                            <td></td><td></td>

                        </tr>

                        <tr>
                            <td>10:00</td>
                            <td></td><td></td>


                        </tr>

                        <tr>
                            <td>10:30</td>
                            <td></td><td></td><td></td><td></td>
                            <td rowspan="4" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_10" >TNE 20002</a>
                                </section>
                            </td>

                        </tr>

                        <tr>
                            <td>11:00</td><td></td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>11:30</td>
                            <td></td>

                            <td rowspan="6" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_5" >TNE 20002</a>
                                </section>
                            </td>
                            <td></td><td></td>

                        </tr>

                        <tr>
                            <td id="pm" rowspan="18"></td>
                            <td>12:00</td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>12:30</td><td></td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>1:00</td><td></td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>1:30</td>
                            <td rowspan="2" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_1" >TNE 30009</a>
                                </section>
                            </td>
                            <td></td><td></td><td></td>
                        </tr>

                        <tr>
                            <td>2:00</td>
                            <td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>2:30</td>
                            <td rowspan="2" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_2" >TNE 30009</a>
                                </section>
                            </td>

                            <td></td>

                            <td rowspan="4" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_7" >TNE 30009</a>
                                </section>
                            </td>
                            <td></td><td></td>

                        </tr>

                        <tr>
                            <td>3:00</td>
                            <td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>3:30</td>
                            <td></td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>4:00</td><td></td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>4:30</td><td></td><td></td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>5:00</td>
                            <td></td><td></td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>5:30</td>
                            <td></td><td></td><td></td>
                            <td rowspan="4" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_9" >INF 30020</a>
                                </section>
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>6:00</td>
                            <td></td><td></td><td></td><td></td>

                        </tr>

                        <tr>
                            <td>6:30</td>
                            <td rowspan="4" class="class">
                                <section class="sectionBox" >
                                    <a href="#openModal_3" >COS 10011</a>
                                </section>
                            </td>
                            <td></td><td></td><td></td>
                        </tr>

                        <tr>
                            <td>7:00</td><td></td><td></td><td></td>
                        </tr>

                        <tr>
                            <td>7:30</td><td></td><td></td><td></td><td></td>
                        </tr>

                        <tr>
                            <td>8:00</td><td></td><td></td><td></td><td></td>
                        </tr>

                        <tr>
                            <td>8:30</td><td></td><td></td><td></td><td></td><td></td>

                        </tr>

                    </table>

                </section>

                <!--Content for modals -->


                <section id="openModal_1" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Network Security and Resilience</h2>
                        <h3>Lecture 1</h3>
                        <p>Hawthorn EN515</p>
                        <p>Time: 1:30pm - 2:30pm</p>
                        <p>Location</p>
                        <img src="images/swin2.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <section id="openModal_2" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Network Security and Resilience</h2>
                        <h3>Tutorial</h3>
                        <p>Hawthorn ATC 321</p>
                        <p>Time: 2:30pm - 3:30pm</p>
                        <p>Location</p>
                        <img class="img_about" src="images/swin2.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <section id="openModal_3" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Creating Web Applications</h2>
                        <h3>Lecture</h3>
                        <p>Hawthorn EN 313</p>
                        <p>Time: 6:30pm - 8:30pm</p>
                        <p>Location</p>
                        <img src="images/swin2.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <section id="openModal_4" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Network Security and Resilience</h2>
                        <h3>Lecture 2</h3>
                        <p>Hawthorn EN 413</p>
                        <p>Time: 8:30am - 10:30am</p>
                        <p>Location</p>
                        <img src="images/swin2.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <section id="openModal_5" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Network Routing Principles</h2>
                        <h3>Practical</h3>
                        <p>Hawthorn ATC 329</p>
                        <p>Time: 11:30am - 2:30pm</p>
                        <p>Location</p>
                        <img src="images/swin1.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <section id="openModal_6" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Creating Web Applications</h2>
                        <h3>Lab</h3>
                        <p>Hawthorn BA 601</p>
                        <p>Time: 8:30am - 10:30am</p>
                        <p>Location</p>
                        <img src="images/swin3.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <section id="openModal_7" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Network Security and Resilience</h2>
                        <h3>Lab</h3>
                        <p>Hawthorn EN 305</p>
                        <p>Time: 2:30pm - 4:30pm</p>
                        <p>Location</p>
                        <img src="images/swin2.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>

                </section>

                <section id="openModal_8" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Information Systems Risk and Security</h2>
                        <h3>Lecture</h3>
                        <p>Hawthorn EN 313</p>
                        <p>Time: 8:30am - 10:30am</p>
                        <p>Location</p>
                        <img src="images/swin2.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <section id="openModal_9" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Information Systems Risk and Security</h2>
                        <h3>Lab</h3>
                        <p>Hawthorn ATC 326</p>
                        <p>Time: 5:30pm - 10:30pm</p>
                        <p>Location</p>
                        <img src="images/swin1.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <section id="openModal_10" class="modalDialog">
                    <section class="align_center">  <a href="#close" title="Close" class="close">X</a>
                        <h2>Network Routing Principles</h2>
                        <h3>Lecture</h3>
                        <p>Hawthorn EN 615</p>
                        <p>Time: 10:30am - 12:30pm</p>
                        <p>Location</p>
                        <img src="images/swin2.gif" alt="swinburne map" title="Swinburne Map"  />
                    </section>
                </section>

                <!--End of the content for modals-->

            </dd>

            <!--End of timetable content -->

            <dt>
                Contact
            </dt>

            <dd>
                <a href="mailto:adam@jarzebak.eu">
                    Adam Jarzebak</a>
            </dd>

        </dl>

    </section>


    <article class="about_app">
        <h2>Reflection</h2>

        Aprochaes, which I have used for this assignemnt are very different. Starting from lectures notes, labs resources finishing on different websites.
        However, I have not purely used any of provided materials, I prefer to write them by myslef. Then, I'm assured of completely understaning of what I'm doing.
        For this assignemnt I implement various of great solutions. I wanted to keep my website simple and user friendly as well. I hope you will enjoying viewing this website.

    </article>

    <br/>
    <br/>

    <section class="align_center">
        <h2>Requirement for this assignemnt</h2>

        <ul id="about_list">
            <li>
                HTML Requirements that you have completed
                with internal website links to example as appropriate.
            </li>
            <li>CSS requirements that you have completed
                with internal website links to example as appropriate.
            </li>
        </ul>

        <p class="align_center">Below you can see the requirements for this assigment.</p>
        <br/>

        <object height="950" data="resources/requirements.pdf" type="application/pdf" width="860">
            Your browser does not support this interface.<a href="https://ilearn.swin.edu.au/bbcswebdav/pid-6302642-dt-content-rid-35423528_2/courses/2017-HS1-COS10011-220385/COS10011_60004_60007%20A1_2017S1.pdf">click here to
            download the PDF file.</a>

        </object>

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

