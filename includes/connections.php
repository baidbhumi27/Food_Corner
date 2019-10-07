<?php

$server="localhost";
$username="root";
$password="root";
$db="foodcorner";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}




?>
