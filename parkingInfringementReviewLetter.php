<?php
require_once(__DIR__ . '/stripe_config.php');
?>
<?php
	if(!$_POST) {
		//if no stripeToken generated, redirect to form
		header('Location: ./form.php');
		exit;}
	else{
		try {
			$token  = $_POST['stripeToken'];
			$email = $_POST['stripeEmail'];
			$name = $_POST['title'] . " " . $_POST['givenName'] . " " . $_POST['familyName'];
			$mobilePhone = $_POST['mobilePhone'];
			//converting charge amount into stripe  compatible value in cents
			$amount = $_POST['chargeAmount']*100;
			// collect customer information from form
			$customer = \Stripe\Customer::create(array(
			'email' => $email,
			'source'  => $token,
			'description' => "Customer Name is " . $name . "Mobile Phone Number is " . $mobilePhone
			));
			//charge the credit card
		   $charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'currency' => 'aud',
				'amount'   => $amount,
				'description' => 'Donation for Parking Infringement Appeal Form'
			));
				$success = 1;
				$paymentProcessor = "Credit card (www.stripe.com)";
			} catch(\Stripe\Error\Card $e) {
			  $error1 = $e->getMessage();
			} catch (\Stripe\Error\InvalidRequest $e) {
			  // Invalid parameters were supplied to Stripe's API
			  echo "Technical Payment Issue, please contact Rivers Lawyers for assistance.";
			  $error2 = $e->getMessage();
			} catch (\Stripe\Error\Authentication $e) {
			  // Authentication with Stripe's API failed
			  echo "Technical Payment Issue, please contact Rivers Lawyers for assistance.";
			  $error3 = $e->getMessage();
			} catch (\Stripe\Error\ApiConnection $e) {
			  // Network communication with Stripe failed
			  echo "Stripe Payment System is down, please try again later.";
			  $error4 = $e->getMessage();
			} catch (\Stripe\Error\Stripe_Error $e) {
			  // Display a very generic error to the user, and maybe send
			  // yourself an email
			  echo "Apologies. Stripe Payment System Error";
			  $error5 = $e->getMessage();
			} catch (Exception $e) {
			  // Something else happened, completely unrelated to Stripe
			  echo "Something went wrong. Please try again later.";
			  $error6 = $e->getMessage();
			}
		if ($success!=1)
		{
			$_SESSION['error1'] = $error1;
			$_SESSION['error2'] = $error2;
			$_SESSION['error3'] = $error3;
			$_SESSION['error4'] = $error4;
			$_SESSION['error5'] = $error5;
			$_SESSION['error6'] = $error6;
			header('Location: ./form.php');
			exit();
		}
	}
