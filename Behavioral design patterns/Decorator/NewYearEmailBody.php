<?php

require_once 'EmailBodyDecorator.php';

class NewYearEmailBody extends EmailBodyDecorator
{

    private static $instance = null;

    static function getInstance(EmailBody $emailBody)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($emailBody);
        }
        return self::$instance;
    }

    public function loadBody()
    {
        echo 'This is the extra content for the New Year.<br />';
        $this->emailBody->loadBody();
    }
}