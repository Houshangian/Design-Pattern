<?php
require_once 'Car.php';

class CarModelR implements Car
{
    protected $model = 'r';

    public function getModel()
    {
        return $this->model;
    }
}