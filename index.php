<?php
//include "extras/Check.php";
function docx2text($filename) {
    return readZippedXML($filename, "word/document.xml");
}

function readZippedXML($archiveFile, $dataFile) {
// Create new ZIP archive
    $zip = new ZipArchive;

// Open received archive file
    if (true === $zip->open($archiveFile)) {
        // If done, search for the data file in the archive
        if (($index = $zip->locateName($dataFile)) !== false) {
            // If found, read it to the string
            $data = $zip->getFromIndex($index);
            // Close archive file
            $zip->close();
            // Load XML from a string
            // Skip errors and warnings
            $xml = new DOMDocument();
            $xml->loadXML($data, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
            // Return data without XML formatting tags
            return strip_tags($xml->saveXML());
        }
        $zip->close();
    }

// In case of failure return empty string
    return "";
}
?>

<html>
<head>
    <!--Importiere Styles-->
    <link href="css/global.css" type="text/css" rel="stylesheet"/>
    <link href="css/header.css" type="text/css" rel="stylesheet"/>
    <link href="css/footer.css" type="text/css" rel="stylesheet"/>
    <link href="css/card.css" type="text/css" rel="stylesheet"/>
    <link href="css/elements.css" type="text/css" rel="stylesheet"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Aktivere UTF8 Unterstützung -->
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
</head>

<body>
    <header class="header-fixed">
        <div class="header-limiter">
         <h1><a href="./"><img src="img/icon.png" width="30px"/>Urspringer<span>SB</span></a></h1>
         <nav>
                <a href="index.php" class="selected">Startseite</a>
                <a href="speiseplan.php">Speiseplan</a>
                <a href="vertretungsplan.php">Vertretungsplan</a>
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
        <!-- Wetter -->
        <div class="wetter">
            <center><b><br>Wetter</b></center><br>
            <iframe src="http://www.nordseewolf.de/WM-TOOLS/wetter/89601-2.php" width="315" height="133" marginheight="0" marginwidth="10" name="ifc" scrolling="no" frameborder="0">
            </iframe>
            <!--
            <div id="cont_b0985b721d1425f092014a263dbb6e3c"><script type="text/javascript" async src="https://www.daswetter.com/wid_loader/b0985b721d1425f092014a263dbb6e3c"></script></div>
            -->
        </div>
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
    <script type="application/javascript" src="js/copyright.js"></script>
    <script type="application/javascript" src="js/card.js"></script>
</body>

</html>