<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "wtlproj114a1037";

$db_conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Oops some thing went wrong").mysqli_error($db_conn);
?>