<?php session_start(); 

	include "db.php";
	$idUser=$_SESSION['idUSER'];
	$idBusiness=$_SESSION['idBusiness'];
	$nameBusiness=$_SESSION['businessName'];
	//echo "$idBusiness - $nameBusiness";;
	$queryBusiness=mysql_query("SELECT * FROM  company WHERE id=$idBusiness") or die(mysql_error());
	$fecth=mysql_fetch_array($queryBusiness);
	$direccion=$fecth['direccion'];
	$logo=$fecth['logo'];
	$ruc=$fecth['ruc'];
	$fecha_fundacion=$fecth['fecha_fundacion'];
	$email=$fecth['email'];
  $page=$fecth['page'];
  $sri=$fecth['sri'];
  $name=$fecth['name'];
  $phone=$fecth['phone'];
  $facebook=$fecth['facebook'];
  $twitter=$fecth['twitter'];
  $instagram=$fecth['instagram'];
   $banner=$fecth['banner'];
   $description=$fecth['description'];

	if(!$logo) $logo='nopic.png';
	if(!$direccion) $direccion='Not Adress Founded';
	if(!$ruc) $ruc='Not Ruc Founded';
	if(!$fecha_fundacion) $fecha_fundacion='Date No Founded';
	if(!$email) $email='Email No Founded';
   if($logo==''){$logo='https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png';}
   if($banner==''){$banner='http://businesstool.info/dashboard/assets/images/profile-bg.jpg';}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

  <title>You Company -Business Tool</title>

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
   
  <script src='assets/js/jquery.js'></script>
<script src='assets/js/app.js'></script>
  <script>
    jQuery(window).load(function () {
      $('.piluku-preloader').addClass('hidden');
    });
    function openEdit(){
      $("#modalInformation").modal({
        keyboard: false,  
            backdrop: 'static'
      });
    }
    
     function muestraModal3(){
            $("#modalSocial").modal({
        keyboard: false,  
            backdrop: 'static'
      });
      }
       function muestraModal2(){
            $("#modalInfo2").modal({
        keyboard: false,  
            backdrop: 'static'
      });
       }
    function createUser(id){
    currentUser=id;
       $("#modalUser").modal({
        keyboard: false,  
            backdrop: 'static'
      });
      if(id>0){
          $.post("ajax/readUser.php",{id:id}).done(function(data){
            obj=$.parseJSON(data);
            nombre=obj.name;
            email=obj.email;
            phone=obj.phone;
            foto=obj.foto;
            identificacion=obj.identificacion;
            $("#userNombre").val(nombre);
            $("#userEmail").val(email);
            $("#userPhone").val(phone);
            $("#userFoto").attr("src", foto);
            $("#userIdentificacion").val(identificacion);
            
          });
      }
      
    }
    
  

  </script>
    <link href="http://hayageek.github.io/jQuery-Upload-File/4.0.10/uploadfile.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.10/jquery.uploadfile.min.js"></script>

  
  <script src="ajaxupload.js"></script>
