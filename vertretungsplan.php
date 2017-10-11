<html>

<head>
    <!--Importiere Styles-->
    <link href="css/global.css" type="text/css" rel="stylesheet"/>
    <link href="css/header.css" type="text/css" rel="stylesheet"/>
    <link href="css/footer.css" type="text/css" rel="stylesheet"/>
    <link href="css/elements.css" type="text/css" rel="stylesheet"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Aktivere UTF8 Unterstützung -->
    <meta http-equiv="content-type" content="text/html" charset="utf-8">

    <!-- <meta http-equiv="refresh" content="1" /> -->
</head>

<body>
<header class="header-fixed">
    <div class="header-limiter">
        <h1><img src="img/icon.png" width="30px"/> <a href="https://randomDomain.de/">Urspringer<span>SB</span></a></h1>
        <nav>
            <a href="index.php">Startseite</a>
            <a href="speiseplan.php">Speiseplan</a>
            <a href="vertretungsplan.php" class="selected">Vertretungsplan</a>
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

    <!-- Vertretungsplan -->
    <div class="vertretungsplan">
        <center><p><br>Vertretungsplan<br></p></center>
        <?php
        if (file_exists("files/Vertretungsplan.docx")) {
            include('./extras/docx_reader.php');

            $doc = new Docx_reader();
            $doc->setFile('./files/Vertretungsplan.docx');

            if(!$doc->get_errors()) {
                $html = $doc->to_html();
                $plain_text = $doc->to_plain_text();

                echo $html;
            } else {
                echo implode(', ',$doc->get_errors());
            }
            echo "\n";
        } else {
            echo "Der Vetretungsplan konnte derzeit nicht abgerufen werden";
        }
        ?>
    </div>


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
<script type="application/javascript" src="js/copyright.js"></script>
</body>

</html>