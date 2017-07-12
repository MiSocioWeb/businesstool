<?php session_start();?>
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
   <link rel="icon" type="image/png" href="../logo500.png" />
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
	
	<?php include "header.php"; ?>
<!-- /top-bar -->
	<div class="main-content">
    <div class="mail_holder">           
      <div class="mail_menu_block no_padding col-md-4 col-sm-6 col-xs-12 col-lg-2" style="display:none;">
        <div class="mail_menu" >
          <div class="compose_block">
            <a href="#" class="btn btn-info btn-block" onclick="openModal('new')" ><i class="ti-folder"></i>New Company </a>
          </div>
          <ul class="list-unstyled menu_list">
            <li><a href="#"><i class=" ti-announcement"></i>Notifys </a></li>
            <li><a href="#"><i class="ti-user"></i>Agents</a></li>
            <li><a href="#"><i class="ti-comments"></i>Support</a></li>
            <li><a href="#"><i class="ti-eye"></i>AI Activity</a></li>
          </ul>
          <?php include "widgets/log.php"; ?>        
        </div>
        <!-- mail-menu -->
      </div>
      <!-- col-md-2 -->
      <div class="mail_body">               
        <div class="mail_list_block col-md-4 col-sm-6 no_padding col-xs-12 col-lg-4">
          <div class="mail_list" tabindex="1" style="overflow: hidden; outline: none;">
            <div class="search_bar_block">                              
              <div class="search_icon_block">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="search for mails">
                <span class="ion-search form-control-feedback" aria-hidden="true"></span>   
              </div>
            </div>
            <ul class="list-unstyled mails_holder" tabindex="2" style="overflow: hidden; outline: none;">
            
              <li id="putCompany">
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xtwo.png.pagespeed.ic.o7pKbndbCW.webp" alt="" data-pagespeed-url-hash="25167488" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Praveen kaligatla</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatRedc status"></i></li>
                          <li> <i class="ion-android-attach"></i> </li>
                        </ul>
                      </div>
                      <h4>Research have been going on the project will report the results asap in a few days.</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xone.png.pagespeed.ic.1ouqW9FTzR.webp" alt="" data-pagespeed-url-hash="4073927950" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Tupakula Vijay</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreenc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block unread">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xthree.png.pagespeed.ic.GGZFTs1olQ.webp" alt="" data-pagespeed-url-hash="3994671842" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Anusha</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreenc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>should release the project in the given date work hard.come on guys lets do it</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xfour.png.pagespeed.ic.TeezV0f_kg.webp" alt="" data-pagespeed-url-hash="491040364" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Venkatesh chitturi</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreyc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>Got selected as ias officer happy to tell ya . will give party soon</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xfive.png.pagespeed.ic.b1BLhBVjzi.webp" alt="" data-pagespeed-url-hash="4167504044" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Lakshman Kumar</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreyc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>hell yeah i got no fear lets rock the world :P </h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xsix.png.pagespeed.ic.yl6LdVHB4H.webp" alt="" data-pagespeed-url-hash="697086774" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Paris hilton</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreyc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xnine.png.pagespeed.ic.4kRXb8hZEY.webp" alt="" data-pagespeed-url-hash="3614618988" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Paul walker</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreyc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xseven.png.pagespeed.ic.qwkPzwhobS.webp" alt="" data-pagespeed-url-hash="3751619933" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Paul walker</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreenc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xeight.png.pagespeed.ic.WKiQErZ3dv.webp" alt="" data-pagespeed-url-hash="598369603" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Paul walker</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreyc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>
                <a href="#">
                  <div class="message_list_block">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="assets/images/avatar/xnine.png.pagespeed.ic.4kRXb8hZEY.webp" alt="" data-pagespeed-url-hash="3614618988" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">Paul walker</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                          <li>12:30</li>
                          <li><i class="ion ion-record flatGreenc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>                    
              </li>                       
            </ul>
          <div id="ascrail2002" class="nicescroll-rails nicescroll-rails-vr" style="width: 7px; z-index: auto; cursor: default; position: absolute; top: 0px; left: 395px; height: 799px; touch-action: none; display: block; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 5px; height: 660px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; touch-action: none;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 7px; z-index: auto; top: 792px; left: 0px; position: absolute; cursor: default; display: none; width: 395px; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 5px; width: 293px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div></div>
          <!-- mail-list -->
        </div>
        <!-- col-md-4 -->
        <!-- mail_list_block -->                  
        <div class="col-md-4 col-lg-6 col-sm-12 col-xs-12 no_padding mail_brief_holder" tabindex="3" style="overflow: hidden; outline: none;">
          <div class="heading_block">
            <h1 id="put_nameCompany">Project discussion </h1>
            <div class="btn-group pull-right action_buttons" role="group" aria-label="...">
              <button type="button" class="btn btn-default" onclick="openModal('edit');"><i class="ion-edit" ></i></button>
              <button type="button" class="btn btn-default"  onclick="openModal('contrato')"><i class="ion-android-attach"></i></button>
              <button type="button" class="btn btn-default" onclick="openModal('link')" ><i class="ion-link"  ></i></button>
              
              <button type="button" class="btn btn-default"><i class="ion-ios-trash"></i></button>
            </div>
          </div>
          <!-- heading_block -->
          <div class="mail_brief_body">
            <img src="business1600.png" alt="" data-pagespeed-url-hash="4031899032" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            <h4>Description</h4>
            <p id="put_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus maxime odio facilis, corporis eum impedit ea,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis est, mollitia in! Reprehenderit voluptatem, porro distinctio iste in eos quam dicta sunt at fuga! Facilis inventore laboriosam perferendis placeat, delectus!</p>
            <ul class="list-group attachment">
              <li class="list-group-item">                      
                <a href="javascript:void(0);" onclick="openModal('passwordsAndFiles')"> <i class="ti-unlock flatBluec"></i> Files and Passwords <span><i class="ti-plus"></i></span></a>
              </li>                   
              <li class="list-group-item">                      
                <a href="billing.php" id="goCompany"><i class="ti-shopping-cart flatGreenc"></i> Billing information <span><i class="ti-plus"></i></span></a>
              </li>
              <li class="list-group-item">                      
                <a href="#"><i class="ti-user"></i> Agents <span><i class="ti-plus"></i></span></a>
              </li>
            </ul>
            <textarea class="form-control" rows="4" placeholder="enter message here.."></textarea>
            <a href="#" class="btn btn-primary reply">Reply message</a>
          </div>
          <!-- mail_brief_body -->
        </div>
      </div>
      <!-- mail-body -->                      
    </div>
    <!-- mail-holder -->        
  </div>
	
	</div>
  <div class="modal fade" id="defaultmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
          <h4 class="modal-title" id="myModalLabel">Default Modal</h4>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
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
  function readCompany(){
    $.post("ajax/readCompany.php").done(function(data){
      $("#putCompany").html(data);
    });
  }  
  console.clear();
  readCompany();
  var company_name;  var company_legal;  var company_date; var company_description; var company_id; var company_page; var company_contract;
  function load_this(t){
  	$('.unread').attr("class" , "message_list_block");
  	t.find(".message_list_block").attr("class" , "message_list_block unread");;
    company_name = t.attr("company_name");
    company_legal = t.attr("company_legal");
    company_date = t.attr("company_date");
    company_page = t.attr("company_page");
    company_contract = t.attr("company_contract");
    company_description=t.attr("company_description");
    company_id=t.attr("company_id");
    $("#goCompany").attr("href", "billing.php?idCompany="+company_id);
    $.post("ajax/putCurrentCompany.php",{company_id: company_id}).done(function(data){	console.log(data);  });
      $("#put_nameCompany").html(company_name + '<span id="put_legal_date">today 12.30am</span>');
      $("#put_description").html(company_description );
      $("#put_legal_date").html( company_legal + "&nbsp; &nbsp;" + company_date );
  }

  function openModal(who){
    if(who=='edit'){
      $(".modal-title").html("Edit " + company_name);
      $.post("modal_content/editCompany.php",{company_id:company_id}).done(function(data){
        $(".modal-body").html(data);
        findFooter=$(".modal-body").find('#footer_load').html();
        $("#footer_load").remove();
        $(".modal-footer").html(findFooter);
        $("#defaultmodal").modal();  
      });
      
    }
    if(who=='new'){

      $(".modal-title").html("Create a New Company" );
      $.post("modal_content/newCompany.php").done(function(data){
        $(".modal-body").html(data);
        findFooter=$(".modal-body").find('#footer_load').html();
        $("#footer_load").remove();
        $(".modal-footer").html(findFooter);
        $("#defaultmodal").modal();          
      });
    }

    if(who=='passwordsAndFiles'){

      $(".modal-title").html("Create Passwords and Keys" );
      $.post("modal_content/passwordsAndFiles.php").done(function(data){
        $(".modal-body").html(data);
        findFooter=$(".modal-body").find('#footer_load').html();
        $("#footer_load").remove();
        $(".modal-footer").html(findFooter);
        $("#defaultmodal").modal();          
      });
    }


    if(who=='contrato'){
    	console.log(company_contract);
      window.open(company_contract);
    }

    if(who=='link'){
    	console.log(company_page);
    	if(company_page.indexOf("ttp://")==-1) company_page='http://'+company_page;
      window.open(company_page);
    }

  }

  
</script>
