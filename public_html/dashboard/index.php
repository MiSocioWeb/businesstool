<?php 
	session_start();
		if(!$_SESSION['idUSER']){
				echo "<script>window.top.location='http://businesstool.info';</script>";
				exit();
			}else{
				//echo "<script>alert($_SESSION[idUSER]);</script>";
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
       <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
            <div class="dashboard-stats">
                <div class="left">
                    <h3 class="flatBluec counter" data-to="7684" data-speed="4000">7684</h3>
                    <h4>Monthly User</h4>
                </div>
                <div class="right flatBlue">
                    <i class="ion ion-ios-heart-outline"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
            <div class="dashboard-stats">
                <div class="left">
                    <h3 class="flatGreenc counter" data-to="6433" data-speed="4000">6433</h3>
                    <h4>peoples in circles</h4>
                </div>
                <div class="right flatGreen">
                    <i class="ion ion-ios-color-filter-outline"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
            <div class="dashboard-stats">
                <div class="left">
                    <h3 class="flatRedc counter" data-to="4532" data-speed="4000">4532</h3>
                    <h4>monthly notifications</h4>
                </div>
                <div class="right flatRed">
                    <i class="ion ion-ios-alarm-outline"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
            <div class="dashboard-stats">
                <div class="left">
                    <h3 class="flatOrangec counter" data-to="345" data-speed="8000">345</h3>
                    <h4>monthly targets</h4>
                </div>
                <div class="right flatOrange">
                    <i class="ion ion-ios-analytics-outline"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 nopad-right">
            <!-- panel -->
            <div class="panel panel-piluku">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Monthly Earnings
                        <span class="panel-options">
                           <a href="#" class="panel-refresh">
                              <i class="icon ti-reload"></i> 
                          </a>
                          <a href="#" class="panel-minimize">
                              <i class="icon ti-angle-up"></i> 
                          </a>
                          <a href="#" class="panel-close">
                              <i class="icon ti-close"></i> 
                          </a>
                      </span>
                  </h3>
              </div>
              <div class="panel-body">
                <div class="row main-chart-parent">
                    <div class="ct-chart ct-golden-section  chart-height" id="main_chart"></div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /panel -->
    </div>
    <!-- col-md-6 -->

    <div class="col-md-6 nopad-right">
        <!-- panel -->
        <div class="panel panel-piluku">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Mail widget
                    <span class="panel-options">
                       <a href="#" class="panel-refresh">
                          <i class="icon ti-reload"></i> 
                      </a>
                      <a href="#" class="panel-minimize">
                          <i class="icon ti-angle-up"></i> 
                      </a>
                      <a href="#" class="panel-close">
                          <i class="icon ti-close"></i> 
                      </a>
                  </span>
              </h3>
          </div>
          <div class="panel-body mail_widget">
            <ul class="tabs">
                <li class="tab col-md-3"><a href="#test12" class="active">Inbox</a>
                </li>
                <li class="tab col-md-3"><a href="#test13">Sent</a>
                </li>
                <li class="tab col-md-3"><a href="#test14">Important</a>
                </li>
                <li class="tab col-md-3"><a href="#test15">Personal</a>
                </li>
            </ul>
            <div class="content-holder">
                <div id="test12" class="col-md-12 no_padding">
                    <div class="mail_list">
                        <ul class="list-unstyled mails_holder">
                            <li>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/two.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Henry richards</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatRedc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
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
                                                <img src="assets/images/avatar/one.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Hola fan</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/seven.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Nemo</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/eight.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Tupakula Vijay</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/nine.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">lucky</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/one.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">venky</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="test13" class="col-md-12 no_padding">
                    <div class="mail_list">
                        <ul class="list-unstyled mails_holder">
                            <li>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/two.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Mila kunis</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatRedc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
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
                                                <img src="assets/images/avatar/one.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">rescort</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/three.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">deal buzz</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/four.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">carlson</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/five.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">richie rich</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/one.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Tupakula Vijay</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="test14" class="col-md-12 no_padding">
                    <div class="mail_list">
                        <ul class="list-unstyled mails_holder">
                            <li>
                                <a href="#">
                                    <div class="message_list_block starred">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/two.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Henry richards</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatRedc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Research have been going on the project will report the results asap in a few days.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block starred">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/ten.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Romeo roadie</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatRedc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>waiting for your approval, many pending verifications!!</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block starred">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/eight.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Jonny</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatRedc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Help me urgent.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block starred">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/six.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">pretty</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatRedc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>login have been going on the project will report the results asap in a few days.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block starred">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/two.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Henry richards</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatRedc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Research have been going on the project will report the results asap in a few days.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- mail_list -->
                </div>
                <div id="test15" class="col-md-12 no_padding">
                    <div class="mail_list">
                        <ul class="list-unstyled mails_holder">
                            <li>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/two.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Henry richards</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatRedc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
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
                                                <img src="assets/images/avatar/one.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Hola fan</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/seven.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Nemo</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/eight.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">Tupakula Vijay</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/nine.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">lucky</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message_list_block">
                                        <div class="left">
                                            <div class="avatar_holder">
                                                <img src="assets/images/avatar/one.png" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span class="name">venky</span>
                                            <div class="pull-right right_details">
                                                <ul class="list-unstyled list-inline">
                                                    <li>12:30</li>
                                                    <li><i class="ion ion-record flatGreenc status"></i>
                                                    </li>
                                                    <li><i class="ion-android-attach"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                                        </div>
                                        <!-- right -->
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- mail-list -->
                </div>
            </div>
        </div>
    </div>
    <!-- /panel -->
</div>
<!-- col-md-6 -->


<div class="col-md-4 nopad-right">
    <div class="piluku-panel no-pad panel">
        <div class="sparkline-widget">
            <div class="heading-info flatRed">
                <p class="pull-left">Company development
                    <br>
                </p>
                <p class="pull-right right">4% <i class="ion-android-arrow-dropup flatGreenc"></i>
                </p>
            </div>
            <div class="svg-holder flatRed">
                <div class="line"></div>
                <svg id="chart1" class="sparkline"></svg>
            </div>
            <div class="info-bottom">
                <div class="col-md-6 left">
                    Monthly
                    <p class="flatRedc">4 percent</p>
                </div>
                <div class="col-md-6 right">
                    Profit
                    <p class="flatRedc">40%</p>
                </div>
            </div>
        </div>
        <!-- sparkline-widget -->
    </div>
    <!-- panel -->
</div>
<!-- col-md-6 -->

<div class="col-md-4 nopad-right">
    <div class="piluku-panel no-pad panel">
        <div class="sparkline-widget">
            <div class="heading-info flatGreen">
                <p class="pull-left">Revenue Generation
                    <br>
                </p>
                <p class="pull-right right">4% <i class="ion-android-arrow-dropdown flatRedc"></i>
                </p>
            </div>
            <div class="svg-holder flatGreen">
                <div class="line"></div>
                <svg id="chart2" class="sparkline"></svg>
            </div>
            <div class="info-bottom">
                <div class="col-md-6 left">
                    Monthly
                    <p class="flatGreenc">5 sales</p>
                </div>
                <div class="col-md-6 right">
                    Profit
                    <p class="flatGreenc">80%</p>
                </div>
            </div>
        </div>
        <!-- sparkline-widget -->
    </div>
    <!-- panel -->
</div>
<!-- col-md-6 -->

<div class="col-md-4 nopad-right">
    <div class="piluku-panel no-pad panel">
        <div class="sparkline-widget">
            <div class="heading-info flatOrange">
                <p class="pull-left">Tasks Management
                    <br>
                </p>
                <p class="pull-right right">9% <i class="ion-android-arrow-dropup flatGreenc"></i>
                </p>
            </div>
            <div class="svg-holder flatOrange">
                <div class="line"></div>
                <svg id="chart3" class="sparkline"></svg>
            </div>
            <div class="info-bottom">
                <div class="col-md-6 left">
                    Monthly
                    <p class="flatOrangec">80 Tasks</p>
                </div>
                <div class="col-md-6 right">
                    Status
                    <p class="flatOrangec">1245</p>
                </div>
            </div>
        </div>
        <!-- sparkline-widget -->
    </div>
    <!-- panel -->
</div>
<!-- col-md-6 -->

<div class="col-md-4 nopad-right">
    <div class="piluku-panel no-pad panel">
        <div class="ios-profile-widget">
            <div class="header_cover">
                <div class="more"><a href="#"><i class="ion-more"></i></a>
                </div>
                <img src="assets/images/avatar/one.png" alt="">
                <h3>Henry Richards</h3>
                <i class="ion ion-social-twitter"> @Richardloves</i>
            </div>
            <!-- cover -->
            <ul class="list-inline interactive_btn">
                <li>
                    <a href="#" class=""><i class="ion-ios-personadd-outline"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-ios-heart-outline"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-ios-chatboxes-outline"></i></a>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">200+</span>
                    Friends
                </li>
                <li class="list-group-item">
                    <span class="badge">1,400+</span>
                    Followers
                </li>
                <li class="list-group-item">
                    <span class="badge">3,700</span>
                    Posts
                </li>
                <li class="list-group-item">
                    <span class="badge">14</span>
                    Pokes
                </li>
            </ul>

        </div>
        <!-- ios-profile -->
    </div>
    <!-- panel -->
</div>
<!-- col-md-6 -->

<div class="col-md-4 col-xs-12 nopad-right">
    <!-- panel -->
    <div class="panel panel-piluku">
        <div class="panel-heading">
            <h3 class="panel-title">
                Login
                <span class="panel-options">
                   <a href="#" class="panel-refresh">
                      <i class="icon ti-reload"></i> 
                  </a>
                  <a href="#" class="panel-minimize">
                      <i class="icon ti-angle-up"></i> 
                  </a>
                  <a href="#" class="panel-close">
                      <i class="icon ti-close"></i> 
                  </a>
              </span>
          </h3>
      </div>
      <div class="panel-body no-padding">
        <div class="piluku-login">
            <div class="form-section">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success btn-block"><strong>Log in</strong>
                </button>
            </div>
            <p>Not a member ? <a href="">Signup now</a>
            </p>
            <div class="header">
                <ul class="">
                    <li><a href="#" class="btn btn-radius facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#" class="btn btn-radius twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#" class="btn btn-radius google"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /panel -->
</div>
<!-- col-md-3 -->

<div class="col-md-4 col-sm-6 col-xs-12 nopad-right">
    <!-- panel -->
    <div class="panel panel-piluku">
        <div class="panel-heading">
            <h3 class="panel-title">
                Monthly Earnings
                <span class="panel-options">
                   <a href="#" class="panel-refresh">
                      <i class="icon ti-reload"></i> 
                  </a>
                  <a href="#" class="panel-minimize">
                      <i class="icon ti-angle-up"></i> 
                  </a>
                  <a href="#" class="panel-close">
                      <i class="icon ti-close"></i> 
                  </a>
              </span>
          </h3>
      </div>
      <div class="panel-body">
        <div class="row small-bar-chart">
            <div class="ct-chart ct-minor-seventh chart-height monthly-earning-chart" id="small_bar_chart"></div>
            <ul class="list-unstyled  info_section list-inline">
                <li>
                    <div class="circle flatBluec"></div>mobiles
                </li>
                <li>
                    <div class="circle flatBluec2"></div>Tabs
                </li>
                <li>
                    <div class="circle flatBluec3"></div>Laptops
                </li>
            </ul>
            <ul class="market_info_holder list-unstyled">
                <li>
                    <div class="col-md-4 market_info">
                        <h2>Apple inc</h2>
                        <div class="status flatRedc">101$ <i class="ion-arrow-down-b"></i> 
                        </div>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 market_info">
                        <h2>Sony inc</h2>
                        <div class="status flatGreenc">306$ <i class="ion-arrow-up-b"></i> 
                        </div>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 market_info">
                        <h2>Htc inc</h2>
                        <div class="status flatRedc">112$ <i class="ion-arrow-down-b"></i> 
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /row -->
    </div>
</div>
<!-- /panel -->
</div>
<!-- col-md-3 -->

<div class="col-md-4 col-sm-6 col-xs-12 nopad-right">
    <!-- panel -->
    <div class="panel panel-piluku">
        <div class="panel-heading">
            <h3 class="panel-title">
                Website visitors
                <span class="panel-options">
                   <a href="#" class="panel-refresh">
                      <i class="icon ti-reload"></i> 
                  </a>
                  <a href="#" class="panel-minimize">
                      <i class="icon ti-angle-up"></i> 
                  </a>
                  <a href="#" class="panel-close">
                      <i class="icon ti-close"></i> 
                  </a>
              </span>
          </h3>
      </div>
      <div class="panel-body">
        <div class="row small_pie_chart">
            <ul class="tabs light-tab">
                <li class="tab col-md-4"><a href="#market1" class="active">Graphical</a>
                </li>
                <li class="tab col-md-4"><a href="#market2">Progress</a>
                </li>
                <li class="tab col-md-4"><a href="#market3">Quote</a>
                </li>
            </ul>
            <div class="content-holder">
                <div id="market1" class="col-md-12 no_padding">
                    <div class="ct-chart ct-golden-section chart-height website-visits" id="small_pie_chart"></div>
                    <ul class="list-unstyled  info_section list-inline">
                        <li>
                            <i class="ion ion-record flatOrangec"></i> Motorola
                        </li>
                        <li>
                            <i class="ion ion-record flatRedc"></i> Keen labs
                        </li>
                        <li>
                            <i class="ion ion-record flatBluec"></i> Facebook
                        </li>
                    </ul>
                </div>
                <div id="market2" class="col-md-12 no_padding">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">January Result
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">Feb Result
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">March Result
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">April Result
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">May Result
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Present Result
                        </div>
                    </div>
                </div>
                <div id="market3" class="col-md-12 no_padding">
                    <h4>Documented</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora at, aliquid porro, voluptate maiores fugiat? Tempore adipisci excepturi dolores provident doloremque, eum quis placeat, cupiditate laudantium ipsam atque repellendus, error.</p>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>
<!-- /panel -->
</div>
<!-- col-md-3 -->

<div class="col-md-4 col-sm-6 col-xs-12 nopad-right">
    <div class="piluku-panel no-pad todo_widget panel">
        <div class="todo_heading">
            <div class="left-icon">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-all" id="todo">
                    <label for="todo"><span></span></label>
                </div>
            </div>
            Todo
            <a href="#" class="right-icon">
                <i class="ion-ios-bell"></i>
            </a>
        </div>
        <ul class="list-group list-todo">
            <li class="list-group-item">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-complete" id="todo1">
                    <label for="todo1"><span></span>Call Head branch</label>
                </div>
            </li>
            <li class="list-group-item">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-complete" id="todo2">
                    <label for="todo2"><span></span>check the postings</label>
                </div>
                <div class="notification">
                    <i class="ion-ios-bell-outline"></i>
                </div>
            </li>
            <li class="list-group-item">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-complete" id="todo3">
                    <label for="todo3"><span></span>Recharge the Battery</label>
                </div>
            </li>
            <li class="list-group-item">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-complete" id="todo4">
                    <label for="todo4"><span></span>Jog for 30 minutes</label>
                </div>
            </li>
            <li class="list-group-item">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-complete" id="todo5">
                    <label for="todo5"><span></span>Check for updates</label>
                </div>
                <div class="notification">
                    <i class="ion-ios-bell-outline"></i>
                </div>
            </li>
            <li class="list-group-item">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-complete" id="todo6">
                    <label for="todo6"><span></span>call for tim</label>
                </div>
            </li>
            <li class="list-group-item">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-complete" id="todo7">
                    <label for="todo7"><span></span>Fix bugs</label>
                </div>
            </li>
            <li class="list-group-item">
                <div class="ms-hover">
                    <input type="checkbox" class="mark-complete" id="todo8">
                    <label for="todo8"><span></span>Send mail</label>
                </div>
            </li>
            <li class="list-group-item add-to-input">
                <input type="text" class="form-control" name="add_todo" id="add_todo" placeholder="Add new task here...">
            </li>
        </ul>
    </div>
    <!-- panel -->
</div>
<!-- col-md-6 -->

<div class="col-md-4 col-sm-6 col-xs-12 nopad-right">
    <div class="piluku-panel no-pad panel">
        <div class="piluku-music-player">
            <div class="track-info">
                <a href="#"><i class="fa fa-volume-up"></i></a>
                <a href="#"><i class="fa fa-music pull-right"></i></a>
                <h3>FAST &amp; FURIOUS</h3>
                <p class="text-center">WE OWN IT</p>
                <div class="track-time">
                    <p class="start-time">2:18</p>
                    <p class="end-time pull-right">4:16</p>
                </div>
            </div>
            <div class="seek-bar">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    </div>
                </div>
            </div>
            <div class="audio-controls">
                <div class="control-buttons">
                    <ul>
                        <li><a href="#"><i class="ion ion-ios-rewind-outline"></i></a>
                        </li>
                        <li><a href="#"><i class="ion-ios-refresh-empty"></i></a>
                        </li>
                        <li><a href="#"><i class="ion ion-ios-play"></i></a>
                        </li>
                        <li><a href="#"><i class="ion-stop"></i></a>
                        </li>
                        <li><a href="#"><i class="ion ion-ios-fastforward-outline"></i></a>
                        </li>
                    </ul>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge bg-danger">2:60</span>
                        Far from the sea
                    </li>
                    <li class="list-group-item">
                        <span class="badge bg-danger">3:12</span>
                        Let it be
                    </li>
                    <li class="list-group-item">
                        <span class="badge bg-danger">6:42</span>
                        See the shining lights
                    </li>
                    <li class="list-group-item">
                        <span class="badge bg-danger">1:00</span>
                        Act like you know
                    </li>
                    <li class="list-group-item">
                        <span class="badge bg-danger">2:06</span>
                        Happy angels dont be rude
                    </li>

                </ul>
            </div>
        </div>
        <!-- end of music player -->
    </div>
    <!-- panel -->
</div>
<!-- col-md-6 -->				

</div>
<!-- row -->
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
<script src='assets/js/chartist.min.js'></script>
<script src='assets/js/CustomChart.js'></script>
<script src='assets/js/build/d3.min.js'></script>
<script src='assets/js/nvd3/nv.d3.js'></script>
<script src='assets/js/sparkline.js'></script>
<script src='assets/js/bic_calendar.js'></script>
<script src='assets/js/widgets.js'></script>
<script src='assets/js/core.js'></script>

<script src="assets/js/jquery.countTo.js"></script>
</body>
</html>