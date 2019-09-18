<?php
require_once "SingleToneClass.php";
$obj1=SingleToneClass::getInstance();


sleep(2);
echo "<br>";
$obj2=SingleToneClass::getInstance();
