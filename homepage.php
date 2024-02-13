<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.html");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Analysis</title>
    <link rel="stylesheet" href="style.css">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/63c2fed663.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Header -->
    <nav class="navheader">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Self Analysis</label>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="./contactUs.html">Contact Us</a></li>
                <li>
                    <a href="./dashboard.html">
                    <span>Dashboard</span>
                </a></li>
                <li>
                    <a href="./logout.php">
                        <i class="fa-solid fa-lock-open"></i>
                        <span>Logout</span>
                </a></li>
            </ul>
        </nav>

    <!-- image slider -->
    
    <div class="container">
        <span class="next">&#10095;</span>
        <span class="prev">&#10094;</span>

        <section class="slides-row">
            <div class="slide" id="lastImageDuplicate">
                <img src="./media/home10.jpg">
            </div>
            <div class="slide">
                <img src="./media/home1.jpg">
            </div>
            <div class="slide">
                <img src="./media/home2.jpg">
            </div>
            <div class="slide">
                <img src="./media/home4.jpg">
            </div>
            <div class="slide">
                <img src="./media/home5.jpg">
            </div>
            <div class="slide">
                <img src="./media/home6.jpg">
            </div>
            <div class="slide">
                <img src="./media/home7.jpg">
            </div>
            <div class="slide">
                <img src="./media/home8.jpg">
            </div>
            <div class="slide">
                <img src="./media/home9.jpg">
            </div>
            <div class="slide">
                <img src="./media/home10.jpg">
            </div>
            <div class="slide" id="fristImageDuplicate">
                <img src="./media/home1.jpg">
            </div>
        </section>
    </div>


    <div class="aboutUs">
        <h2>Welcome to website</h2>
        <p>
            An individual to understand his or her own personality without the aid of another person. 
            Hence, it is very essential strategy that every teacher should adopt in a regular classroom 
            teaching leaning process. Self-analysis was the ability with which an individual interpreted 
            his/her own conscious as well as unconscious thoughts. Self-analysis refining one’s own ability
            promoted the ability of recalling and recognizing the given information at the knowledge level,
            classifying, organizing, estimating and comparing the given information at the behaviour level, 
            drawing conclusions, observing the facts, collecting evidence to formulate logical reasoning, 
            solving new problems using the existing knowledge at the skill level, making conclusions by 
            using extended thinking at value level represented in a simple model. 
        </p>
        <p>
            An individual to understand his or her own personality without the aid of another person. 
            Hence, it is very essential strategy that every teacher should adopt in a regular classroom 
            teaching leaning process. Self-analysis was the ability with which an individual interpreted 
            his/her own conscious as well as unconscious thoughts. Self-analysis refining one’s own ability
            promoted the ability of recalling and recognizing the given information at the knowledge level,
            classifying, organizing, estimating and comparing the given information at the behaviour level, 
            drawing conclusions, observing the facts, collecting evidence to formulate logical reasoning, 
            solving new problems using the existing knowledge at the skill level, making conclusions by 
            using extended thinking at value level represented in a simple model. 
        </p>
        <p>
            An individual to understand his or her own personality without the aid of another person. 
            Hence, it is very essential strategy that every teacher should adopt in a regular classroom 
            teaching leaning process. Self-analysis was the ability with which an individual interpreted 
            his/her own conscious as well as unconscious thoughts. Self-analysis refining one’s own ability
            promoted the ability of recalling and recognizing the given information at the knowledge level,
            classifying, organizing, estimating and comparing the given information at the behaviour level, 
            drawing conclusions, observing the facts, collecting evidence to formulate logical reasoning, 
            solving new problems using the existing knowledge at the skill level, making conclusions by 
            using extended thinking at value level represented in a simple model. 
        </p>
        <p>
            An individual to understand his or her own personality without the aid of another person. 
            Hence, it is very essential strategy that every teacher should adopt in a regular classroom 
            teaching leaning process. Self-analysis was the ability with which an individual interpreted 
            his/her own conscious as well as unconscious thoughts. Self-analysis refining one’s own ability
            promoted the ability of recalling and recognizing the given information at the knowledge level,
            classifying, organizing, estimating and comparing the given information at the behaviour level, 
            drawing conclusions, observing the facts, collecting evidence to formulate logical reasoning, 
            solving new problems using the existing knowledge at the skill level, making conclusions by 
            using extended thinking at value level represented in a simple model. 
        </p>
        <p>
            An individual to understand his or her own personality without the aid of another person. 
            Hence, it is very essential strategy that every teacher should adopt in a regular classroom 
            teaching leaning process. Self-analysis was the ability with which an individual interpreted 
            his/her own conscious as well as unconscious thoughts. Self-analysis refining one’s own ability
            promoted the ability of recalling and recognizing the given information at the knowledge level,
            classifying, organizing, estimating and comparing the given information at the behaviour level, 
            drawing conclusions, observing the facts, collecting evidence to formulate logical reasoning, 
            solving new problems using the existing knowledge at the skill level, making conclusions by 
            using extended thinking at value level represented in a simple model. 
        </p>
    </div>

    
</body>
<script src="script.js"></script>
</html>