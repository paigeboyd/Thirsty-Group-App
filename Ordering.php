<?php
 
//let's start the session
session_start();
 
//finally, let's store our posted values in the session variables
 if ( isset($_POST['Submit'])) {
$_SESSION['size'] = $_POST['size'];
$_SESSION['milk'] = $_POST['milk'];
$_SESSION['syrup'] = $_POST['syrup'];
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
								<h1 class="maintitle">Ordering <br />
                                    Form</h1>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="#services-section" role="button">Enter Details</a>
							</div>
							
					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
            
            <!-- Begin Services -->
            <form method="post" action="php/form-to-email.php" name="myemailform" id="myform">
            
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <fieldset id="DrinkSummary">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <br /> <!-- this just adds a bit of breathing space -->
                            <h2>Ordering Form</h2>
                            <div class="divider"></div>
                            <p class="subtitle">Please enter your details in the form below</p>
                        </div>
                        </fieldset>
                    </div>
                </div>
                <!-- End page header-->
            
                            
                
				<fieldset id="contactdetails" class="text-center wow zoomIn">
                   
					<h3>Personal Details</h3>
                   <br />
                    
					<label for="FirstName" class="labelpadding">First Name: </label> <input type="text" name="FirstName" id="FirstName" placeholder="First Name" required> * <br />
                    <br />
					<label for="LastName" class="labelpadding">Last Name: </label> <input type="text" name="LastName" id="LastName" placeholder="Last Name" required> * <br />
                    <br />
					<label for="EmailAdd">Email Address: </label> <input type="email" name="EmailAddress" id="EmailAdd" placeholder="Email Address" required> *<br />
					
</fieldset>
                <br />
                <br />
                
				
				 <fieldset id="Details" class="text-center wow zoomIn">
                     
					<h3>Time and Place</h3>
                  <br />
                     
                     <iframe width='70%' height='300px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/linzi-mccord.p684g0ag/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibGluemktbWNjb3JkIiwiYSI6ImNpajJrdnJ0ZzAwMDV3N20yM21kbGhzZG4ifQ.aeIqEnGE1khM-hb2frxczw'></iframe>
                     <br />
                     <br />

					<label for="Time" class="labelpadding">Pick Up Time:</label> 
					    <select id="TimeSlot" name="timeslot">
								<optgroup label="Morning">
								<option value="8:00">8:00</option>
<option value="8:15">8:15</option>
<option value="8:30">8:30</option>
<option value="8:45">8:45</option>
<option value="9:00">9:00</option>               <option value="9:15">9:15</option>
<option value="9:30">9:30</option>
<option value="9:45">9:45</option>
<option value="10:00">10:00</option>
<option value="10:15">10:15</option>
<option value="10:30">10:30</option>
<option value="10:45">10:45</option>
<option value="11:00">11:00</option>			<option value="11:15">11:15</option>
<option value="11:30">11:30</option>
<option value="11:45">11:45</option>
<option value="12:00" selected="selected" >12:00</option>	
                            
                            <optgroup label="Afternoon">
<option value="12:15">12:15</option>
<option value="12:30">12:30</option>
<option value="12:45">12:45</option>
<option value="13:00">13:00</option>              <option value="13:15">13:15</option>
<option value="13:30">13:30</option>
<option value="13:45">13:45</option>
<option value="14:00">14:00</option>
<option value="14:15">14:15</option>
<option value="14:30">14:30</option>
<option value="14:45">14:45</option>
<option value="15:00">15:00</option>			<option value="15:15">15:15</option>
<option value="15:30">15:30</option>
<option value="15:45">15:45</option>
<option value="16:00">16:00</option>
<option value="16:15">16:15</option>
<option value="16:30">16:30</option>
<option value="16:45">16:45</option>
<option value="17:00">17:00</option>           	<option value="17:15">17:15</option>
<option value="17:30">17:30</option>
<option value="17:45">17:45</option>
<option value="18:00">18:00</option> 							
                            <optgroup label="Evening">
<option value="18:15">18:15</option>
<option value="18:30">18:30</option>
<option value="18:45">18:45</option>
<option value="19:00">19:00</option>			<option value="19:15">19:15</option>
<option value="19:30">19:30</option>
<option value="19:45">19:45</option>
<option value="20:00">20:00</option>
<option value="20:15">20:15</option>
<option value="20:30">20:30</option>
<option value="20:45">20:45</option>
<option value="21:00">21:00</option>           						
</select><br /><br />
						

<label for="location" class="labelpadding">Location:</label> 
					        <select id="CafeLocation" name="CafeLocation">
                                <optgroup label="Belfast">
								
                                    <option value="90 Lisburn Road">90 Lisburn Road</option>
                                    <option value="2 Castle Lane">2 Castle Lane</option>
                                    <option value="90 Botanic Avenue">90 Botanic Avenue</option>
                                    <option value="Victoria Square Shopping Centre">Victoria Square Shopping Centre </option>
                                    <option value="Castlecourt Shopping Centre Mall">Castlecourt Shopping Centre Mall</option>
    
							</select>
                     <br />	
				</fieldset>
                <br />
                <br />


				<fieldset type="text" id="additionalcomments" class="text-center wow zoomIn">
                    
					<h3>Additional Comments</h3>
                <br />
                    <br />
                    
						<textarea cols="60" rows="4" placeholder="Enter Comment" id="additionalcomments" name="additionalcomments"> </textarea>
                    <br /><br />
						
						No Comment? <input type="checkbox">
							
				</fieldset>
        
                <p> * Marked as Required Fields </p>
				<br />
                <br />
                
<div id="bottombuttons" class="text-center wow fadeInUp">
    <button class="orderbutton" type="Submit" value="Submit" name="Submit" id="Submit">Submit</button>
    <button class="orderbutton" type="reset" value="Clear">Reset</button>
    <button class="orderbutton" type="button" value="back" onclick="window.history.back();">Back</button>
        </div><!--Closes bottom buttons div -->
        
        
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