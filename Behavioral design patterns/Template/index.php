<?php
require_once 'PaperBack.php';
$paperback = new PaperBack();
$paperback->generateName("Good to Great");

echo "<hr>";

require_once 'Ebook.php';
$ebook = new Ebook();
$ebook->generateName("PHP & MySQL FOR Dummies");


echo "<hr>";


