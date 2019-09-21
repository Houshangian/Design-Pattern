<?php
require_once("WinFactory.php");
$factory = new WinFactory();
$button = $factory->CreateButton();
$button->Paint();

echo "<hr>";

require_once("OSXFactory.php");
$factory = new OSXFactory();
$button = $factory->CreateButton();
$button->Paint();




