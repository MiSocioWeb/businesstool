<?php 
  session_start(); include "db.php"; 
  $idUser=$_SESSION['idUSER'];
  $userID=mysql_query("SELECT * FROM users WHERE id=$idUser") or die(mysql_error());
  $fetch=mysql_fetch_array($userID);
  $name=$fetch['name'];
  $adress=$fetch['adress'];
  $email=$fetch['email'];
  $telefono=$fetch['telefono'];
  $type=$fetch['type'];
  $id_relation=$fetch['relation_admin'];
  $foto=$fetch['foto'];
  if(!$foto) $foto="nopic.png";

  $iAm='';
  if($type=='1' && $id_relation==0){
    $iAm='<center> <h3> Master Administrator of business account : <br>' . $_SESSION['businessName'] . "</h3></center>";
  }
  if($type=='1' && $id_relation!=0){
    $iAm='<center> <h3> Administrator of business : <br>' . $_SESSION['businessName'] . "</h3></center>";
  }
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

  <title>BUSINESS TOOL</title>

  <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
  <!-- Bootstrap CSS -->

  <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
<link rel='stylesheet' href='assets/css/material.css'>
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='stylesheet' href='assets/css/animated-masonry-gallery.css'>
<link rel='stylesheet' href='assets/css/rotated-gallery.css'>
<link rel='stylesheet' href='assets/css/sweet-alerts/sweetalert.css'>
<link rel='stylesheet' href='assets/css/jtree.css'>
   <link rel="icon" type="image/png" href="logo500.png" />
  <script src='assets/js/jquery.js'></script>
  
<script src='assets/js/app.js'></script>
  <script>
    jQuery(window).load(function () {
      $('.piluku-preloader').addClass('hidden');
    });
  </script>
</head>
<body>
  <div class="piluku-preloader text-center">
  <!-- <div class="progress">
      <div class="indeterminate"></div>
  </div> -->
  <div class="loader">Loading...</div>
</div>
<div class="wrapper ">

  
<div class="left-bar ">
	<div class="admin-logo">
		<div class="logo-holder pull-left">
			<b style="color:white;"> BT - MSW </b>
		</div>
		<!-- logo-holder -->			
		<a href="#" class="menu-bar  pull-right"><i class="ti-menu"></i></a>
	</div>
	<!-- admin-logo -->
	<?php 
		if ($_SESSION['userType']==1 || $_SESSION['userType']==3  ){
			/*Admin Agent and Admin */
			include "menu/startup.php"; 
		}
	

	?>
</div>
<!-- left-bar -->

<div class="content" id="content">
	
	<div class="overlay"></div>			
	
	<div class="top-bar">
	
		<?php include "header.php"; ?>


</div>
<!-- /top-bar -->
	
	<div class="main-content">
   
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <?php echo $iAm; ?>
        <hr/>
        <b>Names</b>
        <input class="form-control" id="nameUser" placeholder="You Name" Value="<?php echo $name; ?>" />
        <br>
        <b>CI</b>
        <input class="form-control" id="adressUser" placeholder="You CI" Value="<?php echo $adress; ?>" />
        <br>
        <b>Email</b>
        <input class="form-control" id="emailUser" placeholder="You email" value="<?php echo $email; ?>" />
        <br>
        <b>Phone</b>
        <input class="form-control" id="phoneUser" placeholder="You Phone" value="<?php echo $telefono; ?>" />
        <br/><center>
          <img src="<?php echo $foto; ?>" id="imgPerfil" width="200" /> <br/><button class="btn btn-success" id="btnUp" >Upload Image</button>
          </center>
        <br/>
        <hr> 
        <button class="btn btn-danger" onclick="updateProfile();" >Update Info</button>
        <script type="text/javascript">
          function updateProfile(){
            nameUser=$("#nameUser").val();
            adressUser=$("#adressUser").val();
            emailUser=$("#emailUser").val();
            phoneUser=$("#phoneUser").val();
            imgPerfil=$("#imgPerfil").attr("src");

            $.post("ajax/updateProfile.php",{
              nameUser: nameUser,
              adressUser : adressUser,
              emailUser : emailUser,
              phoneUser : phoneUser,
              imgPerfil : imgPerfil
            }).done(function(data){
              window.top.location="";

            });

          }

        </script>
      </div>
  </div>

     </div> 
			<!-- content_holder -->
		</div>
	</div>
	<!-- /Right-bar -->
</div>
<!-- wrapper -->

<script src='assets/js/jquery-ui-1.10.3.custom.min.js'></script>
<script src='assets/js/bootstrap.min.js'></script>
<script src='assets/js/jquery.nicescroll.min.js'></script>
<script src='assets/js/wow.min.js'></script>
<script src='assets/js/jquery.loadmask.min.js'></script>
<script src='assets/js/jquery.accordion.js'></script>
<script src='assets/js/materialize.js'></script>
<script src='assets/js/chartist.min.js'></script>
<script src='assets/js/CustomChart.js'></script>
<script src='assets/js/build/d3.min.js'></script>
<script src='assets/js/nvd3/nv.d3.js'></script>
<script src='assets/js/sparkline.js'></script>
<script src='assets/js/bic_calendar.js'></script>
<script src='assets/js/widgets.js'></script>
<script src='assets/js/core.js'></script>

<script src="assets/js/jquery.countTo.js"></script>
<script type="text/javascript" src="ajaxupload.js"></script>
</body>
</html>
<script type="text/javascript">
var imageProfile='';
  $(function(){
        var btnUpload=$('#btnUp');
        new AjaxUpload(btnUpload, {
            action: 'up.php',
            name: 'uploadfile',
            onSubmit: function(file, ext){
                 if (! (ext && /^(jpg|png|gif|bmp)$/.test(ext))){
                    alert('Solo imagenes JPG,GIF,PNG,BMP.');
                    return false;
                }
            },
            onComplete: function(file, response){
                 $("#imgPerfil").attr("src" , "http://businesstool.misocioweb.com/dashboard/up/"+response);
            }
        });
});


</script>