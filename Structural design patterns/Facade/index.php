<?php
require_once 'Twitter.php';
$twitter = new Twitter();
$twitter->setMessage('No Design Pattern');
$twitter->share();

echo "<hr>";

require_once 'SocialMedia.php';
$socialMedia = new SocialMedia(new Twitter(), new Facebook(), new GooglePlus());
$socialMedia->shareMessage('Facade Design Pattern')->shareonSocial();