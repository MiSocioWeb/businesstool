<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php
$pages=$_REQUEST['pages'];
    $idTemplate=$_REQUEST['idTemplate'];
    $elements=$_REQUEST['elements'];
    echo "create this $pages > $idTemplate> $elements :)";
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
<div style="height:auto;width:75%;background-color:#EDECEB;position:absolute;left:25%;top:0px;" align="center">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Escriba el número de hojas" id="numeroHojas">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="crearDocumento()">Crear</button>
            </span>
    </div><!-- /input-group -->
    <script>
        function crearDocumento(){
            hojas=$("#numeroHojas").val();
            idTemplate="<?php echo $_REQUEST[id]; ?>";
            leftLogo=$("#a4").offset().left - $("#draggable").offset().left;
            window.top.location="newDocument.php?pages="+hojas+"&idTemplate="+idTemplate+"&elements="+leftLogo;
        }
    </script>
    <div style="background-color:white;height:842px;width:595px;box-shadow:2px 2px 2px gray; position:relative; " id="a4">
        <img src="<?php echo $header ?>" id="header" style="position:absolute;left:0px;top:0px;"/> <br>
        <img src="<?php echo $footer; ?>" id="footer" style="position:absolute;left:0px;bottom:0px;"/> <br>

        <div id="" class="draggable ui-widget-content">
            <?php
            session_start();
            $idBusiness=$_SESSION['idBusiness'];
            $query=mysql_query("SELECT * FROM company WHERE id=$idBusiness") or die(mysql_error());
            $f=mysql_fetch_array($query);
            $logo=$f[logo];
            ?>
            <img src="<?php echo $logo; ?>" id="draggable">
        </div>



    </div>
    <br><br><br>
</div>