</head>
<body>
<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
					<h4 class="modal-title" id="myModalLabel1">Social Links</h4>
				</div>
				<div class="modal-body">
        <div class="row">
					<div class="col-md-6">
              <label>Facebook</label>
              <input class="form-control" id="facebook" value="<?php echo $facebook;  ?>">
          </div>
          <div class="col-md-6">
          <label>Twitter</label>
              <input class="form-control" id="twitter" value="<?php echo $twitter; ?>">
          </div>
        </div>
        <div class="row">
					<div class="col-md-6">
              <label>Instagram</label>
              <input class="form-control" id="instagram" value="<?php echo $instagram; ?>">
          </div>
          
        </div>
        
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary"  onclick="saveInfo(4);">Save changes</button>
				</div>
			</div>
		</div>
	</div>
  
	<div class="modal fade" id="modalInfo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
					<h4 class="modal-title" id="myModalLabel1">Information Business</h4>
				</div>
				<div class="modal-body">
				<div class="row">
            <div class="col-md-4">
              <label>Fundation date</label>  <br>
              <input class="form-contol" tipo="fecha" id="fechaFundacion" value="<?php echo $fecha_fundacion; ?>"/>
            </div>
            <div class="col-md-4">
              <label>Ruc</label>             <br>
              <input class="form-contol" tipo="fecha" id="ruc" value="<?php echo $ruc; ?>"/>
            </div>
            <div class="col-md-4">
              <label>Legal Document</label>      <br>
              <input class="form-contol" tipo="fecha" id="sri" value="<?php echo $sri; ?>"/>
            </div>
        </div>
        	<div class="row">
            <div class="col-md-4">
              <label>Mobile Number</label>           <br>
              <input class="form-contol" tipo="fecha" id="mobileNumber" value="<?php echo $phone; ?>"/>
            </div>
            <div class="col-md-4">
              <label>Page</label>                        <br>
              <input class="form-contol" id="page" value="<?php echo $page; ?>"/>
            </div>
            <div class="col-md-4">
              <label>Short Description</label>               <br>
              <input class="form-contol" tipo="fecha" id="description" value="<?php echo $description; ?>"/>
            </div>
            
        </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="saveInfo(3);">Save changes</button>
				</div>
			</div>
		</div>
	</div>
  
<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
					<h4 class="modal-title" id="myModalLabel1">Agent Manager</h4>
				</div>
				<div class="modal-body">
				    <div class="row">
            <div class="col-md-4" align="center">
             <label> Picture </label>                                                                    <br>
                      <img id="userFoto"  src="https://www.tm-town.com/assets/default_male300x300-aae6ae0235b6cd78cee8df7ae19f6085.png"     width="100px">
                       <div id="UPuserFoto" response="userFoto" style="" >Upload</div>
            </div>
                <div class="col-md-4">
                    <div class="row">
                          <div class="col-md-12">
                              <label>Names</label>
                              <input class="form-control" placeholder="Names" id="userNombre">
                                   <br>
                                    <label>Email</label>
                                <input class="form-control" placeholder="Email" id="userEmail">
                          </div>
                    </div>
                    
                </div>
                
                <div class="col-md-4">
                  <div class="row">
                      <div class="col-md-12">
                      <label>Indentification</label>
                    <input class="form-control" placeholder="Identification" id="userIdentificacion" style="background-color:black;color:white;text-align:center;">
                    <br>
                    <label>Phone</label>
                    <input class="form-control" placeholder="Phone" id="userPhone">
                      </div>
                  </div>
                    
                </div>
                
                
               
            </div>
            
            
            
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="saveInfo(2);">Save changes</button>
				</div>
			</div>
		</div>
	</div>


