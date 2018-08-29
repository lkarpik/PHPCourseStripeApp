<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment app</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2 class="my-4 text-center">Intro to PHP payment app</h2>
        <form action="charge.php" method="post" id="payment-form">
        <div class="form-row">
            <input type="text" name="first_name" class="form-control mb-3 StripeElement StipeElement--empty" placeholder="First name">
            <input type="text" name="last_name" class="form-control mb-3 StripeElement StipeElement--empty" placeholder="Last name">
            <input type="email" name="email" class="form-control mb-3 StripeElement StipeElement--empty" placeholder="E-mail adress">
            <div id="card-element" class="form-control">
            <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button>Submit Payment</button>

        </form>    
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/charge.js"></script>

</body>
</html>