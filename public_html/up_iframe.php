<?php 	session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href='assets/css/bootstrap.min.css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src='ajaxupload.js'></script>
</head>
<body>
<?php 
	error_reporting(0);
	$type=$_REQUEST['type'];
	$default=$_REQUEST['default'];
	$id=$_REQUEST['0'];
	if($type=="pdf"){
		$preloadUrl='http://businesstool.misocioweb.com/logo500.png';
		$preText='No hay archivo Adjunto';
		if($default){$preloadUrl="http://businesstool.misocioweb.com/dashboard/pdflogo.png";$preText='Archivo Precargado';}
		echo '
<table width="100%" height="100%">
	<tr>
		<td width="30%">
			<img src="'.$preloadUrl.'"  id="theNewLogo" width="80"  STYLE="max-width:80%;" />
		</td>
		<td valign="center" align="center">
			<button class="btn btn-success" id="upContract"> Subir Contrato</button>
			<input id="theType" value="'.$type.'"  style="display:none" />
			<br><small id="new_urlContract" style="font-size:8px; font-weight:bold;">'.$preText.'</small>
		</td>
	</tr>
</td>
		<script>
$(function(){
        var btnUpload=$("#upContract");
        var typeFile=$("#theType").val();
        new AjaxUpload(btnUpload, {
            action: "up.php",
            name: "uploadfile",
            onSubmit: function(file, ext){
                 if (! (ext && /^(pdf)$/.test(ext))){
                    alert("Solo archivos pdf.");
                    return false;
                }
            },
            onComplete: function(file, response){
                  $("#new_urlContract").html(response);
                  $("#theNewLogo").attr("src" , "http://businesstool.misocioweb.com/dashboard/pdflogo.png");
                 $("#postMethod").attr("src" , "http://businesstool.misocioweb.com/dashboard/ajax/sessionImages.php?type="+typeFile +"&file=http://businesstool.misocioweb.com/dashboard/up/"+response);
           
            }
        });
});
		</script>
		';



	}


if($type=="img"){
		$preloadUrl='http://businesstool.misocioweb.com/logo500.png';
		$preText='No hay imagen Adjunta';
		if($default){$preloadUrl=$default;$preText='Archivo Precargado';}

		echo '
<table width="100%" height="100%">
	<tr>
		<td width="30%">
			<img src="'.$preloadUrl.'"  id="theNewLogo" width="80" STYLE="max-width:80%;" />
		</td>
		<td valign="center" align="center">
			<button class="btn btn-success" id="upContract"> Subir Imagen</button>
			<br><small style="font-size:8px; font-weight:bold;" id="new_urlContract">'.$preText.' </small>
			<input id="theType" value="'.$type.'" style="display:none" />
		</td>
	</tr>
</td>
		<script>
$(function(){
        var btnUpload=$("#upContract");
        var typeFile=$("#theType").val();
        new AjaxUpload(btnUpload, {
            action: "up.php",
            name: "uploadfile",
            onSubmit: function(file, ext){
                 if (! (ext && /^(jpg|png|gif|bmp)$/.test(ext))){
                    alert("Solo imagenes JPG,GIF,PNG,BMP.");
                    return false;
                }
            },
            onComplete: function(file, response){
                  $("#new_urlContract").html(response);
                  $("#theNewLogo").attr("src" , "http://businesstool.misocioweb.com/dashboard/up/"+response );
                  $("#postMethod").attr("src" , "http://businesstool.misocioweb.com/dashboard/ajax/sessionImages.php?type="+typeFile +"&file=http://businesstool.misocioweb.com/dashboard/up/"+response);
                  
            }
        });
});
		</script>
		';


		
	}

?>
<iframe  style="display:none;" id="postMethod" ></iframe> 
</body>
</html>