<?php
session_start();
include('config.php');
$userid=$_SESSION['userid'];
$sqli="SELECT * FROM users WHERE userid='$userid';";
$result = mysqli_query($db_conn,$sqli);
$user=mysqli_fetch_assoc($result);    
                
if($_SERVER["REQUEST_METHOD"] == "POST")
{
                $sqli="SELECT * FROM cart WHERE userid='$userid';";
                $result=mysqli_query($db_conn,$sqli);
                $orderlist="";
                $totalcost=0;
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                while($row = mysqli_fetch_assoc($result)) 
                {
                    $orderlist=$orderlist.''.$row["productname"].',';
                    $totalcost+=$row['cost'];
                }
                $address=$_POST['address'];
                echo $address;    
                //$sql="INSERT INTO users VALUES (0,'$username','$password','$name','$address','$mobile')";
                $sql="INSERT INTO orderstable(orderlist,userid,address,totalcost) VALUES ('$orderlist','$userid','.$address.','$totalcost')";
                $orderid=mysqli_query($db_conn,$sql);
                $sql="SELECT MAX(orderno) AS orderno FROM orderstable WHERE userid='$userid'";
                $orderid=mysqli_query($db_conn,$sql);
                $orderid=mysqli_fetch_assoc($orderid);
                $orderid=$orderid['orderno'];    
                $sql="DELETE FROM cart WHERE userid='$userid';";
                $result=mysqli_query($db_conn,$sql);
    }

}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="h1.css">
<script>

function addtocart(id,name,cost){
         window.location.href = 'cart.php?checked=1&id='+ id +'&name='+name+'&cost='+cost;
    }
function remove(id,name,cost){
        window.location.href = 'cart.php?checked=0&id='+ id +'&name='+name+'&cost='+cost;
    }
    
</script>
<script src="jquery.min.js"></script>        
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
   
<div class="main_content">
	<table align="center" cellpadding=20%>
       <tr>
           <th>order No.</th>
           <th>products</th>
           <th>total cost</th>
       </tr>
    <?php 
       $sqli="SELECT * FROM orderstable WHERE userid='$userid';";
       $result = mysqli_query($db_conn,$sqli);
	   

       if (mysqli_num_rows($result) > 0) {
    // output data of each row
       while($row = mysqli_fetch_assoc($result)) 
        {
				
				echo '<tr>';
				echo '<td>'.$row['orderno'].'</td>';
				echo '<td>'.$row['orderlist'].'</td>';
				echo '<td>'.$row['totalcost'].'</td>';

				echo '</tr>';

			}
       }
        else
            echo '0 results';
        
	   
        ?>
           
    </table>
    </div>
    <div class="row">
        <?php
        echo 'Name :'.$user['name'].'<br>';
        echo 'User Name :'.$user['username'].'<br>';
        echo 'Address :'.$user['address'].'<br>';
        echo 'Mobile :'.$user['mobile'].'<br>';
        ?>
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
	<div class="footer">
        <hr>
        <p >All rights reserved The Gamer.Pvt.Ltd</p>       
    </div>
</body>
</html>