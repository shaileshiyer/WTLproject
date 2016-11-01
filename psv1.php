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
    
        <div class="jumbotron fullwindow" style="background: url('img/7.jpg') center;background-size:cover;
color:#fff;" >
        <font style="Verdana" color="red"><h1><u>Introducing the all new Sony PS Vita,</u></h1>
        <p class="below">Price starts from $200 only.</font>
    
            
            
        <a href="cart.php?checked=1&id=3&name=PlaystationVita&cost=200" class="button">Buy Now</a>
            </p>    
    </div>
    
<div class="main_content">
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <img src="img/8.jpg" />
            <div class="jumbotron-content">
                <h3><u> WHAT IS PS VITA</u></h3>
                <br>
                <p> <b><BR>The PlayStation Vita (officially abbreviated PS Vita or Vita) is a handheld game console developed and released by Sony Interactive Entertainment. It is the successor to the PlayStation Portable as part of the PlayStation brand of gaming devices.</b> 
.</p>
            </div>
        </div>
    </div>
    <!-- You can make the image come on the left or right by placing it either above or below the div tag of jumbotron content -->
    <div class="row">
        <div class="jumbotron" style="background-color:#fff;" >
            <div class="jumbotron-content">
                <h3><u> REMOTE PLAY ON PS VITA</u></h3>
                <br>
                <p> <b>(<b>PSN</b>)</b>Remote Play is a feature that lets the PS Vita operate a PS4 via a wireless connection. This gives you the ability to play most PS4 games away from the couch and even away from home on your PS Vita.</p>
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
            <h4>PS VITA  GAMES</h4><br>
            <img src="img/12.jpg" class="colimage"/><br>
            <p><i><br><br>ATTACK OF TITAN<br>BERSERK <br>MIGHTY NO 9<br>YS 7<br>MANY MORE...........</i></p>
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