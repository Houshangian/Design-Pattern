<?php
require_once 'CarOrder.php';
$carOrder = new CarOrder;
$carOrder->order('206');
$carOrder->order('r');
var_dump($carOrder->getCarOrders());