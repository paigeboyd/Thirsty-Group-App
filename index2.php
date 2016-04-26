<!DOCTYPE html>
<html lang="en-US">
	<head>
    <title>Thirsty?</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Thirsty? Pre-order hot drinks from your favourite coffee shops and skip those queues!">

        
        <!-- Google Fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->
        <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'> <!-- Main Title Font -->

		<!-- CSS Plugins -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css"> 
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons --> 
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css"> 

		<!-- CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">
		<link rel="stylesheet" href="css/skin/cool-gray.css">
        

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
    	<div class="body">
        
            <header id="header" class="header-main">

                <!-- Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">

                  <div class="container">

                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <img href="index2.php" src="img/logo.png" class="navbar-brand page-scroll">
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index2.php">Home</a></li>
                            <li><a href="StarbucksDrinksmenu.php">Starbucks</a></li>
                            <li><a href="CostaDrinksmenu.php">Costa</a></li>
                            <li><a href="NeroDrinksmenu.php">Caffe Nero</a></li>
                            <li><a href="help.html">Help</a></li>    
                        <li><a href="php/logout.php">Logout</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            
                
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax"  style="background-image: url(img/hero.jpg)">
				
				<div class="container">
					<div class="caption text-center text-white" >

							<div class="item">
                                
                                <?php
    session_start();
     if (!isset($_SESSION['username'])){ //redirects to main page
    header("location: login.html");
    }
    else{
    echo "Welcome, You have now logged in<br />";
    echo $_SESSION['username'] . "<br /><br />"; 
    }
    ?>
								<h1 class="maintitle">Thirsty?</h1>
								<p>Pre-order your coffee and beat the queues!</p>
                                
                                <div class="extra-space-l">
                          </div>
								<a class="btn btn-blank" href="#services-section" role="button">Select a Coffee Shop!</a>
							</div>
							
					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
            
            <!-- Begin Services -->
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <br /> <!-- this just adds a bit of breathing space -->
                            <h2>Coffee Shops</h2>
                            <div class="divider"></div>
                            <p class="subtitle">Select your favourite Coffee Shop to get started!</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <!-- Begin rotate box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="StarbucksDrinksmenu.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sblogo.png" style="height:150px;">
                                    <div class="rotate-box-info">
                                        <h4>Starbucks</h4>
                                        
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <a href="CostaDrinksmenu.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/costalogo.png" style="height:150px;">
                                    <div class="rotate-box-info">
                                        <h4>Costa</h4>
                                        
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <a href="NeroDrinksmenu.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/neromenu/nerologo.jpg" style="height:150px;">
                                    <div class="rotate-box-info">
                                        <h4>Caffe Nero</h4>
                                        
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/logo.png" style="height:150px;">
                                    <div class="rotate-box-info">
                                        <h4>Coming Soon!</h4>
                                        
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                                          
                </div>
                <!-- End rotate-box-2 -->
            </section>
            <!-- End Services -->
              
              
              
          
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2016 - Thirsty App</p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
      
 <!-- keep these at the bottom - plugins used for all animations/scrolling/interactions -->        
       <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>
        <script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script> <!-- triggers function when scroll to it -->

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body> 
        
            
</html>
?>