<?php
require_once 'CarModelR.php';
require_once 'CarModelS.php';
require_once 'CarModelNotDefined.php';

class CarFactory
{
    protected $car;

    public function make($model)
    {
        $model = strtolower($model);
        if ($model == 'r') {
            return $this->car = new CarModelR();
        } elseif ($model == 's') {
            return $this->car = new CarModelS();
        } else {
            return $this->car = new CarModelNotDefined();
        }
    }
}