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
			<div class="col-md-12 col-sm-12 col-xs-12 nopad-right">
				<div class="piluku-panel no-pad todo_widget panel">						
					<div class="todo_heading">
						<div class="left-icon">
							<div class="ms-hover">
								<input type="checkbox" class="mark-all" id="todo">
								<label for="todo"><span></span></label>
							</div>
						</div> 
						Add Tasks Dynamically 
						<a href="#" class="right-icon">
							<i class="ion-ios-bell"></i>
						</a>
					</div>			
					<ul class="list-group list-todo" id="">								
					<li  class="list-group-item">
							<div class="input-group demo-group">
									<input type="text" class="form-control" name="add_todo" id="add_todo" onkeydown="if(event.keyCode==13)crearTask();" placeholder="Add new task here..." >
									<div class="input-group-btn">
										<button type="button" class="btn btn-success btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="nameCurrentAgent"><?php echo $_SESSION['nameUser']; ?> <span class="caret"></span></button>
										<ul class="dropdown-menu pull-right" id="putAgents">
											
										</ul>
									</div><!-- /btn-group -->
								</div>

						</li>
					</ul>			
					<ul class="list-group list-todo" id="putTask">

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
						<li class="list-group-item"><div class="ms-hover"><input type="checkbox" class="mark-complete" id="todo9"><label for="todo9"><span></span>avd</label></div></li><li class="list-group-item add-to-input">
							<!--<input type="text" class="form-control" name="add_todo" id="add_todo" placeholder="Add new task here...">-->
						</li>
						
					</ul>
					

				</div>
				<!-- panel -->
			</div>
			<!-- col-md-6 -->
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

<script type="text/javascript">
	loadAgents();
	function loadAgents(){
		$.post("ajax/getAgents.php").done(function(data){

			$("#putAgents").html(data);
		});
	}
var currentAgentSelected='<?php echo $_SESSION[idUSER]; ?>';
	function putCurrent(idAgent){
		currentAgentSelected=idAgent;
		elem=$(".currentAgent[idDB='"+idAgent+"']");
		name=elem.attr("nameAgent");
		$("#nameCurrentAgent").html(name);
		console.log(idAgent);
	}

function crearTask(){
	tarea=$("#add_todo").val();
	$.post("ajax/createTask.php",{idUser:currentAgentSelected , task: tarea}).done(function(data){
		console.log("Created " + data);
		loadTasks();
	});
}

loadTasks();
function loadTasks(){
	$.post("ajax/readTask.php").done(function(data){
		$("#putTask").html(data);
		$("li[id='taskControl']").each(function(){
			classe=$(this).attr("idDB");
			numLi=$("li[id='taskControl'][idDB='"+classe+"']").length;

			if(numLi>1){
				$("li[id='taskControl'][idDB='"+classe+"']").each(function(index){
					if(index!=0){
						$(this).remove();		
					}
				});
				
			}
			console.log(numLi);
		});
	});
	
}

function markComplete(id){
	$.post("ajax/taskComplete.php",{ id :id}).done(function(){
		loadTasks();
	});
}
</script>