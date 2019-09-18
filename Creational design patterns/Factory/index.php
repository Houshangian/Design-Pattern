<?php
require_once 'CarOrder.php';
$carOrder = new CarOrder;
$carOrder->order('206');
var_dump($carOrder->getCarOrders());