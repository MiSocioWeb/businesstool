<!--
    Mi Socio Web - Company
    Task 0.001 Create a document - Josue Navarrete
-->
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php
    $pages=$_REQUEST['pages'];
    $idTemplate=$_REQUEST['idTemplate'];
    $elements=$_REQUEST['elements'];
    $elementsPX=abs($elements)."px";
    //echo "create this $pages > $idTemplate> $elements :)";
    $id=$idTemplate;
    include "db.php";
    $query=mysql_query("SELECT * FROM document_template WHERE id=$id") or die(mysql_error());
    $f=mysql_fetch_array($query);
    $idHeader=$f[default_header];
    $idFooter=$f[default_footer];
    $queryHeader=mysql_query("SELECT * FROM document_headers WHERE id=$idHeader") or die(mysql_error());
    $fHeader=mysql_fetch_array($queryHeader);
    $header=$fHeader[picture];
    $queryFooter=mysql_query("SELECT * FROM document_footers WHERE id=$idFooter") or die(mysql_error());
    $fFooter=mysql_fetch_array($queryFooter);
    $footer=$fFooter[picture];

    ?>
</head>
<body>

<div style="height:auto;width:75%;background-color:#EDECEB;position:absolute;left:25%;top:0px;" align="center">
        <button class="btn btn-success" onclick="createPdf();">Create Pdf</button>
    <script>
        function createPdf(){
            window.open("resultPdf.php?pages=<?php echo $pages; ?>&idTemplate=<?php echo $idTemplate; ?>&elements=<?php echo $elements; ?>");
        }
    </script>
    <?php
    session_start();
    $idBusiness=$_SESSION['idBusiness'];
    $query=mysql_query("SELECT * FROM company WHERE id=$idBusiness") or die(mysql_error());
    $f=mysql_fetch_array($query);
    $logo=$f[logo];
    for($i=0;$i<$pages; $i++ ){
        echo '

            <div style="background-color:white;height:842px;width:595px;box-shadow:2px 2px 2px gray; position:relative; " id="a4">
            <img src="'.$logo.'" id="draggable" style="position:absolute;left:'.$elementsPX.';z-index:9999;top:0px;">
        <img src="'.$header.'" id="header" style="position:absolute;left:0px;top:0px;"/> 
        <img src="'.$footer.'" id="footer" style="position:absolute;left:0px;bottom:0px;"/> 
        </div>   
            ';

    }
    ?>
</div>
</body>
</html>