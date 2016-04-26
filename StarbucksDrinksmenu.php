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
    document.getElementById("search-starbucks").innerHTML="";
    document.getElementById("search-starbucks").style.border="0px";
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
      document.getElementById("search-starbucks").innerHTML=xmlhttp.responseText;
      document.getElementById("search-starbucks").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search-starbucks.php?q="+str,true);
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
								<h1 class="maintitle">Starbucks <br />
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
                            <p class="subtitle">Select a drink from the menu below or search here:</p>  <form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="search-starbucks"></div>
                        </div>
                      
</form>
                        
                    </div>
                </div>
                <!-- End page header-->
            
                <form method="post" action="StarbucksCustomisation.php" name="myemailform" id="myform">
                
                <!-- Begin rotate box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        
                        <h3>Specialty Teas</h3>
                        
                <!-- ROW 1 -->  <div id="english-breakfast-tea"></div>

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/englishbreakfasttea.jpg" alt="English Breakfast Tea" title="English Breakfast Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton1" value="English Breakfast Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'" > English Breakfast Tea </button>
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/chaitea.jpg" alt="Chai Tea" title="Chai Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton2" value="Chai Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Chai Tea</button>
                                    
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/sbmenu/chamomiletea.jpg" alt="Chamomile Tea" title="Chamomile Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton3" value="Chamomile Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Chamomile Tea</button>
                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/sbmenu/jasmine.jpg" alt="Jasmine Orange Tea" title="Jasmine Orange Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton4" value="Jasmine Orange Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Jasmine Orange Tea </button> 
                                        
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    <!-- ROW 2 -->    <div id="mint-blend-tea"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/mintblend.jpg" alt="Mint Blend Tea" title="Mint Blend Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton5" value="Mind Blend Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Mint Blend Tea </button>  
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/spearmintgreen.jpg" alt="Spearmint Green Tea" title="Spearmint Green Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton6" value="Spearmint Green Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Spearmint Green Tea   </button> 
                                    
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/sbmenu/chaitea.jpg" alt="Chai Tea Latte" title="Chai Tea Latte" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton7" value="Chai Tea Latte" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Chai Tea Latte    </button>
                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/sbmenu/earlgrey.jpg" alt="Earl Grey Brewed Tea" title="Earl Grey Brewed Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton8" value="Earl Grey Brewed Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Earl Grey Brewed Tea</button>
                                        
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                        
                         <!-- ROW 3 -->   <div id="hibiscus-blend-tea"></div>  
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/hibiscustea.jpg" alt="Hibiscus Blend Tea" title="Hibiscus Blend Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton9" value="Hibiscus Blend Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Hibiscus Blend Tea  </button>  
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/spearmintgreen.jpg" alt="Spearmint Green Tea" title="Spearmint Green Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton6" value="Spearmint Green Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Spearmint Green Tea   </button> 
                                    
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/sbmenu/chinagreen.jpg" alt="China Green Tips Tea" title="China Green Tips Tea" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton10" value="China Green Tips Tea" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> China Green Tips Tea   </button> 
                                        
                                    </div>
                                </span>
                            </div>
                            
                            
                        </div> <!-- /.row -->
                        
                        <h3>Espresso Drinks</h3>
                        
                        <!-- ROW 1 --> <div id="filter-coffee"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/filtercoffee.jpg" alt="Filter Coffee" title="Filter Coffee" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton11" value="Filter Coffee" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Filter Coffee    </button>
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/cafelatte.jpg" alt="Caffe Latte" title="Caffee Latte" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton12" value="Cafe Latte" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Caffe Latte</button>  
                                    
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/sbmenu/mocha.jpg" alt="Mocha" title="Mocha" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton13" value="Mocha" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Mocha </button>
                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/sbmenu/macchiato.jpg" alt="Macchiato" title="Macchiato" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton14" value="Macchiato" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Macchiato   </button>  

                                        
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    <!-- ROW 2 -->    <div id="espresso"></div> 
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/espresso.jpg" alt="Espresso" title="Espresso" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton15" value="Espresso" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Espresso </button>  
  
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/cappucino.jpg" alt="Cappuccino" title="Cappuccino" style="width: 140px; height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton16" value="Cappucino" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Cappucino   </button>  
 
                                    
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/sbmenu/flatwhite.jpg" alt="Flat White" title="Flat White" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton17" value="Flat White" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Flat White </button>  

                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/sbmenu/icedlatte.jpg" alt="Iced Caffee Latte" title="Iced Caffee Latte" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton18" value="Iced Caffee Latte" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Iced Caffe Latte </button>  
                                        
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                        
                         <!-- ROW 3 -->   <div id="iced-caffe-mocha"></div>   
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/icedmocha.jpg" alt="Iced Caffee Mocha" title="Iced Caffe Mocha" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton19" value="Iced Caffe Mocha" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Iced Caffe Mocha  </button>    
                                    
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/icedamericano.jpg" alt="Iced Caffe Americano" title="Iced Caffe Americano" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton20" value="Iced Caffe Americano" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Iced Caffe Americano   </button>
                                    
                                    </div>
                                </span>
                            </div>
                            
                        </div> <!-- /.row -->
                       
                        
                         <h3>Chocolate Drinks</h3>
                        
                        <!-- ROW 1 --> <div id="hot-chocolate"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/hotchocolate.jpg" alt="Hot Chocolate" title="Hot Choclate" style="width: 140px; height: 150px; ">

                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton21" value="Hot Chocolate" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'">Hot Chocolate </button>  
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/triplechoco.jpg" alt="Triple Hot Chocolate" title="Triple Hot Chocolate" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton22" value="Triple Hot Chocolate" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'">Triple Hot Chocolate    </button>  

                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/sbmenu/hotchocolate.jpg" alt="Classic Hot Chocolate" title="Classic Hot Chocolate" style="width: 140px; height: 150px; ">

                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton23" value="Classic Hot Chocolate" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'">Classic Hot Chocolate  </button>
                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/sbmenu/signaturechoco.jpg" alt="Signature Hot Chocolate" title="Signature Hot Chocolate" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton24" value="Signature Hot Chocolate" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Signature Hot Chocolate   </button> 

                                        
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    <!-- ROW 2 -->    <div id="white-hot-chocolate"></div> 
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/whitechoco.jpg" alt="White Hot Chocolate" title="White Hot Chocolate" style="width: 140px; height: 150px; ">

                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton25" value="White Hot Chocolate" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> White Hot Chocolate    </button>    
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/cappucino.jpg" alt="Cappuccino" title="Cappuccino" style="width: 140px; height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton16" value="Cappucino" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Cappucino   </button>  
 
                                    
                                    </div>
                                </span>
                            </div>
                        </div> <!-- /.row -->
                        
                    <h3>Frappucino Beverages</h3>
                        
                         
                        <!-- ROW 1 --> <div id="caramel-frappuccino"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span href="StarbucksCustomisation.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/sbmenu/caramel.jpg" alt="Caramel Frappuccino" title="Caramel Frappuccino" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton26" value="Caramel Frappucino" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Caramel Frappucino  </button>

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/sbmenu/coffeefrap.jpg" alt="Coffee Frappuccino" title="Coffee Frappuccino" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton27" value="Coffee Frappucino" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Coffee Frappucino</button>  

                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/sbmenu/espressofrap.jpg" alt="Espressso Frappuccino" title="Espresso Frappuccino" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton28" value="Espresso Frappucino" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Espresso Frappucino</button>  

                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/sbmenu/mochafrap.jpg" alt="Mocha Frappuccino" title="Mocha Frappuccino" style="width: 140px; height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton29" value="Mocha Frappucino" name="drink" type="Submit" onclick="location.href='StarBucksCustomisation.php'"> Mocha Frappucino</button>  

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