<?php
session_start();
include("config.php");
$error="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 
$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
 $count=0;   
$result=mysqli_query($db_conn,$sql);
if($result != false){
    $row=mysqli_fetch_array($result);


$count=mysqli_num_rows($result);

$type=$row[0];
}
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION["login"]="true";
$_SESSION["userid"] = $type;
header("location: index.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="h1.css">
</head>
<body background="#fff">
<div class="sync" id="navbar">
    <ul>
    <li><a href="hompag.htm">Home</a></li>
    <li><a href="#">Products</a>
        <div class="dropcontent">
       
           <a href="ps4.htm">PS4</a>
            <a href="ps3.htm">PS3</a>
           <a href="psv1.htm">ps Vita</a>
           <a href="wii.htm">Wii</a>
           <a href="x1.htm">Xbox one</a>
        </div>
    </li>
    <li><a href="products.php">Shop</a></li>
    <li style="float:right;text-align:center;padding-right:100px;"><b>The Gamer</b>
    <img src="img/icon.png" height="48px" width="48px">
    </li>
</ul>
</div>


    <div class="jumbotron">

    </div>
<div class="row">
    <div class="jumbotron" >

    <table align="center">
    <form action="" method="post">
        <tr>
            <td>UserName  :</td>
            <td><input type="text" name="username" class="box"/></td>
        </tr>
        <tr>
            <td>Password  :</td>
            <td><input type="password" name="password" class="box" /></td>
        </tr>
        <tr>
            <td><input type="submit" value=" Submit "/></td>
            <td><a href="signup.php">sign up</a></td>
        </tr>
        
        <tr><td>    <?php echo $error ?></td></tr>
        </form>
        </table>
    </div>
    </div>
    <div class="footer">
        <hr>
        <p >All rights reserved The Gamer.Pvt.Ltd</p>       
    </div>
    </body>
</html>