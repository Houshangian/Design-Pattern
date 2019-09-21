<?php
require_once("GUIFactoryInterface.php");
require_once("WinButton.php");

class WinFactory implements GUIFactoryInterface
{
    public function CreateButton()
    {
        return new WinButton();
    }
}