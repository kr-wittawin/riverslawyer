<?php require_once(__DIR__ . '/stripe_config.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!--http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar-->

	<head>
		<!-- meta character set -->
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Rivers Lawyers Automated Legal Services</title>

		<!-- Meta Description -->
		<meta name="description" content="Rivers Lawyers Automated Legal ServicesPage">
        <meta name="keywords" content="Rivers Lawyers Automated Legal Services">
        <meta name="author" content="Rivers Lawyers">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

		<!-- Fontawesome Icon font -->
	    <link rel="stylesheet" href="css/font-awesome.css">
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Tooltipster -->
		<link rel="stylesheet" href="css/tooltipster.bundle.min.css">
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="css/main.css">

	</head>

	<body id="body" class= "formPageBackground">

		<!--Fixed Navigation
	    ==================================== -->
        <header id="navigation" class="navbar-default navbar-fixed-top jumbotron">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <img src="img/RL_Brand.png"  alt="RIVERS LAWYER">
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- social media nav -->
                <div class = "hidden-sm hidden-xs hidden-md visible-lg">
	                <nav class="collapse navbar-collapse navbar-right" role="navigation" >
	                    <ul id ="social-media" class="nav navbar-nav">
							<li class="icon"><a href="http://www.facebook.com" role="button" target="_blank">
								<i class="fa fa-facebook fa-border"></i><span></span>
							</a></li>
							<li class="icon"><a href="http://www.twitter.com" role="button" target="_blank">
								<i class="fa fa-twitter fa-border"></i><span></span>
							</a></li>
							<li class="icon"><a href="http://www.whatsapp.com" role="button" target="_blank">
								<img src = "img/whatsapp.png" alt="whatsapp"><span></span>
							</a></li>
							<li class="icon"><a href="http://www.instagram.com" role="button" target="_blank">
								<i class="fa fa-instagram fa-border"></i><span></span>
							</a></li>
							<li class="icon"><a href="#" role="button" target="_blank">
								<img src = "img/kakaotalk.png" alt="kakaotalk"><span></span>
							</a></li>
	                    </ul>
	                </nav>
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" id="nav-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav" >
                        <li><a class="externallink" href="index.html">Home</a></li>
						<li><a class="externallink" href="expertise.html">Expertise</a></li>
                        <li><a class="externallink" href="index.html?tab=aboutus">About us</a></li>
                        <li><a class="externallink" href="#body">Automated Legal Services</a></li>
						<li><a class="externallink" href="index.html?tab=news">News</a></li>
                        <li><a class="externallink" href="index.html?tab=contactus">Contact us</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

		<!--
				End Fixed Navigation
				==================================== -->

			<div class= "container formSize">

				<!-- multistep form -->
				<form method = "post" action = "formfilled.php" id="msform" >
					<!-- progressbar -->
					<ul id="progressbar">
						<li class="active">Parking Infringement Reason</li>
						<li>Personal Details</li>
						<li>Donate</li>
						<li>Form</li>
					</ul>
					<!-- fieldsets -->
					<div id = "msformFieldset">
						<fieldset>
							<h2 class="fs-title">Choose the Infringement Review Reason</h2>
							<h3 class="fs-subtitle">Tell us the reason</h3>
							<div class="infringement_reason">
					        <input type='radio' name='infringementOption' id='infringement1' value='Option 1'/>
					        <label for='infringement1'>Option 1</label></br>
					        <input type='radio' name='infringementOption'  id='infringement2'/ value='Option 2' />
					        <label for='infringement2'>Option 2</label></br>
					        <input type='radio'  name='infringementOption'  id='infringement3' value='Option 3' />
					        <label for='infringement3'>Option 3</label></br>
							</div></br>
							<div class="form-errors"></div></br>
							<input type="button" name="next" class="next action-button" value="Next" />
						</fieldset>
						<fieldset>
							<h2 class="fs-title">Personal Details</h2>
							<h3 class="fs-subtitle">Please fill in your details</h3>
							<div class = "personal_detail">
							<input type="text" name="firstName" id= "firstName" placeholder="First Name" size="30" maxlength = "30" />
							<input type="text" name="lastName" id = "lastName" placeholder="Last Name" size="30" maxlength = "30" />
							<!--<input type="text" name="email" id = "email" placeholder="email" />-->
							<input type="text" name="infringementNo" id = "infNo" placeholder="Infringement Notice Number" size="30" maxlength = "30" />
							<textarea name="additionalComment" placeholder="Additional Comment"></textarea>
							</div>
							<div class="form-errors"></div></br>
							<input type="button" name="next" class="next action-button" value="Submit Detail" />
							<input type="button" name="previous" class="previous action-button" value="Previous" />
						</fieldset>
						<fieldset>
							<h2 class="fs-title">Donate to Charity</h2>
							<h3 class="fs-subtitle">Donate to Charity via Stripe payment service</h3>
							<h3 class="fs-subtitle"> Please donate minimum $2 to obtain form. </h3>
							<span style ="white-space:nowrap">
								<label for= "chargeAmount">$</label>
								 <input type="number" id="chargeAmount" name= "chargeAmount" placeholder= "Donation Amount" min="2.00" step="1.00" /></p></br>
							</span>
							<input type="hidden" id="stripeToken" name="stripeToken" />
							<input type="hidden" id="stripeEmail" name="stripeEmail" />
							<input type="button" id="customCharge" class = "action-button" value = "Donate" /> </br>
							<input type="button" name="previous" class="previous action-button" value="Edit Details" />
						</fieldset>
					</div>
				</form>
			</div>

			<footer id="footer">
				<div class ='container'>
					<div class="row text-center">
						<div class="footer-content">
							<div class="wow animated fadeInDown">
								<p>In development phase.</p>
							</div>
							<p>Copyright Rivers Lawyers. All rights reserved. Design and Developed By Wittawin and Ben</p>
						</div>
					</div>
				</div>
			</footer>



		<!-- Essential javascript Plugins
		================================================== -->
		<!-- Modernizer Script for old Browsers -->
		<script type="text/javascript" src="js/modernizr-2.6.2.min.js" type="text/javascript"></script>
		<!-- Main jQuery -->
		<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
		<!-- Twitter Bootstrap -->
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Single Page Nav -->
		<script src="js/jquery.singlePageNav.min.js" type="text/javascript"></script>
		<!-- jquery easing -->
		<script src="js/jquery.easing.min.js" type="text/javascript" type="text/javascript"></script>
		<!--jquery.validation.js-->
		<script src="js/jquery.validate.min.js" type="text/javascript" type="text/javascript"></script>
		<script src="js/additional-methods.min.js" type="text/javascript"></script>
		<!--tooltipster.core.min.js-->
		<script src="js/tooltipster.bundle.min.js" type="text/javascript" type="text/javascript"></script>
		<!--form_function.js-->
		<script src="js/form_function.js" type="text/javascript" type="text/javascript"></script>
		<!-- Custom Functions -->
		<script src="js/main.js" type="text/javascript"></script>
		<!-- Stripe Custom Checkout -->
		<script src="https://checkout.stripe.com/checkout.js"></script>

	</body>
</html>
