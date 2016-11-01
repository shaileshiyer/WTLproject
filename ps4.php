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
    
        <div class="jumbotron fullwindow" style="background: url('img/p1.jpg') center;background-size:cover;
color:#fff;" >
        <h1><u>Introducing the all new Sony,</u></h1>
        <p class="below">Price starts from $349 only.
    
            
            
        <a href="cart.php?checked=1&id=1&name=Playstation4&cost=349" class="button">Buy Now</a>
             </p>    
    </div>
    
<div class="main_content">
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <img src="img/p2.jpg" />
            <div class="jumbotron-content">
                <h3><u>Unparalleled Control</u></h3>
                <br>
                <p>The <b>DUALSHOCK 4</b> wireless controller has been updated with a new look and feel, including a more visible, colourful light bar to put even more of the game into your hands. Its the most ergonomic, intuitive PlayStation controller ever designed.</p>
            </div>
        </div>
    </div>
    <!-- You can make the image come on the left or right by placing it either above or below the div tag of jumbotron content -->
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <div class="jumbotron-content">
                <h3><u>Stay Connected Always</u></h3>
                <br>
                <p>With <b>PlayStation Network(<b>PSN</b>)</b>, explore a vast digital network brimming with not only the very best in console gaming, but all of your favourite movies, music and television as well.</p>
            </div>
            <img src="img/p3.png" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h4>PlayStation Store</h4><br>
            <img src="img/p4.png" class="colimage"/><br>
            <p><i>Browse deals on hundreds of great games,<br>add-ons and themes for your console. The<br>store offers a range of downloadable content<br>both for purchase and available free of charge</i>.</p>
        </div>
        <div class="col-md-4">
            <h4>Online Multiplayer</h4><br>
            <img src="img/p5.png" class="colimage"/><br>
            <p><i>Jump into an online world where alliances are <br>forged and rivalries settled - <br>only with PlayStation Plus on PS4.</i></p>
        </div>
        <div class="col-md-4">
            <h4>PlayStation Camera</h4><br>
            <img src="img/p6.jpg" class="colimage"/><br>
            <p><i>If you're into broadcasting your gameplay live,<br>you can add picture-in-picture video of yourself<br>with the PlayStation 4 Camera.<br>With the PS4 camera, you're also able to play great games like Just Dance 2015 and you can mess-around in the Playroom. <br>The camera can also allow neat tricks like facial recognition sign-in.</i></p>
        </div>
    </div>
    
    <div class="footer">
        <hr>
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