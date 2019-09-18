<?php
require_once 'Email.php';
$email = Email::getInstance(); // normal mail
$email->loadBody();

echo "<hr>";

require_once 'YaldaEmailBody.php';
$email = YaldaEmailBody::getInstance(Email::getInstance());
$email->loadBody();

echo "<hr>";

require_once 'NewYearEmailBody.php';
$email = NewYearEmailBody::getInstance(Email::getInstance());
$email->loadBody();