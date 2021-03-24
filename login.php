<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    

    <title>PowerFit</title>
	<link rel="icon" href="logo.png">

    <!-- Bootstrap Core CSS -->
   <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style1-login.css" />

    <!-- Theme CSS -->
  <!--<link href="css/grayscale.min.css" rel="stylesheet">-->

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">PowerFit</h1>
                        <div class="login">
	<h1>Login</h1>
    <form onsubmit="return visitPage()" action="/index.php" method="post">
	
    	<input type="text" name="u" id="username" placeholder="Username" required="required" />
        <input type="password" name="p" id="code" placeholder="Password"  required="required" />
	<div class="form">
        <button type="submit" onclick="visitPage();" class="btn btn-primary btn-block btn-large">Let me in.</button>
	</div>
    </form> <br>
	<a href="sign-in.php"><h6>You don't have an account? Sign up!</h6></a>
	
</div>

                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
		
    </header>
<!-- about -->
<section id="about" class="container content-section text-center">
        <div class="row">
<div id="fh5co-features">
			<div class="container">
				<div class="row text-center">
					
					<div class="fh5co-spacer fh5co-spacer-md"></div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 fh5co-feature-border">
						<div class="fh5co-feature">
							<div class="fh5co-feature-icon to-animate">
								 <img src="images/map.png" alt="" />
							</div>
							<div class="fh5co-feature-text">
								<h3><a>Fun events</a></h3>
								<p>Find the events we host at our different gym locations and join us!</p>
								
							</div>
						</div>
						<div class="fh5co-feature no-border">
							<div class="fh5co-feature-icon to-animate">
								  <img src="images/music.png" alt="" />
							</div>
							<div class="fh5co-feature-text">
								<h3><a>Motivation playlists</a></h3>
								<p>Energetic music that helps you stay motivated during your workout!</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="fh5co-feature">
							<div class="fh5co-feature-icon to-animate">
								 <img src="images/eye.png" alt="" />
							</div>
							<div class="fh5co-feature-text">
								<h3><a>The best nutrition</a></h3>
								<p>Keep an eye for doctor approved recipes and diets to help you stay fit!</p>
								
							</div>
						</div>
						<div class="fh5co-feature no-border">
							<div class="fh5co-feature-icon to-animate">
								  <img src="images/shop.png" alt="" />
							</div>
							<div class="fh5co-feature-text">
								<h3><a>Sport equipment</a> </h3>
								<p>Find the right sport gear because working out should be a comfortable experience!</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		</section>
		<!-- About -->


		<div class="fh5co-spacer fh5co-spacer-lg"></div>	
<div class="fh5co-bg-section" style="background-image: url(images/back.jpg); background-attachment: fixed;">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-hero-wrap">
							<div class="fh5co-hero-intro text-center">
								<h1 class="fh5co-lead"><span class="quo">&ldquo;</span>Overpower. Oertake. Overcome. <span class="quo">&rdquo;</span></h1>
								<p class="author">&mdash; <cite>Serena Williams</cite></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>	

 <!--Footer-->
        <footer>
            <div class="container">
			<hr>
            	<div class="row">
				
            		<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="social-network">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					
            		<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copyright">
							<p>PowerFit 2016. All rights reserved.</p>
						</div>
					</div>
					
            	</div>
            </div>
        </footer>	
    
	
 <script type="text/javascript"> 
	
	function visitPage(){
	/*var error=0,
		code = document.getElementById('code').value,
		username = document.getElementById('username').value;
	if (code==000 || code==001 || code==002 && code.length>0)
		
        {window.location='/index.php';}
		
		else {
		alert('This is not right');
        	error = 1;
		}
		
		if (error == 0) {
        	return true
        }

        return false;*/
		
		
	
	</script>
 
 
</body>

</html>
