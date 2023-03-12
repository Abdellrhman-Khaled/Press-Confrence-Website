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
    <title>Venue</title>
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

            <h1 style="color: white;">Venue</h1>

            <p style="color: white;">The conference is held at The Cairo Convention Center, a beautiful landmark. <br> The conference hotel, Hilton Hotel, has an amazing view of the Nile River.</p>

        </div>
    </section>

    <!-- Main Content -->
    <section class="row">
        <div class="grid">

            <section class="venue-palace">

                <div class="col-1-3">
                    <h2>Cairo Convention Center</h2>
                    <p>Nasr City <br> Cairo - Egypt</p>
                    <p><a href="http://www.eeca.gov.eg/">eeca.gov.eg.com</a> <br> +2022633222 </p>
                </div>

                <iframe class="venue-map" class="col-2-3" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Cairo%20Convention%20Center+(Cairo%20Convention%20Center)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </section>

            <section class="venue-hotel">

                <div class="col-1-3">
                    <h2>Hilton Hotel</h2>
                    <p>Ramses<br> Cairo - Egypt</p>
                    <p><a href="https://www.hilton.com/en/hotels/caihehi-hilton-cairo-heliopolis/">hilton.com</a> <br> +20222677730</p>
                </div>

                <iframe class="venue-map" class="col-2-3" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Hilton%20ramses+(Hilton)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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