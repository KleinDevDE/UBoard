<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_SESSION['login_user'] == "admin") {
        session_register($_SESSION['login_user']);
        header("location: index.php");
    }else {
        $error = "Nutzername oder Passwort falsch";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="../css/global.css" type="text/css" rel="stylesheet"/>
    <link href="../css/header.css" type="text/css" rel="stylesheet"/>
    <link href="../css/footer.css" type="text/css" rel="stylesheet"/>
    <link href="../css/card.css" type="text/css" rel="stylesheet"/>
    <link href="../css/elements.css" type="text/css" rel="stylesheet"/>
    <title>USB - Admin</title>
</head>
<body>
<header class="header-fixed">
    <div class="header-limiter">
        <h1><a href="../../index.php"><img src="../../img/icon.png" width="30px"/>Urspringer<span>SB</span> - <font color="red">Admin</font></a></h1>
        <nav>
            <a href="index.php" class="selected">Admin</a>
        </nav>
    </div>
</header>
<div id="wrapper">

    <form action = "" method = "post">
        <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
        <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
        <input type = "submit" value = " Submit "/><br />
    </form>

<div class="bo-wrap clr4">
    <div class="bo-footer">
        <div class="bo-footer-social">
            <!-- Social Media -->
        </div>
    </div>
</div>
<div class="bo-wrap clr3">
    <div class="bo-footer">
        <div class="bo-footer-smap">
            <!-- Impressum -->
        </div>
        <div class="bo-footer-power">
            <!-- Bla?  -->
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="bo-wrap clr4">
    <div class="bo-footer">
        <div class="bo-footer-copyright" id="copyright">
            <!-- Copyright JS -->
        </div>
    </div>
</div>

<!-- <script type="application/javascript" src="js/credits.js"></script>
<script type="application/javascript" src="js/date.js"></script> -->
<script src='../js/jquery.min.js'></script>
<script type="application/javascript" src="../js/copyright.js"></script>
</body>
</html>