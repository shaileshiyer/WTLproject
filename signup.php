<?php 
                
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
                $name=addslashes($_POST['t1']);
                $mobile=addslashes($_POST['t2']);
                $address=addslashes($_POST['tal']);
                $username=addslashes($_POST['username']);
                $password=addslashes($_POST['p1']);
                //$sql="INSERT INTO users VALUES (0,'$username','$password','$name','$address','$mobile')";
                $sql="INSERT INTO users(userid, username, password, name, address, mobile) VALUES (0,'$username','$password','$name','$address','$mobile')";
                $result=mysqli_query($db_conn,$sql);
                mysqli_close($db_conn);
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="h1.css">
    <SCRIPT>

function Validateform(){
	form=document.registration;
	name=form.t1.value;
	if(name=="")
	{	
		alert("Name field cannot be null");
		return false;
	}
	
	mobile=form.t2.value;
	
	if(mobile.length!=10)
	{
		alert("Please Enter a valid mobile number");
		return false;
	}
	
	
	pass=form.p1.value;
	n=pass.length;
	console.log(n);
	if (pass=="" || n<6 ) 
	{
		alert("Enter a Valid Password of length atleast 6 ");
		return false;
	}
	
	return true;	
}
</SCRIPT>

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
    <?php
        
        if (isset($_SESSION["userid"]) && $_SESSION["userid"]!=0 ){
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
  <table align="center" cellpadding="20%">
	<form name="registration" onsubmit="return Validateform()" method="post">
	<tr>
		<td>Enter Name :</td>
		<td><input type="text" name="t1"></td>
	</tr>
	<tr>
		<td>Enter Mobile :</td>
		<td><input type="text" name="t2" maxlength="10"></td>
	</tr>
	<tr>
		<td>Enter Address :</td>
		<td>
			<textarea name="tal" rows="10" cols="60">
			</textarea>
		</td>
	</tr>
	<tr>
		<td>Sex :</td>
		<td>
			<input type="radio" name="r1" id="r11" value="male" checked="checked">male<br>
			<input type="radio" name="r1" id="r12" value="female" >female<br>
		</td>
	</tr>
    <tr>
		<td>Enter Username:</td>
		<td><input type="text" name="username"></td>
	</tr>
	    
	<tr>
		<td>Enter Password:</td>
		<td><input type="password" name="p1"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="reset" value="reset">
		      	<input type="submit" value="submit" >
		</td>
	</tr>
	</form>
</table>
    </div>
    <div class="footer">
        <hr>
        <p >All rights reserved The Gamer.Pvt.Ltd</p>       
    </div>
  
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>    


</body>
</html>