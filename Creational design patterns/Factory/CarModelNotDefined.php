<?php
require_once 'Car.php';

class CarModelNotDefined implements Car
{
    public function getModel()
    {
        return 'this model is not defined';
    }
}