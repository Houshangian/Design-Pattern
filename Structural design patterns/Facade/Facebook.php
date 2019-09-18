<?php
require_once 'ShareInterface.php';

class Facebook implements ShareInterface
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo "Sharing by $this->message on Facebook.<br/>";
    }
}