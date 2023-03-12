<?php
session_start();
if (!(isset($_SESSION['id']))) {
    header("location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Speakers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
    <link rel="icon" href="icons8-deep-learning.jpeg">
</head>

<body>

    <!-- Header -->

    <header class="primary-header container group">

        <section class="container>">
            <h1 class="logo">
                <a href="home.php">Deep Learning <br> Conference</a>
            </h1>
        </section>

        <h3 class="tagline">January 10&ndash;13th &mdash; Cairo, Egypt</h3>

        <nav class="nav primary-nav">
            <ul>
                <li><a href="home.php" target="_self">Home</a></li>
                <!--
                    -->
                <li><a href="speakers.php" target="_self">Speakers</a></li>
                <!--
                    -->
                <li><a href="schedule.php" target="_self">Schedule</a></li>
                <!--
                    -->
                <li><a href="venue.php" target="_self">Venue</a></li>
                <!--
                    -->
                <li><a href="register.php" target="_self">Register</a></li>
                <li><a href="r_users.php" target="_self">Registered users</a></li>
                <li><a href="logout.php" target="_self">Log out</a></li>
            </ul>
        </nav>

    </header>

    <!-- Lead -->

    <section class="row-alt">
        <div class="lead container">

            <h1 style="color: white;">Speakers</h1>

            <p style="color: white;">We're happy to welcome 2 of the top Deep Learning speakers in the world.<br>Prepare for an
                inspiration extravaganza.</p>
        </div>
    </section>

    <!-- Main Content -->

    <section class="row">
        <div class="grid">

            <section class="speaker" id="pranav-mistry">

                <div class="col-2-3">

                    <h2>Pranav Mistry</h2>
                    <h5>Computer Scientist and Inventor</h5>

                    <p>Pranav is the CEO of NEON, which unveiled their artificial humans at this year’s CES. Before NEON, he was President and CEO, STAR Labs, and best known for his inventions of SixthSense and the Samsung Gear.
                        <br>Pranav speaks on subjects ranging from Artificial Intelligence, Robotics, Wearable Computing, Augmented Reality, and Gestural Computing.
                    </p>

                    <h5>More About Pranav</h5>

                    <p>

                        SixthSense is a gesture-based wearable computer system developed at MIT Media Lab by Steve Mann in 1994 and 1997 (headworn gestural interface), and 1998 (neckworn version), and further developed by Pranav Mistry (also at MIT Media Lab), in 2009, both of whom developed both hardware and software for both headworn and neckworn versions of it. It comprises a headworn or neck-worn pendant that contains both a data projector and camera.</p>



                </div>
                <!--

                    -->
                <aside class="col-1-3">
                    <div class="speaker-info">

                        <video controls poster="pranav.jpeg" autoplay>
                            <source src="pranav.mp4" type="video/mp4">
                        </video>


                        <ul class="sp">
                            <li><a href="https://twitter.com/pranavmistry?s=11&t=-5zHBoN5Sibwz_D08ZJoCw">@pranavmistry</a></li>
                            <li><a href="https://pranavmistry.com/">Pranav Mistry</a></li>
                        </ul>

                    </div>
                </aside>

            </section>

            <section id="franziska-bell">

                <div class="col-2-3">

                    <h2>Franziska Bell</h2>
                    <h5>HEAD OF DATA SCIENCE PLATFORMS AT UBER</h5>

                    <p>She speaks on AI applications as varied as forecasting, anomaly detection, Natural Language Processing, conversational AI, experimentation, segmentation, and more.</p>

                    <h5>More About Franziska</h5>

                    <p>Before Uber, Franziska was a Postdoc at Caltech where she developed a novel, highly accurate approximate quantum molecular dynamics theory to calculate chemical reactions for large, complex systems, such as enzymes. Franziska earned her Ph.D. in theoretical chemistry from UC Berkeley focusing on developing highly accurate, yet computationally efficient approaches which helped unravel the mechanism of non-silicon-based solar cells and properties of organic conductors.</p>


                </div>
                <!--

                    -->
                <aside class="col-1-3">
                    <div class="speaker-info">

                        <video controls poster="franziska.jpeg" autoplay>
                            <source src="franziska.mp4" type="video/mp4">
                        </video>

                        <ul class="sp">
                            <li><a href="https://twitter.com/bellfranziska?s=11&t=-5zHBoN5Sibwz_D08ZJoCw">@BellFranziska</a></li>
                            <li><a href="https://aiworld.com/speakers/franziska-bell">Franziska Bell</a></li>
                        </ul>

                    </div>
                </aside>

            </section>

        </div>
    </section>
    <!-- Footer -->

    <footer class="primary-footer container group">

        <small>&copy; Deep Learning Conference</small>

        <nav class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <!--
                    -->
                <li><a href="speakers.php">Speakers</a></li>
                <!--
                    -->
                <li><a href="schedule.php">Schedule</a></li>
                <!--
                    -->
                <li><a href="venue.php">Venue</a></li>
                <!--
                    -->
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>

    </footer>

</body>

</html>