<div class="modal fade" id="modalInformation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
					<h4 class="modal-title" id="myModalLabel1">Edit Information</h4>
				</div>
				<div class="modal-body">
					
          <div class="row">
            <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                <label> <span class="ion-briefcase"></span>&nbsp;&nbsp; Name of Business</label>
                <input id="nameBusiness" class="form-control" placeHolder="Write your company name" value="<?php echo $name; ?>" />
                  </div>
                  <div class="col-md-6">
                    <label><span class="ion-ios-location"></span>&nbsp;&nbsp; Adress of your business </label>
                    <input id="adressBusiness" class="form-control" placeHolder="Write your company name" value="<?php echo $direccion; ?>" />
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-md-6" align="center">
                      <label> Logo </label>                                                                    <br>
                      <img   id="subeLogo" src="<?php echo $logo; ?>" width="60" >
                     <div id="UPsubeLogo" response="subeLogo"  >Upload</div>
                  </div>
                  <div class="col-md-6" align="center">
                      <label> Banner </label>                                                                    <br>
                      <img id="subeBanner" src="<?php echo $banner; ?>" width="80%">
                      <br/>
                      <div id="UPsubeBanner" response="subeBanner" style="" >Upload</div>
                        
                  </div>
                </div>
            </div>
          </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="saveInfo(1);">Save changes</button>
				</div>
			</div>
		</div>
	</div>
         <script>
         var currentUser=0;
            function saveInfo(id){
              if(id==1){
                  $.post("ajax/saveInfo.php",{
                    id:id , 
                    name: $("#nameBusiness").val(), 
                    adress:$("#adressBusiness").val(), 
                    logo:$("#subeLogo").attr("src") , 
                    banner:$("#subeBanner").attr("src")
                     }).done(function(data){
                      alert(data);
                      window.top.location="";
                    });
              }
              
               if(id==2){
               idDB=currentUser;
                  $.post("ajax/saveInfo.php",{
                  idDB:idDB,
                    id:id , 
                    name: $("#userNombre").val(), 
                    adress:$("#userIdentificacion").val(), 
                    email:$("#userEmail").val(),
                    phone:$("#userPhone").val(), 
                    foto:$("#userFoto").attr("src")
                     }).done(function(data){
                      alert(data);
                      window.top.location="";
                    });
              }
              
               if(id==3){
              
                  $.post("ajax/saveInfo.php",{
                    id:id , 
                    birth: $("#fechaFundacion").val(), 
                    ruc:$("#ruc").val(), 
                    sri:$("#sri").val(),
                    mobile:$("#mobileNumber").val(), 
                    description:$("#description").val(),
                    page:$("#page").val()
                     }).done(function(data){
                      alert(data);
                      window.top.location="";
                    });
              }
              
               if(id==4){
              
                  $.post("ajax/saveInfo.php",{
                    id:id , 
                    facebook: $("#facebook").val(), 
                    twitter:$("#twitter").val(), 
                    instagram:$("#instagram").val()
                   
                     }).done(function(data){
                      alert(data);
                      window.top.location="";
                    });
              }
              
              
            }
         </script>
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
			<img class="logo" src="assets/images/example.png" alt="logo">	
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
	
	<?php include "header.php"; ?>
