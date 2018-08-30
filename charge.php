<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/customer.php');
require_once('models/transaction.php');

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

// Customer data
$customerData = [
    'id' => $charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
];

// Instantiate Customer
$customer = new Customer();

// Add customer
$customer->addCustomer($customerData);

// Transaction data
$transactionData = [
    'id' => $charge->id,
    'customer_id' => $charge->customer,
    'product' => $charge->description,
    'amount' => $charge->amount,
    'currency' => $charge->currency,
    'status' => $charge->status
];

// Instantiate Transaction
$transaction = new Transaction();

// Add transaction
$transaction->addTransaction($transactionData);






// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);


?>