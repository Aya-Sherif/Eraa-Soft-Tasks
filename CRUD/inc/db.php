<?php 

$servername="localhost";
$username="root";
$password="";
$dpname="crud";

$conn=mysqli_connect($servername,$username,$password,$dpname);
if(!$conn)
{
    die("connection Faild : " . mysqli_connect_error());
}