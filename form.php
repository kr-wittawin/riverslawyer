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
            <div class="container-fluid">
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
							<li class="icon"><a href="http://www.instagram.com" role="button" target="_blank">
								<i class="fa fa-instagram fa-border"></i><span></span>
							</a></li>
	                    </ul>
	                </nav>
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" id="nav-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav" >
                        <li><a class="externallink" href="index.html">Home</a></li>
						<li><a class="externallink" href="aboutus.html">About us</a></li>
						<li><a class="externallink" href="expertise.html">Expertise</a></li>
                        <li><a class="externallink" href="#body">Automated Legal Services</a></li>
						<li><a class="externallink" href="news.php">News</a></li>
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
						<li>Details</li>
						<li>Donate</li>
						<li>Parking Infringement Review Letter</li>
					</ul>
					<!-- fieldsets -->
					<div id = "msformFieldset">
						<fieldset>
							<h2 class="fs-title">Parking Fine Infringement Review (Victoria Only)</h2>
							<h3 class="fs-subtitle">Please select the most appropriate scenario below.</h3>
							<div class="infringement_reason">
					        <input type='radio' name='infringementOption' id='infringement1' value='Option 1'/>
					        <label for='infringement1'>My vehicle broke down.</label></br>
					        <input type='radio' name='infringementOption'  id='infringement2' value='Option 2' />
					        <label for='infringement2'>I was dealing with a medical emergency.</label><br/>
					        <input type='radio'  name='infringementOption'  id='infringement3' value='Option 3' />
					        <label for='infringement3'>The offence was before I bought the vehicle.</label><br/>
							<input type='radio'  name='infringementOption'  id='infringement4' value='Option 4' />
							<label for='infringement4'>The offence was after I sold the vehicle.</label><br/>
							<input type='radio'  name='infringementOption'  id='infringement5' value='Option 5' />
							<label for='infringement5'>The offence was after the vehicle was stolen.</label><br/>
							<input type='radio'  name='infringementOption'  id='infringement6' value='Option 6' />
							<label for='infringement6'>The parking sign was not visible.</label><br/>
							</div></br>
							<div class="form-errors"></div><br/>
							<input type="button" name="next" class="next action-button" value="Next" />
						</fieldset>
						<fieldset>
							<h2 class="fs-title">Please Fill in Your Personal Details</h2>
							<h3 class="fs-subtitle"></h3>
							<div class = "personalDetail">
							<select name = "title">
								<option value="" disabled selected hidden>*Title</option>
								<option value = "Mr.">Mr.</option>
								<option value = "Ms.">Ms.</option>
								<option value = "Mrs.">Mrs.</option>
								<option value = "Dr.">Dr.</option>
							</select>
							<input type="text" name="firstName" id= "firstName" placeholder="*Given Name" size="30" maxlength = "30" />
							<input type="text" name="lastName" id = "lastName" placeholder="*Family Name" size="30" maxlength = "30" />
							<input type="tel" name="mobilePhone" id = "mobilePhone" placeholder="*Primary Contact Number" size="30" maxlength = "10" />
							<input type="text" name="email" id = "email" placeholder="*Email Address" />
							<input type="text" name="address" id = "address" placeholder="*Address" size="30" maxlength = "30" />
							<input type="text" name="suburb" id = "suburb" placeholder="*Suburb" size="30" maxlength = "30" />
							<input type="tel" name="postcode" id = "postcode" placeholder="*postcode" size="30" maxlength = "4" />
							<select name = "state">
								<option value="" disabled selected hidden>*State</option>
								<option name="act">Australian Capital Territory</option>
								<option name="nsw">New South Wales</option>
								<option name="nt">Northern Territory</option>
								<option name="qld">Queensland</option>
								<option name="sa">South Australia</option>
								<option name="tas">Tasmania</option>
								<option name="vic">Victoria</option>
								<option name="wa">Western Australia</option>
							</select>
							</div>
							<h2 class="fs-title">Please fill in your Infringment Notice Details</h2>
							<h3 class="fs-subtitle"></h3>
							<div class = "infringementNoticeDetail">
							<input type="text" name="infNo" id= "infNo" placeholder="*Infringement Notice Number" size="30" maxlength = "30" />
							<input type="text" name="regNo" id= "regNo" placeholder="*Registration Number" size="30" maxlength = "20" />
							<input type="text" name = "infDate" id="infDate" placeholder="*Infringement Date"  onfocus="(this.type='date')" onblur="(this.type='text')" />
							<input type="text" name="infLocation" id= "infLocation" placeholder="*Location" size="30" maxlength = "60" />
							</div>
							<div class="form-errors"></div><br/>
							<input type="button" name="next" class="next action-button" value="Submit Details" />
							<input type="button" name="previous" class="previous action-button" value="Previous" />
						</fieldset>
						<fieldset>
							<h2 class="fs-title">Donate to Charity</h2>
							<h3 class="fs-subtitle">Donate to Charity Securely via Stripe payment service</h3>
							<h3 class="fs-subtitle"> Please donate minimum $2 to obtain infringement notice review letter. </h3>
							<span style ="white-space:nowrap">
								<label for= "chargeAmount">$</label>
								 <input type="number" id="chargeAmount" name= "chargeAmount" placeholder= "Donation Amount" min="2.00" step="1.00" /><br/>
							</span>
							<input type="hidden" id="stripeToken" name="stripeToken" />
							<input type="hidden" id="stripeEmail" name="stripeEmail" />
							<input type="button" id="customCharge" class = "action-button" value = "Donate" /> <br/>
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
