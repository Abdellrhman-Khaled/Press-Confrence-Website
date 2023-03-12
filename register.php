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
    <title>Register</title>
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

            <h1 style="color: white;">Register</h1>

            <p style="color: white;">Every year we aim to have an unbelievable time, and this year we’d love it for you to join us. Conference passes only cost $50, one of the best values you’ll find.</p>

        </div>
    </section>

    <!-- Lead -->

    <section class="row">
        <div class="grid">

            <section class="col-2-3">

                <h2>Purchase a Conference Pass</h2>
                <h5>$50 per Pass</h5>

                <p> Purchase your Deep Learning Conference pass using the form to the right. Multiple passes may be purchased within the same order, so feel free to bring a friend or two along. Once your order is finished we'll follow up and provide a receipt for your purchase. See you soon!</p>

                <h4> Why Attend?</h4>

                <ul class="why-attend">
                    <li>Leading professional Artificial Intelligence speakers</li>
                    <li>One full day of workshops and two full days of presentations</li>
                    <li>Hosted at the Cairo Convention Center, a beautiful landmark</li>
                    <li>January in Cairo is simply amazing</li>
                </ul>
            </section>
            <!--

                -->
            <form class="col-1-3" action="t_configuration.php" method="post">

                <fieldset class="register-group">

                    <label>
                        Username
                        <input type="text" name="username2" placeholder="Username" required>
                    </label>

                    <label>
                        Email
                        <input type="email" name="email2" placeholder="Email address" required>
                    </label>



                    <label>
                        Age | +16
                        <input type="number" name="age" min="16" max="100" required />
                    </label>

                    <select id="gender" name="gender" style="width: 100px;" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <label>
                        Country
                        <input type="text" name="country" required />
                    </label>

                    <br />

                    <label>
                        University
                        <input type="text" name="university" id="university" placeholder="optional">

                    </label>

                    <label>
                        College
                        <input type="text" name="college" id="college" placeholder="optional">
                    </label>

                    <label>
                        Major
                        <input type="text" name="major" id="major" placeholder="optional">
                    </label>

                    <label>
                        Level
                        <input type="number" name="levell" min="0" max="5" required value="1">
                    </label>

                    <label>
                        Number of tickets
                        <input type="number" name="tickets" min="0" max="20" required value="1">
                    </label>




                </fieldset>

                <input class="btn btn-default" type="submit" name="submit" value="Purchase">

            </form>

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