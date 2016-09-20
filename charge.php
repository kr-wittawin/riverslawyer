<?php
require_once(__DIR__ . '/stripe_config.php');?>

<?php
if($_POST) {
	$error = NULL;
	try {
		//if no stripeToken generated, throw exception error message
		if(!isset($_POST['stripeToken'])) {
			throw new Exception("The Stripe Token was not generated correctly");
			// customer information
			$token  = $_POST['stripeToken'];
			$email = $_POST['stripeEmail'];
			$name = $_POST['firstName'] . " " . $_POST['lastName'];

			$customer = \Stripe\Customer::create(array(
			'email' => $email,
			'source'  => $token,
			'description' => "Customer Name is " . $name
			));
			//charge the credit card
		   $charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => 100,
				'currency' => 'aud',
				'description' => 'Charge for Parking Infringement Appeal Form'
			));
		}
	} catch (Exception $e) {
		$error = $e->getMessage();
	}
}
?>
