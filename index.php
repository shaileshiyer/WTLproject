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
    <li style="float:right;text-align:center;padding-right:30px;"><b>The Gamer</b>
    <img src="img/icon.png" height="48px" width="48px">
    </li>
    <li style="float:right;text-align:center;">
        <a href="about.html">About Us</a>    
    </li>    
</ul>
</div>
    
 <div class="jumbotron fullwindow" style="background: url('img/gamer.jpg') center;background-size:contain;
z-index:-1;color:#fff;" >
        <h1>Welcome to the worlds best seller for consoles</h1>
        <p class="below">We got some exciting offers for this holiday season so wait for them.Let the console wars begin.</p>
    </div>
    
<div class="main_content">
    <div class="row">
   <div class="jumbotron" style="background-color:#fff;" >
       <img src="img/PlayStation-4-vs-Xbox-One.jpg" />
       <div class="jumbotron-content">
       <h3>PS 4 or Xbox one find out which one is best for you</h3>
       <br>
       <p>Choose one and hop on into the exciting world of videogames</p>
       </div>
        </div>
    </div>
    </div>
    <div class="footer">
        <hr>
        <p >All rights reserved The Gamer.Pvt.Ltd</p>       
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