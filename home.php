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
        <title>Deep Learning Conference</title>
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
                    <a href="home.php">Deep Learning<br> Conference</a>
                </h1>
            </section>

            <h3 class="tagline">January 10th&ndash;13th &mdash; Cairo, Egypt</h3>
            
            <nav class="nav primary-nav">
                <ul>
                    <li><a href="home.php" target="_self">Home</a></li><!--
                    --><li><a href="speakers.php" target="_self">Speakers</a></li><!--
                    --><li><a href="schedule.php" target="_self">Schedule</a></li><!--
                    --><li><a href="venue.php" target="_self">Venue</a></li><!--
                    --><li><a href="register.php" target="_self">Register</a></li>
                    <li><a href="r_users.php" target="_self">Registered users</a></li>
                    <li><a href="logout.php" target="_self">Log out</a></li>
                </ul>
            </nav>

        </header>

        <!-- Hero -->

        <section class="hero container">
            
            <h2>The future of AI and its impact on human life</h2>
            
            <p>The world’s top Deep Learning speakers are united by one common trait: <br>
The ability to educate, amaze, and disturb an audience in equal measure. <br>
Join us this January!</p>
            
            <a class="btn btn-alt" href="register.php">Register Now</a>

        </section>

        <!-- Teasers -->

        <section class="row">
            <div class="grid">

                <!-- Speakers -->
            
                <section class="teaser col-1-3">
                    <h5>Speakers</h5>
                    <a href="speakers.php">
                        <img src="schedule.jpeg" alt="Professional Speaker">
                        <h3>World-Class Speakers</h3>    
                    </a>
                    <p>Joining us from all around the world are 2 of the top Deep Learning speakers, here to share their stories.</p>
                </section><!--

                Schedule
            
                --><section class="teaser col-1-3">
                    <h5>Schedule</h5>
                    <a href="schedule.php">                        
                        <img src="speaker.jpeg" alt="Amazing Schedule">
                        <h3>Three Inspiring Days</h3>
                    </a>
                    <p>Enjoy three inspiring and action-packed days of talks, gatherings, and all-around good times.
                    </p>
                </section><!-- 
                
                Venue

                --><section class="teaser col-1-3">
                    <h5>Venue</h5>
                    <a href="venue.php">
                        <img src="venue.jpeg" alt="Incredible Venue">
                        <h3>Cairo Convention Center</h3>
                    </a>
                    <p>Within the heart of Cairo, The Convention Center will provide a beautiful conference venue.
                    </p>
                </section>

            </div>
        </section>
        
        <!-- Footer -->

        <footer class="primary-footer container group">

            <small>&copy; Deep Learning Conference</small>
           
            <nav class="nav">
                <ul>
                    <li><a href="home.php">Home</a></li><!--
                    --><li><a href="speakers.php">Speakers</a></li><!--
                    --><li><a href="schedule.php">Schedule</a></li><!--
                    --><li><a href="venue.php">Venue</a></li><!--
                    --><li><a href="register.php">Register</a></li>
                </ul>
            </nav>

        </footer>
        
    </body>
    
</html>