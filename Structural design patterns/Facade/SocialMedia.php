<?php
require_once 'Twitter.php';
require_once 'Facebook.php';
require_once 'GooglePlus.php';

class SocialMedia
{
    private $twitter;
    private $facebook;
    private $googleplus;

    public function __construct(ShareInterface $twitter, ShareInterface $facebook, ShareInterface $googleplus)
    {
        $this->twitter = $twitter;
        $this->facebook = $facebook;
        $this->googleplus = $googleplus;
    }

    public function shareMessage($message)
    {
        $this->twitter->setMessage($message);
        $this->facebook->setMessage($message);
        $this->googleplus->setMessage($message);
        return $this;
    }

    public function shareOnSocial()
    {
        $this->twitter->share();
        $this->facebook->share();
        $this->googleplus->share();
    }
}