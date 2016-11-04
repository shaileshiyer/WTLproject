<?php 
                
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
                $username=addslashes($_POST['username']);
                
                $sql="SELECT * FROM users WHERE username='$username';";

                $result=mysqli_query($db_conn,$sql);
                if($result){
                    $count=mysqli_num_rows($result);
                    //echo $count;
                    if($count>0){
                        $error= "Username is already taken please take another name";
                        mysqli_close($db_conn);
                        
                    }   
                else{
                    $name=addslashes($_POST['t1']);
                    $mobile=addslashes($_POST['t2']);
                    $address=addslashes($_POST['tal']);
                    $password=$_POST['p1'];
                    $password=md5($password);
                    $email=addslashes($_POST['email']);
                    $gender=addslashes($_POST['r1']);
                    //$sql="INSERT INTO users VALUES (0,'$username','$password','$name','$address','$mobile')";
                    $sql="INSERT INTO users(userid, username, password, name, address, mobile,type,gender,emailid) VALUES (0,'$username','$password','$name','$address','$mobile',0,'$gender','$email')";
                    $result=mysqli_query($db_conn,$sql);
                    if($result){
                        $error= 'successfully entered record';
                    }
                    mysqli_close($db_conn);
                    }
            }
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
		document.getElementById("error").innerHTML="Name field cannot be null";
		return false;
	}
	
	mobile=form.t2.value;
	
	if(mobile.length!=10)
	{
		document.getElementById("error").innerHTML="Please Enter a valid mobile number";
		return false;
	}
	
	
	pass=form.p1.value;
	n=pass.length;
    pass2=form.p2.value;
    console.log(!(pass===pass2));
    if(!(pass===pass2)){
        document.getElementById("error").innerHTML="The passwords do not match please re-enter the password";
        document.getElementById("error").focus();
		return false;
    }
	if (pass=="" || n<6 ) 
	{
		document.getElementById("error").innerHTML="Enter a Valid Password of length atleast 6 ";
		return false;
	}
	
	return true;	
}
</SCRIPT>
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
    <li><a href='login.php'>Login</a></li>
        
    
    
    <li style="float:right;text-align:center;padding-right:20px;"><b>The Gamer</b>
    <img src="img/icon.png" height="48px" width="48px">
    </li>
</ul>
</div>
      

<div class="main_content">
  <table align="center" cellpadding="20%">
	<form name="registration" onsubmit="return Validateform()" method="post">
      <tr> 
        <?php  
        if(isset($error)){  
            echo '<td colspan="2"><p class="info">'.$error.'</p></td>';
        }
          ?>
    </tr> 
    <tr> 
        <td colspan="2"><p class="danger" id="error"></p></td>
    </tr>    
	<tr>
		<td>Enter Name :</td>
		<td><input type="text" name="t1"></td>
	</tr>
	<tr>
		<td>Enter Mobile :</td>
		<td><input type="text" name="t2" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
	</tr>
    <tr>
        <td>Enter EmailID :</td>
        <td><input type="email" name="email"></td>
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
        <td colspan="2"></td>
    </tr>
	<tr>
		<td>Enter Password:</td>
		<td><input type="password" name="p1"></td>
	</tr>
    <tr>
		<td>Confirm Password:</td>
		<td><input type="password" name="p2"></td>
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