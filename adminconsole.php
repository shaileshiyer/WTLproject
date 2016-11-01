<?php 
session_start();                
include("config.php");

if (!isset($_SESSION["type"])){

        echo "<h1>This is an admin only page please login as admin</h1>";
        exit();
}
if ($_SESSION['type']!='1'){
    echo "<h1>Unauthorized access.Please login as admin or contact admin to view this page</h1>";
    exit();
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$error="";
                    
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["prodimg"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["prodimg"]["tmp_name"]);
    if($check !== false) {
        $error = $error." File is an image - " . $check["mime"] . ".";
        echo $error;
        $uploadOk = 1;
    } else {
        $error = $error." File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $error = $error." Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["prodimg"]["size"] > 500000) {
    $error = $error." Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error = $error." Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $error = $error." Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["prodimg"]["tmp_name"], $target_file)) {
        $error="";
        $error = $error." The file ". basename( $_FILES["prodimg"]["name"]). " has been uploaded.";
            
        $name=addslashes($_POST['t1']);
        $imgname=$_FILES["prodimg"]["name"];
        $description=addslashes($_POST['tal']);
        $platform=addslashes($_POST['r1']);
        $cost=$_POST['cost'];
        $sql="INSERT INTO products(productname, productimage, type, description, cost) VALUES ('$name','$imgname','$platform','$description','$cost')";
        $result=mysqli_query($db_conn,$sql);
        if($result){
            $error = $error.' Successfully entered record';
        }
            mysqli_close($db_conn);
        }
     else {
        $error = $error." Sorry, there was an error uploading your file.";
        echo $error;
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
        
        if (isset($_SESSION["userid"]) && $_SESSION["userid"]!=0 ){
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
  <table align="center" cellpadding="20%">
	<form name="productform" method="post" enctype="multipart/form-data">
     <tr> 
        <?php  
        if(isset($error)){  
            echo '<td colspan="2"><p class="info">'.$error.'</p></td>';
        }
          ?>
    </tr>     
    <tr>
        <td><h3>Enter a new video game product</h3></td>    
    </tr>    
	<tr>
		<td>Enter Name :</td>
		<td><input type="text" name="t1"></td>
	</tr>

    <tr>
        <td>Upload file :</td>
        <td><input type="file" name="prodimg"></td>
    </tr>
	<tr>
		<td>Enter Description :</td>
		<td>
			<textarea name="tal" rows="10" cols="60">
			</textarea>
		</td>
	</tr>
	<tr>
		<td>Product platform :</td>
		<td>
			<input type="radio" name="r1" id="r11" value="1" checked="checked">PS 4<br>
			<input type="radio" name="r1" id="r12" value="2" >PS 3<br>
            <input type="radio" name="r1" id="r13" value="3" >PS vita <br>
            <input type="radio" name="r1" id="r14" value="4" >Wii U<br>
			<input type="radio" name="r1" id="r15" value="5" >Xbox one<br>
			
			
		</td>
	</tr>
    <tr>
		<td>Enter Product cost:</td>
		<td><input type="number" name="cost"></td>
	</tr>
    <tr>
        <td colspan="2"></td>
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
    <div class="jumbotron " style="background: url('img/a2.jpg') center no-repeat ; background-size:cover; padding-top:20%; padding-bottom:20%;"><p></p></div>
    <div class="footer">
        <hr>
        <p >All rights reserved The Gamer.Pvt.Ltd</p>       
    </div>
  
       
    <script>
    $(document).ready(function(){
	   $(window).bind('scroll', function() {
			 if ($(window).scrollTop() > 10) {
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