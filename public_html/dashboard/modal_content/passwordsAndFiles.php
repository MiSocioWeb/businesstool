<?php 
	session_start();
	include "../db.php";
	$idUser=$_SESSION['idUSER'];
	$company_id=$_REQUEST['company_id'];
	if($idUser){

		echo '
		<button class="btn btn-success" onclick="crearPass(1);"> Create a password </button> <button class="btn btn-danger" onclick="crearPass(2);"> Upload a File </button> <br>

		<div id="newPass" style="display:none;">
			<div class="row">
				<div class="col-md-6" > <b>Name</b> <input class="form-control" id="newNamePass"/> </div>
				<div class="col-md-6" > <b>Description</b> <input class="form-control" id="newDescriptionPass"/> </div>
				<div class="col-md-12" > <b>Host</b> <input class="form-control" id="newHostPass"/> </div>
				<div class="col-md-6" > <b>User</b> <input class="form-control" id="newUserPass"/> </div>
				<div class="col-md-6" > <b>Password</b> <input class="form-control" id="newPassword"/> </div>
				<br/>
				<div align="center" style="margin-top:10px;" > <button class="btn btn-primary" onclick="guardaPass()" > Save Pass </button> </div>
			</div>
		</div>

		<div id="newFile" style="display:none;">
			<div class="row">
				<div class="col-md-6" > <b>Name</b> <input class="form-control" id="newNameFile"/> </div>
				<div class="col-md-6" > <b>Description</b> <input class="form-control" id="newDescriptionFile"/> </div>
				<hr/><center> <button class="btn btn-danger" style="margin-top:10px;" > Upload File </button> </center> <span id="link_file"></span>
				
				<div align="center" style="margin-top:10px;" > <button class="btn btn-primary" > Save File </button> </div>
			</div>
		</div>

		<hr/>
<div class="table-responsive">
  <table class="table">
 

		<table class="table table-bordered table-hover table-striped display dataTable" id="example" aria-describedby="example_info">
						<thead>
							<tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 235px;">Name </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 304px;">Description</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 344px;">Key or File</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 197px;">Share</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 149px;">type</th></tr>
						</thead>
						
						<tfoot>
							<tr><th rowspan="1" colspan="1">Name </th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Key or file</th><th rowspan="1" colspan="1"> Share </th><th rowspan="1" colspan="1">Type</th></tr>
						</tfoot>
					<tbody role="alert" aria-live="polite" aria-relevant="all" id="putElements"></tbody></table></div>'		;









		/*$query=mysql_query("SELECT * FROM company_clients_info WHERE id=$company_id") or die(mysql_error());
		$fetch=mysql_fetch_array($query);
		if($fetch['id']){
			echo '
<section id="footer_load" style="display: none;">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Update Company</button>
</section>

<label>Name of Company </label><br>
<input type="text" name="" class="form-control" value="'.$fetch['nombre'].'">

<label>RUC of Company </label><br>
<input type="text" name="" class="form-control" value="'.$fetch['ruc'].'">

<label>Website of Company </label><br>
<input type="text" name="" class="form-control" value="'.$fetch['pagina'].'">

<label>Legal representative of Company </label><br>
<input type="text" name="" class="form-control" value="'.$fetch['representante'].'">

<label>Adress of Company </label><br>
<input type="text" name="" class="form-control" value="'.$fetch['direccion'].'">

<label>Date of contract </label><br>
<input type="text" name="" class="form-control" value="'.$fetch['fecha_contrato'].'">

<label>Contract File</label><br>
<input type="text" name="" class="form-control" value="'.$fetch['url_contrato'].'">

<label>Description of Company </label><br>
<textarea class="form-control" style="" >'.$fetch['descripcion'].'</textarea>

';			
		}*/

		
	}
?>
<script type="text/javascript">
	
	function crearPass(id){
		if(id==1){
			$("#newFile").css("display" , "none");
			$("#newPass").fadeIn();
		}else{
			$("#newPass").css("display" , "none");
			$("#newFile").fadeIn();
		}
	}

	function guardaPass(){
		/*<div class="col-md-6" > <b>Name</b> <input class="form-control" id="newNamePass"/> </div>
				<div class="col-md-6" > <b>Description</b> <input class="form-control" id="newDescriptionPass"/> </div>
				<div class="col-md-12" > <b>Host</b> <input class="form-control" id="newNamePass"/> </div>
				<div class="col-md-6" > <b>User</b> <input class="form-control" id="newUserPass"/> </div>
				<div class="col-md-6" > <b>Password</b> <input class="form-control" id="newPassword"/> </div>*/

				newNamePass=$("#newNamePass").val();
				newDescriptionPass=$("#newDescriptionPass").val();
				newHostPass=$("#newHostPass").val();
				newUserPass=$("#newUserPass").val();
				newPassword=$("#newPassword").val();

				if(!newNamePass){$("#newNamePass").effect("highlight"); return;}
				if(!newDescriptionPass){$("#newDescriptionPass").effect("highlight"); return;}
				if(!newHostPass){$("#newHostPass").effect("highlight"); return;}
				if(!newUserPass){$("#newUserPass").effect("highlight"); return;}
				if(!newPassword){$("#newPassword").effect("highlight"); return;}

				$.post("ajax/createPass.php",{ 
					newNamePass: newNamePass,	
					newDescriptionPass: newDescriptionPass,
					newHostPass: newHostPass,
					newUserPass: newUserPass,
					newPassword: newPassword,
					currentIDPASS: currentIDPASS
				}).done(function(data){
					currentIDPASS='';
					console.log(data);
					openModal('passwordsAndFiles');
				});


	}
	loadElements();
	function loadElements(){
		$.post("ajax/readPassFiles.php").done(function(data){
			$("#putElements").html(data);
		});
	}
</script>