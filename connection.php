<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizza";

$con = mysqli_connect($servername, $username, $password,$dbname);

if($con)
{
   // echo "Connection succesful";
}
{
   // echo "there was some problem";
}
 ?>