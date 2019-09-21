<?php
require_once("GUIFactoryInterface.php");
require_once ("OSXButton.php");

class OSXFactory implements GUIFactoryInterface
{
    public function CreateButton()
    {
        return new OSXButton();
    }
}