<!-- /top-bar -->
	
	<div class="main-content">
		<!--row-->
		<div class="row">
			<div class="col-md-12 nopad-right">
				<!--                        *** Profile ***-->
				<div class="panel panel-piluku">
					<div class="panel-body profile-body">
						<!--                        *** Profile cover ***-->
						<div class="profile-heading" style="background-image:url(<?php echo $banner; ?>);">
							<div class="profile-img">
								<img src="<?php echo $logo; ?>" alt="three" id="elLogo">
							</div>
							<div class="profile-name" style="text-shadow: 2px 2px black;">
								<?php echo $nameBusiness; ?>
							</div>
							<div class="profile-age-country" style="text-shadow: 2px 2px black;">
							
								<i class="ion ion-ios-location"></i> <?php echo $direccion; ?>
							</div>
							<div class="profile-heading-footer">
								<div class="col-md-5 col-md-offset-1  col-xs-12">
								
								</div>
								<div class="col-md-5">
									<div class="profile-buttons">
										<a href="javascript:openEdit();" class="btn btn-green btn-icon-green btn-icon-block btn-icon-blockleft btn-profile">
											<i class="ion ion-ios-personadd"></i>
											<span>Edit Information</span>
										</a>
									
									</div>
								</div>
							</div>
						</div>
						<!--                        *** /Profile cover ***-->
						<div class="row">
							<!--                        *** Profile left ***-->
						
							
							<!--                        *** /Profile left ***-->
							<!--                        *** Profile right ***-->
							<div class="profile-right">
              <div class="col-md-2">
              </div>
								<div class="col-md-8">
									<!--                        *** Profile sidebar ***-->
                  <hr/>
                  <center>
                    <h2><?php echo $name; ?></h2>
                  </center>
									<div class="profile-sidebar" >
										<div class="profile-sidebar-heading">
											AGENTS
										</div>
										<!--                        *** Profile friends ***-->
										<ul class="list-unstyled list-inline profile-friends-img">
										<?php 
											$idUser=$_SESSION['idUSER'];
	$relation_admin=$_SESSION['relation_admin'];
	$query=mysql_query("SELECT * FROM users WHERE relation_admin=$relation_admin OR id=$relation_admin") or die(mysql_error());
	while($row=mysql_fetch_array($query)){
		$foto=$row['foto'];
		if(!$foto) $foto='nopic.png';
		echo '<li><a href="javascript:createUser('.$row[id].');" title="'.$row[name].'"><img src="'.$foto.'" alt="two"></a></li>';
	}
										?>
											
											
											<li><a href="javascript:createUser(0);" class="hi">ADD NEW</a></li>
										</ul>
										<!--                        *** /Profile friends ***-->
									</div>
									<!--                        *** /Profile sidebar ***-->
									<!--                        *** Profile sidebar ***-->
									<div class="profile-sidebar">
										<div class="profile-sidebar-heading">
											Personal Info
											<a href="javascript:muestraModal2();"><i class="ion ion-edit"></i></a>
										</div>
										<!--                        *** Profile Personal ***-->
										<ul class="list-inline list-unstyled profile-personal-info">
											<li>Fundation Date <span><?php echo $fecha_fundacion; ?></span></li>
											<li>RUC <span><?php echo $ruc; ?></span></li>
                      <li>SRI <span><?php echo $sri; ?></span></li>
											<li>mobile number <span><?php echo $phone; ?></span></li>
											<li>Website <span><?php echo $page; ?></span></li>
                      <li>description <span><?php echo $description; ?></span></li>
										</ul>
										<!--                        *** /Profile Personal ***-->
									</div>
									<!--                        *** /Profile sidebar ***-->
									<!--                        *** Profile sidebar ***-->
                  
                  	<div class="profile-sidebar">
										<div class="profile-sidebar-heading">
										 Embed Script
											<a href="javascript:muestraModal2();"><i class="ion-help-circled"></i></a>
										</div>
										<!--                        *** Profile Personal ***-->
									
                  <figure class="highlight"><pre><code class="language-html" data-lang="html">< div id="bt-root" >< / div><br>< script type="text/javscript">mypage="<?php echo $page; ?>";< / script><br/>< script src='http://businesstool.info/cdn/widget.js'>< / script ></code></pre></figure>

<br>
										<!--                        *** /Profile Personal ***-->
									</div>
                  
                 
									<div class="profile-sidebar">
										<div class="profile-sidebar-heading">
											Social  Links    <a href="javascript:muestraModal3();"><i class="ion ion-edit"></i></a>
										</div>
										<!--                        *** Profile Personal ***-->
										<ul class="list-inline list-unstyled profile-social-links">
											<li><a href="<?php echo $facebook; ?>"><i class="ion ion-social-facebook profile-fb"></i></a></li>
											<li><a href="<?php echo $twitter; ?>"><i class="ion ion-social-twitter profile-twitter"></i></a></li>
											<li><a href="<?php echo $instagram; ?>"><i class="ion ion-social-instagram profile-fb"></i></a></li>
											<li><a href="<?php echo $page; ?>"><i class="ion ion-ios-world profile-fb"></i></a></li>
											
										</ul>
										<!--                        *** /Profile Personal ***-->
									</div>
									<!--                        *** /Profile sidebar ***-->
								</div>
							</div>
							<!--                        *** /Profile right ***-->
						</div>
					</div>
				</div>
				<!--                        *** /Profile ***-->
				<!-- /panel -->
			</div>
		</div>
	</div>

