<?php
include_once('CloneMachine.php');

class Agency extends CloneMachine
{
    function __construct()
    {
        echo "When you create an object __Constrauct will execute";
    }

    function __clone()
    {
        echo "An object has Cloned, But as you see  __Constract does not execute. Please note that when you clone an object, you use DeepCopy of that object and not the Shallow copy.";
    }

}
