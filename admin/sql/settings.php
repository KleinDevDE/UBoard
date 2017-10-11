<?php
include('session.php');
?>


<html>

<head>
    <!--Importiere Styles-->
    <link href="../../css/global.css" type="text/css" rel="stylesheet"/>
    <link href="../../css/header.css" type="text/css" rel="stylesheet"/>
    <link href="../../css/footer.css" type="text/css" rel="stylesheet"/>
    <link href="../../css/card.css" type="text/css" rel="stylesheet"/>
    <link href="../../css/elements.css" type="text/css" rel="stylesheet"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Aktivere UTF8 Unterstützung -->
    <meta http-equiv="content-type" content="text/html" charset="utf-8">

    <!-- Deaktivere Browser Cache -->
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
</head>

<body>
<header class="header-fixed">
    <div class="header-limiter">
        <h1><img src="../../img/icon.png" width="30px"/> <a href="https://randomDomain.de/">Urspringer<span>SB</span></a></h1>
        <nav>
            <a href="index.php">Dashboard</a>
            <a href="info.php">Informationen</a>
            <a href="settings.php" class="selected">Einstellungen</a>
        </nav>
    </div>
</header>
<div id="wrapper">
    <!-- JavaScript unterstützt? -->
    <noscript>
        <text id="noJavaScript">
            <center>Dieser Browser unterstützt kein Javascript!</center>
        </text>
    </noscript>

    <!--  -->

</div>
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
<script type="application/javascript" src="../../js/copyright.js">
    <script type="application/javascript" src="../js/card.js"></script>
</body>

</html>