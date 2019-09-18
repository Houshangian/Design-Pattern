<?php

require_once "StripeAdapter.php";
require_once "SadadAdapter.php";

$card=StripeAdapter::getInstance(new StripeClassWrittenByStripe());
$card->pay();

echo "<br>";

$card=SadadAdapter::getInstance(new SadadClassWrittenBySadad());
$card->pay();


