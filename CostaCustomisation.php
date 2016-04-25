<?php
 
//let's start the session
session_start();
    
//finally, let's store our posted values in the session variables
 if ( isset($_POST['drink'])) {
$_SESSION['drink'] = $_POST['drink'];
 }
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
    <title>Thirsty?</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Thirsty? Pre-order hot drinks from your favourite coffee shops and skip those queues!">

        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->
        <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'> <!-- Main Title Font -->

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
		<link rel="stylesheet" href="css/customisation.css">
        

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
                      <img href="index.html" src="img/logo.png" class="navbar-brand page-scroll">
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index2.html">Home</a></li>
                            <li><a href="StarbucksDrinksmenu.html">Starbucks</a></li>
                            <li><a href="CostaDrinksmenu.html">Costa</a></li>
                            <li><a href="NeroDrinksmenu.html">Caffe Nero</a></li>
                            <li><a href="help.html">Help</a></li>    
   
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
								<h1 class="maintitle">Customise <br />
                                    Your Drink</h1>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="#services-section" role="button">Get Started!</a>
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
                            <h2>Drinks Customisation</h2>
                            <div class="divider"></div>
                            <p class="subtitle">Select your options from the lists below</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
            
       <form id="myform" method="post" action="Ordering.php" name="myemailform" id="myform">
        
            
            <!-- Begin rotate box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        
                        <h3>Select your Cup Size:</h3>
                        
                <!-- ROW 1 -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img class="short" src="img/customisation/cup1.png"> 
                                    <div class="rotate-box-info">
                                        <input type="radio" name="size" value="Short"  id="button1" name="size" /> 
                                    <label for="img1">Short </label>
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img class="tall" src="img/customisation/cup2.png">
                                    <div class="rotate-box-info">
                                        <input type="radio" name="size" value="Tall" id="button2" name="size">
            <label for="img2">Primo </label>
                                    
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img class="grande" src="img/customisation/cup3.png">
                                    <div class="rotate-box-info">
                                         <input type="radio" name="size" value="Grande" id="button3" name="size">
            <label for="img3">Medio </label>
                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                   <img class="grande" src="img/customisation/cup4.png">
                                    <div class="rotate-box-info">
                                         <input type="radio" name="size" value="Venti" id="button4" name="size">
            <label for="img3">Assimo </label>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

            
            
           <h3>Select your Milk:</h3>
                        
                <!-- ROW 1 -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                     <img src="img/customisation/red.png" >
                                    <div class="rotate-box-info">
                                         <input type="radio" value="Skimmed Milk" name="milk" id="button1">
                                        <label class="milk">Skimmed </label>
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/customisation/blue.png" >
                                    <div class="rotate-box-info">
                                         <input type="radio" value="Whole Milk" name="milk" id="button3">
                                        <label class="milk">Full Fat </label>
                                    
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/customisation/coconut.png" >
                                    <div class="rotate-box-info">
                                         <input type="radio" value="Soya Milk" name="milk" id="button5">
                                        <label class="milk">Soya </label>
                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                   <img src="img/customisation/nomilk.png">
                                    <div class="rotate-box-info">
                                          <input type="radio" value="None" name="milk" id="button5">
                                        <label class="milk">None</label> 
                                        
                                    </div>
                                </a>
                            </div>
                            </div>
            <br />
            <br />    
        
            <h3> Select your syrup:</h3>
        
            <br />
            
        <select id="syrup" name="syrup">
                                <optgroup label="Syrup">
								
                                    <option value="Vanilla Syrup" name="syrup" id="button1">Vanilla Syrup</option>
                                    <option value="Hazelnut Syrup" name="syrup" id="button2">Hazelnut Syrup</option>
                                    <option value="Gingerbread Syrup" name="syrup" id="button3">Gingerbread Syrup</option>
                                    <option value="Caramel Syrup" name="syrup" id="button1">Caramel Syrup</option>
                                    <option value="Cinnamon Syrup" name="syrup" id="button4">Cinnamon Syrup</option>
                                    <option value="Salted Caramel Syrup" name="syrup" id="button5">Salted Caramel Syrup</option>
                                    <option value="Tiramisu Syrup" name="syrup" id="button5">Tiramisu Syrup</option>
                                    <option value="None" name="syrup" id="button8">No Syrup</option>
                
    
							</select>
            
            <br />
            <br />
            
      <button class="orderbutton" type="Submit" value="Submit" name="Submit" id="Submit" onclick="location.href='Ordering.php'" style="margin-top:40px; margin-bottom:40px;">Order NOW</button>          
     </form> 
                
                
                
            </section>
            <!-- End Services -->
              
            </form>    
              
          
                

                
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
