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
    
    <div class="jumbotron"></div>    
<div class="main_content">
	<table align="center" cellpadding=20%>
       <form method="post" name="form">
       <tr>
           <th>name</th>
           <th>cost</th>
           <th>remove to cart</th>
       </tr>
    <?php 
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
                    <input type="button" name="<?php echo $row['prodid']; ?>"
                           value="remove" onclick="remove(<?php echo $row['cartid'] ?>,'<?php echo $row['productname'] ?>',<?php echo $row['cost'] ?>)">
					
				</td>
				
				<?php 
				echo '</tr>';

			}
       }
        else
            echo '0 results';
        $sqli="SELECT sum(cost) as total FROM cart WHERE userid='$userid';";
        $result = mysqli_query($db_conn,$sqli);
        $total=mysqli_fetch_assoc($result);   
        
	   
        ?>

       
       </form>
        <tr><?php 
                echo 'total cost is ';
                echo $total['total'];
            ?></tr>
    </table>
<div class="row">
<form name="orderform" method="post">
<h1>Online Order Form</h1>
<hr>
Please fill in the following details:<br><br>
name:<input type="text" name="name" size="25" maxlength="24" value="<?php echo $user['name'] ?>"><br><br>
Address:<textarea name="address" rows="10" cols="60">
			<?php echo $user['address'] ?>
			</textarea><br><br>
City:<input type="text" name="city" size="20" maxlength="19"><br><br>
State:<input type="text" name="state" size="19" maxlength="18"><br><br>
Zip:<input type="text" name="zip" size="7" maxlength="6">
<hr>
How would you like to pay for this product?<br><br>
<select name="credit">
<option selected value="mast">Mastercard
<option value="vis">Visa
<option value="amex">American Express
<option value="disc">Maestro
</select><br><br>
Please enter your card number:<input type="text" name="no" size="11" maxlength="10">
<hr>
Please take care that everything is filled up correctly!<br>    <br>
        <input type="button" value="Reset"/>
        <input type="submit" value="Submit order"/>
           <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                echo "Thank you from buying it from our site we hope u had a good time ur order id is ";
                echo $orderid."<br>";
            }
            mysqli_close($db_conn);
           
           ?>
    </form>
    </div>
    </div>
	<div class="footer">
        <hr>
        <p >All rights reserved The Gamer.Pvt.Ltd</p>       
    </div>
</body>
</html>