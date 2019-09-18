<?php
require_once 'CarFactory.php';

class CarOrder
{
    protected $carOrders = [];
    protected $car;

    public function __construct()
    {
        $this->car = new CarFactory();
    }

    public function order($model = null)
    {
        $car = $this->car->make($model);
        $this->carOrders[] = $car->getModel();
    }

    public function getCarOrders()
    {
        return $this->carOrders;
    }
}