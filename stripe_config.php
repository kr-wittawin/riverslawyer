<?php
define("ROOT",dirname(__FILE__).'/' );
require_once(ROOT . '/vendor/stripe/init.php');

$stripe = array(
  "secret_key"      => "sk_test_nUKmDDK3fm1PCxbC0c0f5mIE",
  "publishable_key" => "pk_test_4DdKTYdDCQZKocZKjVWQjsLL"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
