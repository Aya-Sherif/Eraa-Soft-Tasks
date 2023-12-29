<?php
require_once "../core/request.php";
require_once "../core/Validation.php";
require_once "../core/sessions.php";
require_once "../core/functions.php";
require_once "../inc/db.php";
session_start();
if(CheckPostMethod())
{
$id = $_POST['id'];
$sql= "DELETE FROM users WHERE `User_ID` = $id";
$result=mysqli_query($conn, $sql);
if ($result)
{
    $successDelete="User Deleted Successfully 😥";
    setSession('successDelete', $successDelete);
    Redirect('../index.php');
}


}



























?>