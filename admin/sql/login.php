<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $myusername = sqlite_escape_string($_POST['username']);
    $mypassword = sqlite_escape_string($_POST['password']);

    sqlite_open("../extras/USB.sqlite");
    $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = sqlite_query($db,$sql);
    $row = sqlite_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = sqlite_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: index.php");
    }else {
        $error = "Nutzname oder Passwort falsch";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="../../css/global.css" type="text/css" rel="stylesheet"/>
    <link href="../../css/header.css" type="text/css" rel="stylesheet"/>
    <link href="../../css/footer.css" type="text/css" rel="stylesheet"/>
    <link href="../../css/card.css" type="text/css" rel="stylesheet"/>
    <link href="../../css/elements.css" type="text/css" rel="stylesheet"/>
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
<script src='../../js/jquery.min.js'></script>
<script  src="../js/index.js"></script>
<script type="application/javascript" src="../../js/copyright.js"></script>
<script type="application/javascript" src="../js/card.js"></script>
</body>
</html>