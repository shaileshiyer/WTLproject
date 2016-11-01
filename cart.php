<?php 
session_start();
include('config.php');

if (!isset($_SESSION["login"])){
    header('location: login.php?login=0');
}
else{
    $userid=$_SESSION['userid'];
    if (isset($_GET['checked']))
    {
        if ($_GET['checked']==1) 
        {        
            $id = $_GET['id'];
            $name = $_GET['name'];
            $cost = $_GET['cost'];
            echo "Entered insertion";
            $sql="INSERT INTO cart VALUES('$userid','$id','$name','$cost',0)";
            if (mysqli_query($db_conn, $sql)) {

                header("location :products.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($db_conn);
            }

        }
        else if($_GET['checked']==0){
            $id = $_GET['id'];
            $userid = $_SESSION['userid'];
            echo "Entered deletion";
            $sql="DELETE FROM cart WHERE cartid='$id';";
            $result=mysqli_query($db_conn,$sql);
        }
    }
    mysqli_close($db_conn);
    header('location:products.php');
}
?>