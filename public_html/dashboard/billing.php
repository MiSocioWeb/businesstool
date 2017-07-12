<?php
	session_start();
	$companyID=$_REQUEST['company_id'];
	include "db.php";
	$idCompany=$_REQUEST['idCompany'];
	$queryCompany=mysql_query("SELECT * FROM company_clients_info WHERE id=$idCompany") or die(mysql_error());
	$fetchCompany=mysql_fetch_array($queryCompany);
	$nombre=$fetchCompany['nombre'];
	$ruc=$fetchCompany['ruc'];
	$fecha_contrato=$fetchCompany['fecha_contrato'];
	$direccion=$fetchCompany['direccion'];
	$descripcion=$fetchCompany['descripcion'];
	$pagina=$fetchCompany['pagina'];
	$representante=$fetchCompany['representante'];
	$logo=$fetchCompany['logo'];

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
	
	<div class="top-bar">
	
		<?php include "header.php"; ?>


</div>
<!-- /top-bar -->
	
	<div class="main-content">
  <div class="panel-body" style="background-color: white;">
						<!--                               compamy title-->
						<div class="invoice">invoice</div>
						<div class="company-title">
							<?php echo $nombre; ?>
							<div class="company-addess">
								<?php echo $ruc . "<br>" . $representante;  ?>
								<!-- <br> A.V.A. Road, Rajahmundry, India - 533103-->
							</div>
						</div>
						<!--                                /company title                -->
						<!--                                col md 3-->
						<div class="col-md-3">
							<!--                        *** client address ***-->
							<div class="client-address">
								<div class="client-heading">
									client address
								</div>
								<?php echo $nombre; ?>
								<br> <?php echo $direccion; ?>
								<br> Gandhi Puram - 1,
								<br> Visakapatnam, India - 540260
							</div>
							<!--                        *** /client address ***-->
							<!--                        *** invoice details ***-->
							<div class="invoice-details">
								<span>invoice no:</span>#5390846503
								<br>
								<span>Invoice Date:</span>31-03-2015
							</div>
							<!--                        *** /invoice details ***-->
						</div>
						<!--                      /col md 3          -->
						<!--                                col md 3-->
						<div class="col-md-3 col-md-offset-6">
							<!--                        *** payment details ***-->
							<div class="client-address bottom-pad">
								<div class="client-heading">
									payment details
								</div>
							</div>
							<div class="invoice-details">
								<span>V.A.T Reg #:</span> 598713569
								<br>
								<span>Account Name:</span> Company Ltd
								<br>
								<span>SWIFT code:</span> HDFC0000590
								<br>
								<span>Date</span>20-03-2015
								<br>
								<span>due</span>31-03-2015
							</div>
							<!--                        *** /payment details ***-->
						</div>
						<!--                      /col md 3          -->
						<!--                        *** Products Table ***-->
						<!--                                col md 12-->
						<div class="col-md-12">
							<!--                                   table responsive-->
							<div class="table-responsive">
								<table class="table invoice-table">
									<thead>
										<tr>
											<th>#</th>
											<th>item</th>
											<th>description</th>
											<th>unit price</th>
											<th>quantity</th>
											<th>total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Sony Xperia Z3</td>
											<td>Do more than you thought possible</td>
											<td>$ 995.00</td>
											<td>1</td>
											<td>$ 995.00</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Sony Smartwatch 3</td>
											<td>Powered by Android Wear</td>
											<td>$ 250.00</td>
											<td>2</td>
											<td>$ 500.00</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Sandisk 32gb MicroSD</td>
											<td>32gb MicroSD wirh class10 Highly Poweful</td>
											<td>$ 55.00</td>
											<td>1</td>
											<td>$ 55.00</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Sony Xperia Z2</td>
											<td>True digital camera quality in a waterproof</td>
											<td>$ 995.00</td>
											<td>1</td>
											<td>$ 995.00</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Sony Smartwatch 2</td>
											<td>Made for Android</td>
											<td>$ 250.00</td>
											<td>2</td>
											<td>$ 500.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!--                                    /table responsive-->
						</div>
						<!--                                /col md 12-->
						<!--                        *** /Products Table ***-->
						<!--                        *** /Invoice Note ***-->
						<!--                                col md 6-->
						<div class="col-md-6">
							<div class="client-address">
								<div class="client-heading">
									invoice note:
								</div>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam at lacus et scelerisque. Sed feugiat semper ullamcorper. Cras in magna ligula. Nulla dolor ex, ultricies in faucibus at, iaculis fermentum dui. Cras finibus ornare porttitor.
							</div>
							<a href="#" class="btn btn-primary btn-icon-primary btn-icon-block btn-icon-blockleft invoice-btn">
								<i class="ion ion-printer"></i>
								<span>Print</span>
							</a>
							<a href="#" class="btn btn-green btn-icon-green btn-icon-block btn-icon-blockleft invoice-btn">
								<i class="ion ion-email"></i>
								<span>Email</span>
							</a>
						</div>
						<!--                                /col md 6-->
						<!--                        *** /Invoice Note ***-->
						<!--                        *** /total payment ***-->
						<!--                                col md 3-->
						<div class="col-md-2 col-md-offset-2 col-sm-4 col-xs-6">
							<ul class="list-unstyled">
								<li class="total-payment">
									Sub Total:
								</li>
								<li class="total-payment">
									shipping fee:
								</li>
								<li class="total-payment">
									VAT Tax (12%):
								</li>
								<li class="total-payment total-primary">
									Grand Total:
								</li>
							</ul>
						</div>
						<!--                                /col md 3-->
						<!--                                col md 3-->
						<div class="col-md-2 col-sm-4 col-xs-6">
							<ul class="list-unstyled">
								<li class="payment-value">
									$ 3,045
								</li>
								<li class="payment-value">
									$ 0.00
								</li>
								<li class="payment-value">
									$ 365.40
								</li>
								<li class="payment-value total-primary">
									$ 3410.40
								</li>
							</ul>
						</div>
						<!--                                /col md 3-->
						<!--                        *** /total payment ***-->
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