</div>  

	<div class="side-bar right-bar ">
		<div class="contacts">
			<div class="col col-md-12">
				<ul class="tabs">
					<li class="tab col-md-3"><a href="#test1" class="active">Chat</a></li>
					<li class="tab col-md-3"><a href="#test2">Settings</a></li>
					<li class="tab col-md-3"><a href="#test3">Messages</a></li>
				</ul>
			</div>
			<div class="content-holder">
				<div id="test1" class="col-md-12 no_padding">					
					<div class="panel-body no_padding">
						<div class="panel-group piluku-accordion piluku-accordion-two" id="accordionOne" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalOne">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalOne" aria-expanded="true" aria-controls="collapseOne">
											Online <i class="chevron ti-angle-down"></i>
										</a>
									</h4>
								</div>
								<div id="collapseModalOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body no_padding">
										<ul class="list-group contacts-list">
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/one.png" alt="">
													</div>
													<span class="name">Richards carlson</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/two.png" alt="">
													</div>
													<span class="name">Firing Arc</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/three.png" alt="">
													</div>
													<span class="name">strapzen</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/four.png" alt="">
													</div>
													<span class="name">Reeves</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/five.png" alt="">
													</div>
													<span class="name">Bootstrap Guru</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/six.png" alt="">
													</div>
													<span class="name">Carlson</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/seven.png" alt="">
													</div>
													<span class="name">Paris hilton</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/eight.png" alt="">
													</div>
													<span class="name">Henry Richards</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/nine.png" alt="">
													</div>
													<span class="name">Richie Rich</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>

										</ul>	
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalTwo">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalTwo" aria-expanded="false" aria-controls="collapseTwo">
											offline
										</a>
									</h4>
								</div>
								<div id="collapseModalTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
									
									<div class="panel-body no_padding">
										<ul class="list-group contacts-list">
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/one.png" alt="">
													</div>
													<span class="name">Richards carlson</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/two.png" alt="">
													</div>
													<span class="name">Firing Arc</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/three.png" alt="">
													</div>
													<span class="name">strapzen</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/four.png" alt="">
													</div>
													<span class="name">Reeves</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/five.png" alt="">
													</div>
													<span class="name">Bootstrap Guru</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/six.png" alt="">
													</div>
													<span class="name">Carlson</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/seven.png" alt="">
													</div>
													<span class="name">Paris hilton</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/eight.png" alt="">
													</div>
													<span class="name">Henry Richards</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/nine.png" alt="">
													</div>
													<span class="name">Richie Rich</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>

										</ul>	
									</div>
									
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalThree">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalThree" aria-expanded="false" aria-controls="collapseThree">
											Away
										</a>
									</h4>
								</div>
								<div id="collapseModalThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">									
									<div class="panel-body no_padding">
										<ul class="list-group contacts-list">
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/one.png" alt="">
													</div>
													<span class="name">Richards carlson</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/two.png" alt="">
													</div>
													<span class="name">Firing Arc</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/three.png" alt="">
													</div>
													<span class="name">strapzen</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/four.png" alt="">
													</div>
													<span class="name">Reeves</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/five.png" alt="">
													</div>
													<span class="name">Bootstrap Guru</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/six.png" alt="">
													</div>
													<span class="name">Carlson</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/seven.png" alt="">
													</div>
													<span class="name">Paris hilton</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/eight.png" alt="">
													</div>
													<span class="name">Henry Richards</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="assets/images/avatar/nine.png" alt="">
													</div>
													<span class="name">Richie Rich</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
										</ul>	
									</div>
								</div>
							</div>
						</div>	
					</div> 
				</div>
				<div id="test2" class="col-md-12 no_padding">
				<br>										
					<div class="form-group">
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">Reminders</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch"><i></i>
									</label>
								</div>
							</div>
						</div>
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">theme options</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch1" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch1"><i></i>
									</label>
								</div>
							</div>
						</div>
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">dark / light theme</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch2" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch2"><i></i>
									</label>
								</div>
							</div>
						</div>
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">Email Updates</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch3" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch3"><i></i>
									</label>
								</div>
							</div>
						</div>
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">Notifications</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch4" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch4"><i></i>
									</label>
								</div>
							</div>
						</div>							

						<div class="form-group check-radio">
							<label class="col-sm-9 control-label">Loader animation</label>
							<div class="col-sm-3">
								<ul class="list-inline checkboxes-radio">
									<li class="ms-hover">
										<input type="checkbox" class="mark-complete" id="c1">
										<label for="c1"><span></span></label>
									</li>                                                                               
								</ul>
							</div>
						</div>
						<div class="form-group check-radio">
							<label class="col-sm-9 control-label">delay load</label>
							<div class="col-sm-3">
								<ul class="list-inline checkboxes-radio">
									<li class="ms-hover">
										<input type="checkbox" class="mark-complete" id="c2">
										<label for="c2"><span></span></label>
									</li>                                                                               
								</ul>
							</div>
						</div>
						<div class="form-group check-radio">
							<label class="col-sm-9 control-label">Graphs animations</label>
							<div class="col-sm-3">
								<ul class="list-inline checkboxes-radio">
									<li class="ms-hover">
										<input type="checkbox" class="mark-complete" id="c3" checked="">
										<label for="c3"><span></span></label>
									</li>                                                                               
								</ul>
							</div>
						</div>
					</div>						
				</div>
				<div id="test3" class="col-md-12 no_padding">
					<div class="heading no_border_bottom">
						Todays
						<div class="left"><a href="#"><i class="ion-android-refresh"></i></a></div>
						<div class="right"><a href="#"><i class="ion-gear-a"></i></a></div>						
					</div>
					<div class="list-group message-list">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">henry richards</h4>
							<p class="list-group-item-text">has pushed all the code to github and saved some fixes too..</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">mary </h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto accusamus officiis vero magnam amet, quas corru</p>
						</a>							
					</div>	
					<div class="heading no_border_bottom">
						june 15 1990
						<div class="left"><a href="#"><i class="ion-android-refresh"></i></a></div>
						<div class="right"><a href="#"><i class="ion-gear-a"></i></a></div>						
					</div>
					<div class="list-group message-list">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">henry richards</h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto accusamus officiis vero magnam amet, quas corru</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">mary </h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto accusamus officiis vero magnam amet, quas corru</p>
						</a>							
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
<script src='assets/js/bic_calendar.js'></script>
<script src='assets/js/core.js'></script>

