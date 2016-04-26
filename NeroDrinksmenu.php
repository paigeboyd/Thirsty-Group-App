<!DOCTYPE html>
<?php
  session_start();
    if (!isset($_SESSION['username'])){ //redirects to main page
    header("location: login.html");
    }
?>
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
        
        <!-- JS for localstorage -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("search-nero").innerHTML="";
    document.getElementById("search-nero").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("search-nero").innerHTML=xmlhttp.responseText;
      document.getElementById("search-nero").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search-nero.php?q="+str,true);
  xmlhttp.send();
}
</script>
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
								<h1 class="maintitle">Caffe Nero <br />
                                    Menu</h1>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="#services-section" role="button">Select a Beverage!</a>
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
                            <h2>Drinks Menu</h2>
                            <div class="divider"></div>
                            <p class="subtitle">Select a drink from the menu below or search here:</p> <form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="search-nero"></div>
</form>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <form method="post" action="NeroCustomisation.php" name="myemailform" id="myform">
                
                <!-- Begin rotate box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        
                        <h3>Coffee</h3>
                        
                <!-- ROW 1 --><div id="espresso"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/neromenu/espresso.jpg" alt="Espresso" title="Espresso" style="  height: 150px; ">      
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton1" value="Espresso" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'" > Espresso </button>

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/neromenu/espristretto.jpg" alt="Espresso Ristretto" title="Espresso Ristretto" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                      <button class="orderbutton" id="mybutton2" value="Espresso Ristretto" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Espresso Ristretto</button> 
 
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                   <img src="img/neromenu/espmacchiato.jpg" alt="Espresso Macchiato" title="Espresso Macchiato" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton3" value="Espresso Macchiato" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Espresso Macchiato</button>  

                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/neromenu/espconpanna.jpg" alt="Espresso Con Panna" title="Espresso Con Panna" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton4" value="Espresso Con Panna" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Espresso Con Panna </button>  
 
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    <!-- ROW 2 -->     <div id="cappuccino"></div> 
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/neromenu/cappuccino.jpg" alt="Cappuccino" title="Cappuccino" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton5" value="Cappuccino" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Cappuccino </button>    
                                    
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/neromenu/caffelatte.jpg" alt="Cafe Latte" title="Cafe Latte" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton8" value="Cafe Latte" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Cafe Latte</button>  
  
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/neromenu/americano.jpg" alt="Americano" title="Americano" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton8" value="Americano" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'">Americano</button>   
  
                                    </div>
                                </span>
                            </div>
                            
                        </div> <!-- closes /.row -->
                        
                        
                        <h3>Hot Drinks</h3>
                        
                        <!-- ROW 1 --> <div id="hot-chocolate"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/neromenu/hotchoc.jpg" alt="Hot Chocolate" title="Hot Chocolate" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton11" value="Hot Chocolate" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Hot Chocolate    </button>  

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/neromenu/caramellatte.jpg" alt="Caramel Latte" title="Caramel Latte" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton12" value="Caramel Latte" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Caramel Latte</button>                  
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                   <img src="img/costamenu/latte.jpeg" alt="Hot Chocolate Milano" title="Hot Chocolate Milano" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton13" value="Hot Chocolate Milano" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'">Hot Chocolate Milano </button>  
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                       <img src="img/costamenu/americano.jpeg" alt="Americano" title="Americano" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton14" value="White Chocolate Mocha" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> White Chocolate Mocha   </button>  

                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    <!-- ROW 2 -->  <div id="caffe-mocha"></div>  
                    <!-- ROW 2 -->  <div id="caffe-mocha"></div>  
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                   <img src="img/neromenu/caffemocha.jpg" alt="Caffe Mocha" title="Caffe Mocha" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton15" value="Caffe Mocha" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Caffe Mocha </button>  

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/neromenu/chailatte.jpg" alt="Chai Latte" title="Chai Latte" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton16" value="Chai Latte" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Chai Latte   </button>  

                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/neromenu/tea.jpg" alt="Tea" title="Tea" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton16" value="Tea" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Tea  </button>  

                                    </div>
                                </span>
                            </div>
            
                        </div> <!-- /.row -->
                       
                        
                         <h3>Cold Drinks</h3>
                        
                        <!-- ROW 1 --> <div id="coffee-creme-frappe"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/neromenu/frappe.png" alt="Coffee Creme Frappe" title="Coffee Creme Frappe" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton21" value="Coffee Creme Frappe" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'">Coffee Creme Frappe</button>  

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                <img src="img/neromenu/caramelcremefrappe.jpg" alt="Caramel Creme Frappe" title="Caramel Creme Frappe" style="  height: 150px; ">


                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton22" value="Caramel Creme Frappe" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Caramel Creme Frappe   </button>  

                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/neromenu/coconutchocfrappe.jpg" alt="Chocolate &amp; Coconut Creme Frappe" title="Chocolate &amp; Coconut Creme Frappe" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton23" value="Chocolate &amp; Coconut Creme Frappe" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'">Coconut Creme Frappe</button>  
                    
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                   <img src="img/neromenu/bananacaramelcremefrappe.JPG" alt="Banana &amp; Caramel Frappe" title="Banana &amp; Caramel Frappe" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton24" value="Banana &amp; Caramel Frappe" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Banana &amp; Caramel Frappe   </button> 
 
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                        <!-- ROW 2 --> <div id="mocha-frappe-latte"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/neromenu/mochafrappelatte.jpg" alt="Mocha Frappe Latte" title="Mocha Frappe Latte" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton24" value="Mocha Frappe Latte" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Mocha Frappe Latte </button>   

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                <img src="img/neromenu/caramelfrappelatte.png" alt="Caramel Frappe Latte" title="Caramel Frappe Latte" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                      <button class="orderbutton" id="mybutton24" value="Caramel Frappe Latte" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'"> Caramel Frappe Latte </button> 

                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/neromenu/icedlatte.jpg" alt="Iced Latte" title="Iced Latte" style="  height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton24" value="Iced Latte" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'">  Iced Latte </button> 
                    
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                   <img src="img/neromenu/icedcoffee.jpeg" alt="Iced Coffee" title="Iced Coffee" style="  height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton24" value="Iced Coffee" name="drink" type="Submit" onclick="location.href='NeroCustomisation.php'">  Iced Coffee </button>  
 
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    
                        
                    
                    
                    </div> <!-- /.container -->
                                          
                </div>
                <!-- End rotate-box-2 -->
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
9