?>
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
						<li><a class="externallink" href="expertise.html">Expertise</a></li>
                        <li><a class="externallink" href="index.html?tab=aboutus">About us</a></li>
                        <li><a class="externallink" href="form.php">Automated Legal Services</a></li>
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
		<form method id="msform"
			<div class= "container formSize">
					<!-- progressbar -->
					<ul id="progressbar">
						<li class="active">Parking Infringement Reason</li>
						<li class="active">Personal Details</li>
						<li class="active">Infringement Notice Details</li>
						<li class="active">Donate</li>
						<li class="active">Parking Infringement Review Letter</li>
					</ul>
					<!-- fieldsets -->
					<div id = "msformFieldset">
						<fieldset>
							<h2 class="fs-title">Infringement Notice Review Letter</h2>
							<h3 class="fs-subtitle">Thank you for the donation. Please copy and paste the letter to the relevant council.</h3>
							<div id = "letterOutput">
								<?php
								if ($_SERVER['REQUEST_METHOD'] == 'POST') {
									/*cache personal details*/
									$infringementOption = $_POST['infringementOption'];
									$concName = $_POST['title'] . " " . $_POST['givenName'] . " " . $_POST['familyName'];
									$name = str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($concName))));
									/*cache infringement details*/
									$infNo = $_POST['infNo'];
									$regNo = strtoupper($_POST['regNo']);
									$infDate = $_POST['infDate'];
									$concLoc = $_POST['infstreetAddress'] . " " . $_POST['infsuburbAddress'] . " " . $_POST['state'];
									$infLoc = str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($concLoc))));

									$Option1 =  "<p>To whom it may concern, </p><br/>" .
												"<p><b>Re: Request for an infringement review (Infringement Notice No. " . $infNo . ")</b></p><br/>" .
												"<p>I write this letter to request an infringement review on the basis that my vehicle (Registration number: " .
												$regNo  . ") was disabled at " . $infLoc . " on " . $infDate . ". </p><br/>" .
												"<p>At the time the above infringement notice was issued, I stopped my vehicle at the above place,
												because my vehicle broke down, and I stopped for no longer than was necessary for my vehicle to
												be moved safely to a place where I was permitted to park the vehicle under the relevant laws. </p><br/>" .
												"<p>I understand that the following information will help you verify my claim.
												I contacted my insurance company for the roadside assistance and
												informed the company that my vehicle was disabled at " .
												$infLoc . " on " . $infDate . ". </p><br/>" .
												"<p>Please find the attached evidence for your consideration. </p><br/>" .
												"<p>In accordance with rule 165 of the Road Safety Rules 2009 (Vic),
												I strongly believe that the infringement notice is justified to be
												revoked and the issuing of the said notice is unreasonable under these circumstances. </p><br/>" .
												"<p>Yours sincerely, </p><br/>" . $name;
									$Option2 =  "<p>To whom it may concern, </p><br/>" .
												"<p><b>Re: Request for an infringement review (Infringement Notice No. " . $infNo .
												")</b></p><br/>" .
												"<p>I write this letter to request an infringement review on the basis that I was
												dealing with a medical emergency at " . $infLoc . " on " . $infDate . ". </p><br/>" .
												"<p>At the time the above infringement notice was issued, I stopped my vehicle at the
												above place to deal with a medical emergency and I stopped for no
												longer than was necessary in the circumstances.</p><br/>" .
												"<p>I understand that the following information will
												help you verify my claim. I contacted the Ambulance Service
												for emergency medical services. </p><br/>" .
												"<p>Please find the attached evidence for your consideration. </p><br/>" .
												"<p>In accordance with rule 165 of the Road Safety Rules 2009 (Vic),
												I strongly believe that the infringement notice is justified to be
												revoked and the issuing of the said notice is unreasonable under these circumstances. </p><br/>" .
												"<p>Yours sincerely, </p><br/>" . $name;
									$Option3 =  "<p>To whom it may concern, </p><br/>" .
												"<p><b>Re: Request for an infringement review (Infringement Notice No. " . $infNo . ")</b></p><br/>" .
												"<p>I write this letter to request an infringement review on the basis
												that at the time the infringement notice was issued on " . $infDate .
												 ", I was not the owner of the vehicle concerned (Registration number: " . $regNo . ").<p></br>" .
												"<p>According to the Road Safety Rules 2009 (Vic), the liability for the contravention rests with
												the registered owner of the vehicle at the time of the offence. As I was not the registered owner,
												since I had not yet gained ownership of the vehicle, I look forward to my liability for the
												infringement being cancelled immediately. </p><br/>" .
												"<p>Furthermore, I understand that the contact details of the previous owner are necessary to support
												my claim. The vehicle is currently owned by [insert previous owner’s name]. </p><br/>" .
												"<p>The contact details of the owner are as follows:</p><br/>" .
												"<p>Phone: [insert]</p><br/>" .
												"<p>Address: [insert]</p><br/>" .
												"<p>Though I understand the importance of parking enforcement, I look forward to the
												infringement notice being cancelled for the reasons outlined in this appeal.</p><br/>" .
												"<p>Thank you, </p><br/>" .
												"<p>Yours sincerely, </p><br/>" . $name;
									$Option4 =  "<p>To whom it may concern, </p><br/>" .
												"<p><b>Re: Request for an infringement review (Infringement Notice No. " . $infNo . ")</b></p><br/>" .
												"<p>I write this letter to request an infringement review on the basis
												that at the time the infringement notice was issued on " . $infDate . ", I was not the owner
												of the vehicle concerned (Registration number: " . $regNo . "). Although the infringement notice was
												issued on " . $infDate . ", I sold the vehicle on [dd/mm/yyyy], a date prior to the alleged offence.</p><br/>" .
												"<p>According to the Road Safety Rules 2009 (Vic), the liability for the contravention rests with
												the registered owner of the vehicle at the time of the offence. As I was not the registered owner,
												since I had sold the vehicle, I look forward to my liability for the PCN being cancelled
												immediately. </p><br/>" .
												"<p>Furthermore, I understand that the contact details of the current owner are necessary to support
												my claim. The vehicle is currently owned by [insert current owner’s name]. </p><br/>" .
												"<p>The contact details of the owner are as follows:</p><br/>" .
												"<p>Phone: [insert a phone number]</p><br/>" .
												"<p>Address: [insert an address]</p><br/>" .
												"<p>Though I understand the importance of parking enforcement, I look forward to the
												infringement notice being cancelled for the reasons outlined in this appeal.</p><br/>" .
												"<p>Thank you, </p><br/>" .
												"<p>Yours sincerely, </p><br/>" . $name;
									$Option5 =  "<p>To whom it may concern, </p><br/>" .
												"<p><b>Re: Request for an infringement review (Infringement Notice No. " . $infNo . ")</b></p><br/>" .
												"<p>I write this letter to request an infringement review on the basis
												that at the time the infringement notice was issued on " . $infDate . ", my vehicle
												(Registration number: " . $regNo . ") was stolen on [dd/mm/yyyy], which is clearly before the date
												of the infringement notice.</p><br/>" .
												"<p>In accordance with the Road Safety Rules 2009 (Vic), my request for revoking the infringement
												notice is on the basis that at the time the above infringement notice was issued, my vehicle had
												been taken without consent.</p><br/>" .
												"<p>I understand that the following details will help you verify my claim. I reported to the
												police that the vehicle was stolen, submitting my report to the following police station: </p><br/>" .
												"<p>Name of Police station: [insert a police station location]</p><br/>" .
												"<p>Report date: [insert a date]</p><br/>" .
												"<p>Reference number: [insert a reference number]</p><br/>" .
												"<p>Though I understand the importance of parking enforcement, I look forward to the
												infringement notice being cancelled for the reasons outlined in this appeal.</p><br/>" .
												"<p>Yours sincerely, </p><br/>" . $name;
									$Option6 = "<p>To whom it may concern, </p><br/>" .
												"<p><b>Re: Request for an infringement review (Infringement Notice No. " . $infNo . ")</b></p><br/>" .
												"<p>I refer to the above matter and would like to request an infringement review on the basis that
												the alleged contravention did occur because there were no clear signs informing me of the
												regulations.</p><br/>" .
												"<p>Although the parking infringement notice is the result of allegedly parking in the area,
												I argue that there was no clear sign on the side of the parking area where my motor vehicle
												was parked on. Please see the photographs enclosed herein.</p><br/>" .
												"<p>Further, the parking sign attached to the sign post in the parking area was not
												clear of pedestrian head height (2.0m) and vehicle height (2.2m). Thus, the notice was not
												visible from the parking area where my motor vehicle was parked on. </p><br/>" .
												"<p>I find that the parking signs were not adequately installed and not made visible to the drivers.</p><br/>" .
												"<p>I strongly believe that the council should exercise fairness in cancelling the parking fine that,
												according to the relevant regulations, is justified to be revoked and the issuing of the parking infringement
												notice is unreasonable under these circumstances. </p><br/>" .
												"<p>Thank you for your time and consideration.</p><br/>" .
												"<p>Yours sincerely, </p><br/>" . $name;
									switch ($infringementOption) {
										case "Option 1":
											echo $Option1;
										break;
										case "Option 2":
											echo $Option2;
										break;
										case "Option 3":
											echo $Option3;
										break;
										case "Option 4":
											echo $Option4;
										break;
										case "Option 5":
											echo $Option5;
										break;
										case "Option 6":
											echo $Option6;
										break;
									}
								} else {
									echo "Something went wrong. </br> If you paid for the form, please contact Rivers Lawyers for further actions.";
								}
								?>
							</div>
							<a href = "index.html"><input type="button" class="action-button" value="Return to Home Page" /> </a>
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
		<script src="js/tooltipster.bundle.min.js" type="text/javascript"></script>
		<!--form_function.js-->
		<script src="js/form_function.js" type="text/javascript" type="text/javascript"></script>
		<!-- Custom Functions -->
		<script src="js/main.js" type="text/javascript"></script>
		<!-- Stripe Custom Checkout -->
		<script src="https://checkout.stripe.com/checkout.js"></script>

	</body>
</html>
