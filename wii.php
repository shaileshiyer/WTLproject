<?php
session_start();
                
?>
<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>     
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
             if($_SESSION["type"]=='1'){
                echo "<li><a href='adminconsole.php'>Admin Panel</a></li>";
                
            }
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
    
        <div class="jumbotron fullwindow" style="background: url('img/w2.jpg') center no-repeat;background-size:contain;
color:#fff;" >
            
        <p class="below">Price starts from $299 only.
       <a href="cart.php?checked=1&id=4&name=WiiU&cost=299" class="button">Buy Now</a>     </p>    
    </div>
    
<div class="main_content">
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <img src="img/w3.png" />
            <div class="jumbotron-content">
                <br>
                <h2><u>Wii U GamePad</u></h2>
                <br>
                <p>The <b>Wii U GamePad</b> controller removes the traditional barriers between you, your games, and your TV by creating a second window into the video game world.<br> It incorporates a 6.2-inch, 16:9 aspect ratio LCD touch screen, as well as traditional button controls and two analog sticks.<br>The GamePad also includes motion control, a front-facing camera, a microphone, stereo speakers, rumble features, a sensor bar, a stylus, and support for Near Field Communication (NFC). It is powered by a rechargeable lithium-ion battery and weighs approximately 1.1 pounds. </p>
            </div>
        </div>
    </div>
    <!-- You can make the image come on the left or right by placing it either above or below the div tag of jumbotron content -->
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <div class="jumbotron-content">
                <h2><u>Make Wii U the centerpiece of your home entertainment</u></h2>
                <br>
                <p>Make <b>Wii</b> U the centerpiece of your home entertainment setup with these applications, accessible the day you bring your system home. Each time you turn on your Wii U console, you'll be greeted by Mii characters from around the world, and the Wii U community's most talked about games in the WaraWara Plaza.</p>
            </div>
            <img src="img/w4.jpg" width="1000px"/>
           
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h4>Play Exlusive games</h4><br>
            <img src="img/w5.jpg" class="colimage"/><br>
            <p><i>Check out the new generation of exclusive <b>Nintendo games</b> in gorgeous high-definition on the Wii U console - an amazing value the whole family can enjoy.</i>.</p>
        </div>
        <div class="col-md-4">
            <h4>Play Nintendo</h4><br>
            <img src="img/w6.jpg" class="colimage"/><br>
            <p><i>Young gamers and their parents have a new home on the web with Play Nintendo. Head to <b>Play Nintendo</b> to learn about your favorite characters, try out some fun activities, challenge yourself with a quiz or two, and much more. We'll add fresh content each week, so you'll always find something new to try.</i></p>
        </div>
        <div class="col-md-4">
            <h4>Wii Remote Plus</h4><br>
            <img src="img/w1.jpg" class="colimage"/><br>
            <p><i>The Wii Remote Plus is a unique controller for the Wii and Wii U systems that has the increased sensitivity of Wii <b>MotionPlus</b> built-in.<br>The button pressing of typical controllers is replaced by the natural, fluid motion of your hand. The Wii Remote Plus senses your every action and makes you feel less like a player and more like you're part of the game.</i></p>
        </div>
    </div>
    
    <div class="footer">
        <hr>Copyright 2016-17
        <p >All rights reserved The Gamer.Pvt.Ltd</p>
    </div>
    </div>
    
    
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