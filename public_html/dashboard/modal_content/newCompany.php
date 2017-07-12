<?php 

			echo '
<section id="footer_load" style="display: none;">
<button type="button" class="btn btn-default" data-dismiss="modal" id="cierra">Close</button>
<button type="button" class="btn btn-primary" onclick="createNewCompany();">Create Company</button>
</section>

<div class="row">
	<div class="col-md-4" >
		<label>Name of Company </label><br>
		<input type="text" name="" class="form-control" value="" id="new_nameCompany">
	</div>
	
	<div class="col-md-4" >
		<label>RUC of Company </label><br>
		<input type="text" name="" class="form-control" value="" id="new_rucCompany">
	</div>
	<div class="col-md-4" >
		<label>Website of Company </label><br>
		<input type="text" name="" class="form-control" value="" id="new_websiteCompany">
	</div>
</div>


<div class="row">
	<div class="col-md-4" >
		<label>Legal representative </label><br>
		<input type="text" name="" class="form-control" value="" id="new_legalCompany">

	</div>

	<div class="col-md-4" >
		<label>Adress of Company </label><br>
		<input type="text" name="" class="form-control" value="" id="new_adressCompany">
	</div>

	<div class="col-md-4" >
		<label>Date of contract </label><br>
		<input type="text" name="" class="form-control" value="" id="new_dateCompany">
	</div>
	

</div>


<div class="row">
	

	<div class="col-md-6" >
		<label>Contract File</label><br>
		<iframe src="up_iframe.php?type=pdf&id=0" style="boder:0px;width:200px;height:100px;" frameborder=0 ></iframe>
		
	</div>

	<div class="col-md-6" >
		<label>Logo File</label><br>
		<iframe src="up_iframe.php?type=img&id=0" style="boder:0px;width:200px;height:100px;" frameborder=0 ></iframe>
	</div>
</div>

<div class="row" style="display:none;">
	<div class="col-md-12" >
		<label>Website </label><br>
		<input class="form-control" id="theWebsite" placeholder="example: www.misocioweb.com"/>
		
	</div>
</div>
<br>
<label>Description of Company </label><br>
<textarea class="form-control" style="" id="theComment" ></textarea>

';			
		
?>

<script type="text/javascript">
	
	function createNewCompany(){
			var new_nameCompany=$("#new_nameCompany").val();
			var new_rucCompany=$("#new_rucCompany").val();
			var new_websiteCompany=$("#new_websiteCompany").val();
			var new_legalCompany=$("#new_legalCompany").val();
			var new_adressCompany=$("#new_adressCompany").val();
			var new_dateCompany=$("#new_dateCompany").val();
			var theComment=$("#theComment").val();
			//var theWebsite=$("#theWebsite").val();

			if(!new_nameCompany){ $("#new_nameCompany").effect("highlight");	return; 	}
			if(!new_rucCompany){ $("#new_rucCompany").effect("highlight");	return; 	}
			if(!new_websiteCompany){ $("#new_websiteCompany").effect("highlight");	return; 	}
			if(!new_legalCompany){ $("#new_legalCompany").effect("highlight");	return; 	}
			if(!new_adressCompany){ $("#new_adressCompany").effect("highlight");	return; 	}
			if(!new_dateCompany){ $("#new_dateCompany").effect("highlight");	return; 	}
			if(!theComment){ $("#theComment").effect("highlight");	return; 	}
			//if(!theWebsite){ $("#theWebsite").effect("highlight");	return; 	}

			$.post("ajax/validaImages.php", { typeValid : "newCompany"}).done(function(data){

				if(data=='true'){
					$("#cierra").click();
					$.post("ajax/saveNewCompany.php" , {  
						new_nameCompany : new_nameCompany,
						new_rucCompany : new_rucCompany,
						new_websiteCompany : new_websiteCompany,
						new_legalCompany : new_legalCompany,
						new_adressCompany : new_adressCompany,
						new_dateCompany : new_dateCompany,						
						theComment : theComment
					  }).done(function(data){
					  	window.top.location='';
					  });
				}else{
					alert("Por Favor suba los archivos obligatorios");
				}

			});
			
	}
</script>





