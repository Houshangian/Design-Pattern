<?php
require_once 'ShareInterface.php';

class Twitter implements ShareInterface
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo "Sharing by $this->message on Twitter.<br/>";
    }
}