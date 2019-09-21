<?php
require_once("ButtonInterface.php");
class OSXButton implements ButtonInterface
{
    public function Paint()
    {
        echo "OSX Button";
    }
}