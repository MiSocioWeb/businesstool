<?php 
    session_start();
    if($_REQUEST['action']=='logout'){
        $_SESSION['idUSER']='';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BT | MSW </title>
        
        <link rel="icon" type="image/png" href="logo500.png" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

        <link href="assets/css/magnific-popup.css" rel="stylesheet">

        <link href="assets/css/style.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
                    <h4 class="modal-title" id="myModalLabel1">PLEASE SIGN IN</h4>
                </div>
                <div class="modal-body">
                    <br/>
                    <p>Please Write your code or CI information </p>
                    <input type="" name="" id="loginInput" class="form-control" placeholder="Please write your code.." style="text-align: center;" onkeyup="if(event.keyCode==13)loginData();" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="loginData();">Sign In</button>
                </div>
            </div>
        </div>
    </div>


        <div class="main">
            <header class="bg-img header">
                <nav class="navbar navbar-default navbar-vira">
                    <div class="container">
                        
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="intro-box">
                            <div class="intro">
                                <h1>MI SOCIO WEB </h1>
                                <p>BUSINESS TOOL </p>
                                <a class="btn vira-btn" href="javascript:loginProcess();">INICIAR SESIÓN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section id="about" class="about section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="title">About BT - MSW</h2>
                            <p>
                                Mi Socio Web <i> Business Tool</i> is a software designed with the purpose of controlling the tasks of all start ups in medium and large scale, such as billing control of customer monitors tasks. BT by Mi Socio Web is born under the necessity of organizing all the commercial activity of online businesses, it is free and easy to use
                            </p>
                            <img src="assets/images/signature.png">
                            <span>Josue Navarrete - CEO</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="purpose section">
                <div class="container">
                    <h2 class="title">What we do</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <div class="card-icon">
                                        <span class="fa fa-diamond" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="vira-card-content">
                                    <h3>CLIENT SIDE</h3>
                                    <p>
                                        On the client side, the user can view their billing information, site visits and job creation for technical support
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <div class="card-icon">
                                        <span class="fa fa-cogs" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Start Up Side </h3>
                                    <p>
                                        Powerful tool for task control, sending alert to clients, information about each account and control algorithm
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <div class="card-icon">
                                        <span class="fa fa-bicycle" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="vira-card-content">
                                    <h3>AI Algorithm</h3>
                                    <p>
                                        Artificial intelligence in client control modules and statistical analysis based on algorithmic models
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="expertise" class="expert">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 bg-img">
                            <div></div>
                        </div>
                        <div class="col-sm-5 section">
                            <h2 class="title">Activity Control </h2>
                            <div id="expert-slider" class="owl-carousel">
                                <div class="item">
                                    <p>
                                        Do not worry about the scattered information of your internet company, through BT by My Socio Web you will have in one place your information with correct statistics and powerful tools
                                    </p>
                                </div>
                                <div class="item">
                                    <p>
                                       
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="vira-quote section bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <img class="quote" src="assets/images/quote.png">
                           <p>
                               Organize tasks, create an agile development model for your company and your customers
                           </p>
                           <p class="author">Mi Socio Web - Business Tool -Pull 3</p>
                           <img src="assets/images/mouse.png">
                        </div>
                    </div>
                </div>
            </section>
            <section id="workstation" class="work section">
                <div class="container">
                    <h2 class="title">OUR CLIENTS</h2>
                    <div id="workstation-slider" class="owl-carousel">
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="assets/images/4.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>LA HORA</h3>
                                    <p>
                                       Diario La Hora is an Ecuadorian media that has a national presence focused on 11 provinces. We are a newspaper company with local regional newspapers. Each one of the editions of the Hour is focused to cover the needs of the readers of its respective community, without leaving aside the information of the country and the world. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="assets/images/5.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>BRIONES EC</h3>
                                    <p>
                                        We are the leading company in Outdoor Advertising in Latin America. We have highly trained staff, extensive facilities and state-of-the-art technology to meet your needs in Visual Communication, Corporate Image and Road Signaling.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="assets/images/6.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>ECUADOR CITAS MÉDICAS</h3>
                                    <p>
                                       We are a facilitator, for anyone who requires a medical appointment, with any doctor who is within our network.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="assets/images/4.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>COLEGIO DE BIOLOGOS GUAYAS</h3>
                                    <p>
                                    It is a guild that contributes to the strengthening and integration of biologists, seeking the benefit of the professional interests of our members and promotes the development, updating of knowledge in the different fields of biological sciences.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="assets/images/5.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>ECOSOLUCIONESS</h3>
                                    <p>
                                        Ecosoluciones is an Ecuadorian company dedicated to the
Environmental Management in the field of Consultancy and Advising on Environmental Issues
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="assets/images/6.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>CULTURE ABROAD </h3>
                                    <p>
                                       We focus on increasing knowledge and interest in the culture of the Galapagos, the Amazon, the Andes and the Pacific coast of Ecuador 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="watch bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <span>Watch showreel</span>
                            <a class="popup-youtube btn" href="https://www.youtube.com/watch?v=4KRHIbsl8BE"><span class="fa fa-play"></span></a>
                            <span>with us</span>
                        </div>
                    </div>
                </div>
            </section>
            <section id="team" class="team section">
                <div class="container">
                    <h2 class="title">Our team members</h2>
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="vira-card" >
                                <div class="vira-card-header" align="center" >
                                    <img class="img-responsive" src="partner1.png">
                                </div>
                                <div class="vira-card-content" >
                                    <h3>Josue Navarrete</h3>
                                    <p>
                                        Web Developer and Partner of Mi Socio Web
                                    </p>
                                    <div class="social-icons">
                                        <ul>
                                            <a href="#"><li><span class="ion-social-facebook"></span></li></a>
                                            <a href="#"><li><span class="ion-social-twitter"></span></li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="vira-card" >
                                <div class="vira-card-header" align="center">
                                    <img class="img-responsive" src="partner2.png">
                                </div>
                                <div class="vira-card-content">
                                    <h3>Carlos Gracia</h3>
                                    <p>
                                        Project Manager and Partner of Mi Socio Web
                                    </p>
                                    <div class="social-icons">
                                        <ul>
                                            <a href="#"><li><span class="ion-social-facebook"></span></li></a>
                                            <a href="#"><li><span class="ion-social-twitter"></span></li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="subscribe section bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>GET YOUR DEMO</p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="user-email" placeholder="Write your email here....">
                                </div>
                                <button type="submit" class="btn vira-btn">REQUEST DEMO </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="contact section">
                <div class="container">
                    <h2 class="title">Drop us a line</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-map-o" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Address</h3>
                                    <p>
                                        Patria Y 10 De Agosto, Piso 7 oficina 703-B Edificio Banco De Préstamos
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-phone" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Phone</h3>
                                    <p>
                                        +593 988 186 614
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-paper-plane" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Email</h3>
                                    <p>
                                        josue@misocioweb.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="social-icons">
                                <ul>
                                    <a href="#"><li><span class="ion-social-facebook"></span></li></a>
                                    <a href="#"><li><span class="ion-social-twitter"></span></li></a>
                                    <a href="#"><li><span class="ion-social-pinterest"></span></li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p> By <span class="fa fa-heart"></span> by <a href="http://misocioweb.com/">Mi Socio Web </a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="assets/js/jquery-3.1.1.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="https://use.fontawesome.com/55b73bf748.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>

<script type="text/javascript">
function loginProcess(){

    $("#largemodal").modal();
}

function loginData(){
    loginInput= $("#loginInput").val();
    $.post("dashboard/ajax/login.php",{loginInput:loginInput}).done(function(data){
        if(data=='true'){
            window.top.location='dashboard/';
        }else{
            alert("Error With Credentials");
        }
    });
}
</script>