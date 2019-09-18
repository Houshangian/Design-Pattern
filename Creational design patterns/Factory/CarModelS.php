<?php
require_once 'Car.php';

class CarModelS implements Car
{
    protected $model = 's';

    public function getModel()
    {
        return $this->model;
    }
}