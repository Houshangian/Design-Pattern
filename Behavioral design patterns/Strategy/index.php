<?php
require_once "ShoppingCard.php";
$card=ShoppingCard::getInstance();
$card->setAmount(1000);
$card->payAmount('IRR');
echo "<br>";
$card->payAmount('USD');
