<?php
$servername="localhost";
$username="phpmyadmin";
$password="Z42aBWEdMEQL";
$dbname="mydb";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("Connection has failed !" . $conn->connect_error);

}
//echo "Successfully connected !";
?>
