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
    <title>Schedule</title>
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

    <!-- Main Content -->

    <section class="row-alt">
        <div class="lead container">

            <h1 style="color: white;">Schedule</h1>

            <p style="color: white;">The conference opens with amazing workshops and continues with three days of incredible talks and keynotes, all of which are facilitated by industry-leading experts.</p>
        </div>
    </section>

    <!-- Lead -->

    <section class="row">
        <div class="container">

            <table>
                <thead>
                    <tr>
                        <th scope="row">
                            Workshops
                        </th>
                        <td class="schedule-offset" colspan="2">
                            January 10
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <time datetime="08:30:00">8:30 AM</time>
                        </th>
                        <td class="schedule-offset" colspan="2">
                            Registration
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <time datetime="09:00:00">9:00 AM</time>
                        </th>
                        <td>
                            <a href="speakers.php#pranav-mistry">
                                <h4>Pranav Mistry</h4>The Impossible is only in your mind
                            </a>
                        </td>
                        <td>
                            <a href="speakers.php#franziska-bell">
                                <h4>Franziska Bell</h4>Anomaly Detection
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <time datetime="12:30:00">12:30 PM</time>
                        </th>
                        <td class="schedule-offset" colspan="2">
                            Lunch
                        </td>
                    <tr>
                        <th scope="row">
                            <time datetime="14:00:00">2:00 PM</time>
                        </th>
                        <td>
                            <a href="speakers.php#pranav-mistry">
                                <h4>Pranav Mistry</h4>SixthSense, Samsung Galaxy Gear and Project Beyond
                            </a>
                        </td>
                        <td>
                            <a href="speakers.php#franziska-bell">
                                <h4>Franziska Bell</h4>Data Exploration and Preprocessing
                            </a>
                        </td>
                    </tr>
                    </tr>
                </tbody>
            </table>

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