<script src="assets/js/jquery.countTo.js"></script>


     <script>
$(document).ready(function()
{
	$("#UPsubeBanner").uploadFile({
	url:"upload.php",
	fileName:"myfile",
 afterUploadAll:function(obj){
 fileUp=obj.responses[0]
   console.log(fileUp);
   fileUp=fileUp.substring(2,fileUp.length-2);
   response=$("#UPsubeBanner").attr("response");
   $("#"+response).attr("src","http://businesstool.info/dashboard/up/"+fileUp);
  
}
	});

   	$("#UPsubeLogo").uploadFile({
	url:"upload.php",
	fileName:"myfile",
 afterUploadAll:function(obj){
 fileUp=obj.responses[0]
   console.log(fileUp);
   fileUp=fileUp.substring(2,fileUp.length-2);
   response=$("#UPsubeLogo").attr("response");
   $("#"+response).attr("src","http://businesstool.info/dashboard/up/"+fileUp);
  
}
	});
    	$("#UPuserFoto").uploadFile({
	url:"upload.php",
	fileName:"myfile",
 afterUploadAll:function(obj){
 fileUp=obj.responses[0]
   console.log(fileUp);
   fileUp=fileUp.substring(2,fileUp.length-2);
   response=$("#UPuserFoto").attr("response");
   $("#"+response).attr("src","http://businesstool.info/dashboard/up/"+fileUp);
  
}
	}); 
  
});
</script>
</body>
</html>