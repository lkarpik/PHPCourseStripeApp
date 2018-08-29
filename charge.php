<?php
require_once'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_G2X2NLKtN74oSkFd9fpAeUu0');

//sanitize post array

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name= $POST['first_name'];
$last_name= $POST['last_name'];
$email= $POST['email'];
$token= $POST['stripeToken'];
// Create customer
$customer = \Stripe\Customer::create(
    array(
        "email" => $email,
        "source" => $token
    )
);

// charge Customer
$charge = \Stripe\Charge::create(
    array(
        "amount" => 5000,
        "currency" => "usd",
        "description" => 'App store - id: 3434',
        "customer" => $customer->id
    )
);

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);


?>