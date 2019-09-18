<?php
require_once "EmailBody.php";

abstract class EmailBodyDecorator implements EmailBody
{
    protected $emailBody;

    public function __construct(EmailBody $emailBody)
    {
        $this->emailBody = $emailBody;
    }

    abstract public function loadBody();

}