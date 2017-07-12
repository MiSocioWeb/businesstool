<?php 
  $id=$_REQUEST['id'];
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
<html>
  <head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#draggable" ).draggable({ containment: "#a4" });
  } );
  </script>
  </head>
  <body>
  
    <div style="height:100%;width:25%;background-color:white;position:fixed;left:0px;top:0px;overflow:auto;">
      <?php 
        $query=mysql_query("SELECT 
        dt.id AS id_templte, 
        dt.picture as template ,
         dh.picture AS header, 
         df.picture AS footer,
         dh.elements AS element_header,
         dh.element_x AS header_x ,
         dh.element_y AS header_y 
        FROM document_template AS dt
        LEFT JOIN document_headers dh
         ON dt.default_header= dh.id
         LEFT JOIN document_footers df
         ON dt.default_footer= df.id
        ") or die(mysql_error());
        while($row=mysql_fetch_array($query)){
                 $elementHeader=$row[element_header];
                 if($elementHeader=="logo"){
                 $x=$row['header_x'];
                 $y=$row['header_y'];
                 if($x=='center') $x='0px';
                 if($y=='center') $y='0px';
                    echo "<div style='background-color:white;' >
             <img id='logo' src='$row[template]' width='100%' style='left:$x;top:$y;'>   </div>
              <script>
              $('#logo').css({'top': 10, 'left' : 20})
              </script>
             ";       
                 }
          
        }
      ?>
    </div> 
     <div style="height:auto;width:75%;background-color:#EDECEB;position:absolute;left:25%;top:0px;" align="center">
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
     
  </body>
</html>