<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Your client id',     // ClientID
        'Your client secret'      // ClientSecret
    )
);
?>