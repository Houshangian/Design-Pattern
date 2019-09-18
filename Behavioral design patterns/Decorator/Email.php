<?php
require_once "EmailBody.php";

class Email implements EmailBody
{
    private static $instance = null;

    private function __construct()
    {

    }

    static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function loadBody()
    {
        echo "This is the main Email body.<br />";
    }
}