<?php
require_once  ("ButtonInterface.php");

class WinButton implements ButtonInterface
{
    public function Paint()
    {
        echo "Windows Button";
    }
}