<?php 
	session_start();
	include "../db.php";
	$idUser=$_SESSION['idUSER'];
	$company_id=$_REQUEST['company_id'];
	$_SESSION['currentCompany']=$company_id;
	if($idUser){
		$query=mysql_query("SELECT * FROM company_clients_info WHERE id=$company_id") or die(mysql_error());
		$fetch=mysql_fetch_array($query);
		if($fetch['id']){
			$_SESSION['newCompanyImage']=$fetch['logo'];
			$_SESSION['newCompanyContract']=$fetch['url_contrato'];
			echo '
<section id="footer_load" style="display: none;">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary" onclick="actualizaCompany();">Update Company</button>
</section>
<div class="row">
  <div class="col-md-4">
  	<label>Name of Company </label><br>
	<input type="text" name="" class="form-control" value="'.$fetch['nombre'].'" id="up_nameCompany">
  </div>

  <div class="col-md-4">
  	<label>RUC of Company </label><br>
	<input type="text" name="" class="form-control" value="'.$fetch['ruc'].'" id="up_rucCompany">
  </div>

  <div class="col-md-4">
  	<label>Website of Company </label><br>
	<input type="text" name="" class="form-control" value="'.$fetch['pagina'].'" id="up_websiteCompany">
  </div>

</div>

<div class="row">

  <div class="col-md-4">
  	<label>Legal representative </label><br>
	<input type="text" name="" class="form-control" value="'.$fetch['representante'].'" id="up_legalCompany">
  </div>

  <div class="col-md-4">
  	<label>Adress of Company </label><br>
<input type="text" name="" class="form-control" value="'.$fetch['direccion'].'" id="up_adressCompany">
  </div>

  <div class="col-md-4">
	<label>Date of contract </label><br>
	<input type="text" name="" class="form-control" value="'.$fetch['fecha_contrato'].'" id="up_dateCompany">
  </div>

</div>




<div class="row">

  <div class="col-md-6">
  	<label>Contract File</label><br>
  	<iframe src="up_iframe.php?type=pdf&id=0&default='.$fetch['url_contrato'].'" style="boder:0px;width:200px;height:100px;" frameborder=0 ></iframe>
  </div>

  <div class="col-md-6">
  	<label>Logo File</label><br>
	<iframe src="up_iframe.php?type=img&id=0&default='.$fetch['logo'].'" style="boder:0px;width:200px;height:100px;" frameborder=0 ></iframe>
  </div>

</div>

<label>Description of Company </label><br>
<textarea class="form-control" style="" id="up_comment">'.$fetch['descripcion'].'</textarea>

';			
		}

		
	}
?>

<script>
	function actualizaCompany(){
		var up_comment=$("#up_comment").val();
		var up_dateCompany=$("#up_dateCompany").val();
		var up_adressCompany=$("#up_adressCompany").val();
		var up_legalCompany=$("#up_legalCompany").val();
		var up_websiteCompany=$("#up_websiteCompany").val();
		var up_rucCompany=$("#up_rucCompany").val();
		var up_nameCompany=$("#up_nameCompany").val();

		if(!up_nameCompany) {$("#up_nameCompany").effect("highlight"); return;}
		if(!up_rucCompany) {$("#up_rucCompany").effect("highlight"); return;}
		if(!up_websiteCompany) {$("#up_websiteCompany").effect("highlight"); return;}
		if(!up_legalCompany) {$("#up_legalCompany").effect("highlight"); return;}
		if(!up_adressCompany) {$("#up_adressCompany").effect("highlight"); return;}
		if(!up_dateCompany) {$("#up_dateCompany").effect("highlight"); return;}
		if(!up_comment) {$("#up_comment").effect("highlight"); return;}

		$.post("ajax/validaImages.php", { typeValid : "newCompany"}).done(function(data){

				if(data=='true'){
					$("#cierra").click();
					$.post("ajax/updateNewCompany.php" , {  
						up_nameCompany : up_nameCompany,
						up_rucCompany : up_rucCompany,
						up_websiteCompany : up_websiteCompany,
						up_legalCompany : up_legalCompany,
						up_adressCompany : up_adressCompany,
						up_dateCompany : up_dateCompany,						
						up_comment : up_comment
					  }).done(function(data){
					  	
					  	window.top.location="";
					  });
				}else{
					alert("Por Favor suba los archivos obligatorios");
				}

			});
			
		

	}	
</script>