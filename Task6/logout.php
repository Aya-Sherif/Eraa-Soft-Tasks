<?php
session_start();
include("core/functions.php");

session_destroy();
Redirect("login.php");
die();  
?>