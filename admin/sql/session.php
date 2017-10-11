<?php
session_start();
$db = sqlite_open("../extras/USB.sqlite");
$user_check = $_SESSION['login_user'];

$ses_sql = sqlite_query($db,"select username from users where username = '$user_check' ");

$row = sqlite_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];
sqlite_close($db);
if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}
?>