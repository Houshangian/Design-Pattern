<?php
require_once 'Book.php';

class PaperBack extends Book
{
    public function generateName($name)
    {
        echo "The Book Name Is \"$name\" & Should Be Printed.";
    }
}