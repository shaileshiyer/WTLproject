<?php
session_start();
include('config.php');

if (!isset($_SESSION["login"])){
    header('location: login.php?login=0');
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>           
<link rel="stylesheet" type="text/css" href="h1.css">
<script>

function addtocart(id,name,cost){
        console.log("entered JS");
        window.location.href = 'cart.php?checked=1&id='+ id +'&name='+name+'&cost='+cost;
    }
function remove(id,name,cost){
        window.location.href = 'cart.php?checked=0&id='+ id +'&name='+name+'&cost='+cost;
    }
    
</script>    
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
    <div class="row">
    <table align="center" cellpadding=20%>
       <form method="GET" name="form">
       <tr>
           <th>name</th>
           <th>cost</th>
           <th>remove to cart</th>
       </tr>
    <?php 
        $userid=$_SESSION['userid'];
       $sqli="SELECT * FROM cart WHERE userid='$userid';";
       $result = mysqli_query($db_conn,$sqli);

       if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
				
				echo '<tr>';
				echo '<td>'.$row['productname'].'</td>';
				echo '<td>'.$row['cost'].'</td>';
				?>

				<td>
                    <input type="button" name="<?php echo $row['prodid'] ?>"
                           value="remove" onclick="remove(<?php echo $row['cartid']?>,'<?php echo $row['productname']?>',<?php echo $row['cost']?>)">
					
				</td>
				
				<?php 
				echo '</tr>';

			}
}
else
    echo '0 results';

	?>

       
       </form>
    </table> 
        </div><br>
    <a href="order.php" class="button"> Proceed to payment</a><br>
   <table align="center" cellpadding=20%>
       <form method="GET" name="form1">
       <tr>
           <th>image</th>
           <th>name</th>
           <th>description</th>
           <th>cost</th>
           <th>add to cart</th>
       </tr>
    <?php 
       $sqli="SELECT * FROM products ORDER BY prodid ASC";
       $result = mysqli_query($db_conn,$sqli);

       if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
				
				echo '<tr>';
                echo "<td><image src='img/".$row['productimage']."' height='300' width='300'></td>";
				echo '<td>'.$row['productname'].'</td>';
                echo '<td>'.$row['description'].'</td>';
				echo '<td>'.$row['cost'].'</td>';
				?>

				<td>
                    <input type="button" name="<?php echo $row['prodid'] ?>"
                           value="add to cart" onclick="addtocart(<?php echo $row['prodid']?>,'<?php echo $row['productname']?>',<?php echo $row['cost']?>)">
					
				</td>
				
				<?php 
				echo '</tr>';

			}
}
else
    echo '0 results';

	?>

       
       </form>
    </table>   
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
    <?php
    mysqli_close($db_conn);
    ?>
    

</body>
</html>