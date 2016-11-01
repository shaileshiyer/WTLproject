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
    <li><a href="products.php">Shop</a></li>
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
    
        <div class="jumbotron fullwindow" style="background: url('img/ps3_white_01.jpg') center;background-size:cover;
color:#fff;" >
        <font style="Verdana" color="black"><h1><u>Introducing the all new Sony PS3,</u></h1>
        <p class="below">Price starts from $299 only.</font>
    
            
            
        <a href="cart.php?checked=1&id=2&name=Playstation3&cost=299" class="button">Buy Now</a>
            </p>    
    </div>
    
<div class="main_content">
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <img src="img/2.png" />
            <div class="jumbotron-content">
                <h3><u> WHAT IS PS3</u></h3>
                <br>
                <p> <b>The PlayStation 3 (PS3) is a home video game console produced by Sony Computer Entertainment. It is the successor to PlayStation 2, as part of the PlayStation series. It competes with Microsoft's Xbox 360 and Nintendo's Wii as part of the seventh generation of video game consoles. </b> 
.</p>
            </div>
        </div>
    </div>
    <!-- You can make the image come on the left or right by placing it either above or below the div tag of jumbotron content -->
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <div class="jumbotron-content">
                <h3><u>WIRELESS CONTROL</u></h3>
                <br>
                <p> <b>(<b>PSN</b>)</b>The DualShock is a line of gamepads with vibration-feedback developed by Sony Computer Entertainment for PlayStation consoles and devices.The SIXAXIS and DUALSHOCK 3 wireless controller can be used either wirelessly or connected with a USB cable to the PlayStation®3. The controller must be charged for wireless use. Once the controller is charged and the PS3 is on, the controller can be switched between wireless and wired use.., </p>
            </div>
            <img src="img/1.JPG" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h4>PlayStation Store</h4><br>
            <img src="img/p4.png" class="colimage"/><br>
            <p><i>Browse deals on hundreds of great games,<br>add-ons and themes for your console. The<br>store offers a range of downloadable content<br>both for purchase and available free of charge</i>.</p>
        </div>
        <div class="col-md-4">
            <h4>PLAYSTATION NETWORK</h4><br>
            <img src="img/4.JPG" class="colimage"/><br>
            <p><i>PlayStation Network is the unified online multiplayer gaming and digital media delivery service provided by Sony Computer Entertainment for PlayStation 3 and PlayStation Portable, announced during the 2006 PlayStation Business Briefing meeting in Tokyo. The service is always connected,[163] free,[164] and includes multiplayer support.[13] The network enables online gaming, the PlayStation Store, PlayStation Home and other services. PlayStation Network uses real currency and PlayStation Network Cards as seen with the PlayStation Store and PlayStation Home..</i></p>
        </div>
        <div class="col-md-4">
            <h4>PlayStation games</h4><br>
            <img src="img/3.jpg" class="colimage"/><br>
            <p><i><br>PS3 EXCLUSIVE GAMES<br>gran turismo<br>god of war 3 <br>last of us<br>uncharted<br></i></p>
        </div>
    </div>
    
    <div class="footer">
        <hr>
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