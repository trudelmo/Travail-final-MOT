<?php

ini_set('display_errors',1);
require('stripe/init.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_Ie5kf4DOtXvvCjq7LERH0Yza");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
$charge = \Stripe\Charge::create(array(
  "amount" => 2000, // amount in cents, again
  "currency" => "cad",
  "source" => $token,
  "description" => "Example charge")
);
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TP Final - Marc-Olivier Trudel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="backer1">
    <div class="container">

            <div class="col-xs-12 col-md-12">
            <div class="intro">
            <h1>Merci pour votre commande !</h1>
                <p class="lead">Vous recevrez un email de confirmation sous peu !</p>
            </div>
            </div>
    </div><!-- /.container -->
<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Bootstrap Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script>
        $(function() {
            //-----------------------------------
            // Mettre votre code javascript ici, si nécessaire
            //-----------------------------------
        });
    </script>
</body>
</html>