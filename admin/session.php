<?php
session_start();
$user_check = $_SESSION['login_user'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
    echo "Session nicht vorhanden";
} else echo "Session vorhanden: ".$_SESSION['login_user'];
?>