<!DOCTYPE html>
<html>
<head>
<title>PowerFit</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/style3.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.shop.js"></script>


<!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


 <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="icon" href="logo.png">
</head>

<body id="checkout-page">

<div id="site">
	<!-- Navigation -->
  <nav class=" page-scroll navbar navbar-custom " role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">
		
     <i class="fa fa-play-circle"></i>
		 
		  <div class="logo">
		  <span class="light">Power</span>Fit
		  </div>
		 
		  
        </div>


        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">

            <li class="hidden">
              <a href="#page-top"></a>
            </li>
            
            <li class="active">
            <a class="page-scroll" href="#about">Home</a>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fitness <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Our Couches</a></li>
                <li><a href="#">Cardio</a></li>
                <li><a href="#">Strength</a></li>
                <li><a href="#">Workout Music</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Food <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Recipes</a></li>
                <li><a href="#">Diets</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Calorie Counter</a></li>
              </ul>
            </li>

            <li>
              <a class="page-scroll" href="#download">Shop</a>
            </li>
			
			<li>
              <a class="page-scroll" href="cart.html"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
            </li>

            <li>
              <a class="page-scroll" href="#contact">Contact</a>
            </li>

            <li>
              <a class="page-scroll" href="#contact"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
            </li>


          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
	
	<div id="content">
	<!-- spacer section -->
<section class="spacer bg3">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyLeft">
		<h2>Free shipping worldwide</h2>
			
		</div>
		<div class="span12 aligncenter flyRight">
			<i class="icon-rocket icon-10x"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
	
		<h1>Your Order</h1>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <div id="user-details">
		 	<h2>Your Data</h2>
		 	<div id="user-details-content"></div>
		 </div>
		 
		 
		 
		 
<form id="paypal-form" action="" method="post">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="upload" value="1" />
	<input type="hidden" name="business" value="" />
        
	<input type="hidden" name="currency_code" value="" />
	<input type="submit" id="paypal-btn" class="btn" value="Pay with PayPal" />
</form>
		 
		 
	</div>
	
	

</div>

<footer class="footer-distributed">

      <div class="footer-left">

         <i class="fa fa-play-circle"></i> <span class="light">Power</span> Fit

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Fitness</a>
          ·
          <a href="#">Food</a>
          ·
          <a href="#">Shop</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">&copy; 2017</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>21 Revolution Street</span> Bucharest, Romania</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+0 755 512 345</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#">support@powerfit.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About us:</span>
          Power Fit provides a complete selection of equipment and classes. All new members are given a complimentary fitness evaluation, program design, and personal training session with one of our trainers. 
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>

</body>
</html>	