<?php
require_once(__DIR__ . '/stripe_config.php');?>

<?php
	if(!$_POST) {
		//if no stripeToken generated, redirect to form
		header('Location: ./form.php');
		exit;}
	else{
		try {
			$token  = $_POST['stripeToken'];
			$email = $_POST['stripeEmail'];
			$name = $_POST['firstName'] . " " . $_POST['lastName'];
			$amount = $_POST['chargeAmount'];
			// collect customer information from form
			$customer = \Stripe\Customer::create(array(
			'email' => $email,
			'source'  => $token,
			'description' => "Customer Name is " . $name
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
