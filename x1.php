<?php
session_start();
                
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="h1.css">
</head>
<body background="#fff">
<div class="sync" id="navbar">
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Products</a>
        <div class="dropcontent">
       
           <a href="ps4.php">PS4</a>
            <a href="ps3.php">PS3</a>
           <a href="psv1.php">ps Vita</a>
           <a href="wii.php">Wii</a>
           <a href="x1.php">Xbox one</a>
        </div>
    </li>
    <li><a href="form2.htm">Buy Now</a></li>
    <?php 
        if (isset($_SESSION["login"]) && $_SESSION["login"] == "true" ){
            echo "<li><a href='orderlist.php'>Pending orders</a></li>";
            echo "<li><a href='logout.php'>Logout</a></li>";
        }
        else{
            echo "<li><a href='login.php'>Login</a></li>";
        
        }
    ?>
    <li style="float:right;text-align:center;padding-right:20px;"><b>The Gamer</b>
    <img src="img/icon.png" height="48px" width="48px">
    </li>
</ul>
</div>
    
        <div class="jumbotron fullwindow" style="background: url('img/x1.jpg') center;background-size:cover;
color:#fff;" >
            <h1><font face="verdna"><u>The most Powerful Console is here </u></h1>
        <p class="below">Price starts from $399 only.
    
            
            
       <a href="cart.php?checked=1&id=5&name=XboxOne&cost=399" class="button">Buy Now</a>
                </p>    
    </div>
    
<div class="main_content">
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <img src="img/x2.png" />
            <div class="jumbotron-content">
                <h2><u>Xbox One wireless controller</u></h2>
                <br>
                <p>Experience the action like never before with the Xbox One <b>Wireless Controller</b>.<br> Impulse triggers, responsive thumbsticks and D-pad provide greater intensity, precision and comfort.</p>
            </div>
        </div>
    </div>
    <!-- You can make the image come on the left or right by placing it either above or below the div tag of jumbotron content -->
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <div class="jumbotron-content">
                <h2><u>Games, entertainment, and TV, all in one. </u></h2>
                <br>
                <p>With <b>Xbox</b>, you'll find the best apps, TV, movies, music and sports all in one place.<br> And with <b>Xbox One</b>, switch quickly from one to another, or enjoy an app and a game side-by-side so you never miss a moment.<br>And talk with family and friends on Skype while watching TV. <br>It's all the entertainment you love. All in one place.</p>
            </div>
            <img src="img/x3.jpg" />
            </font>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h4>Play Together with Xbox Live Gold</h4><br>
            <img src="img/x4.jpg" class="colimage"/><br>
            <p><i>Play with friends on the most advanced <br>multiplayer network, get free games, <br>and receive exclusive discounts</i>.</p>
        </div>
        <div class="col-md-4">
            <h4>Get your favourite entertainment apps</h4><br>
            <img src="img/x5.jpg" class="colimage"/><br>
            <p><i>Get access to dozens of apps and services on your Xbox. <br>And with <b>Xbox One</b>, quickly switch between apps, <br>or snap them side by side to do two things at once.</i></p>
        </div>
        <div class="col-md-4">
            <h4>Do more with Kinect</h4><br>
            <img src="img/x6.jpg" class="colimage"/><br>
            <p><i>With Kinect for <b>Xbox One</b>, command your Xbox and TV with your voice and gestures, play games where you are the controller and make Skype calls in HD. Plus, get a token to download the newest game in the award-winning Dance Central series, Dance Central Spotlight, included with your Kinect.</i></p>
        </div>
    </div>
    
    <div class="footer">
        <hr>Copyright 2016-17
        <p >All rights reserved The Gamer.Pvt.Ltd</p>
    </div>
    </div>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>    
    <script>
    $(document).ready(function(){
	   $(window).bind('scroll', function() {
			 if ($(window).scrollTop() > 0) {
				 $('#navbar').addClass('fixed');
			 }
			 else {
				 $('#navbar').removeClass('fixed');
			 }
		});
	});
    
</script>

</body>
</html>