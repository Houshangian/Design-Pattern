<?php

class HTMLPage
{
    private $page = NULL;
    private $page_title = NULL;
    private $page_heading = NULL;
    private $page_text = NULL;

    function __construct()
    {
    }

    function showPage()
    {
        return $this->page;
    }

    function setTitle($title_in)
    {
        $this->page_title = $title_in;
    }

    function setHeading($heading_in)
    {
        $this->page_heading = $heading_in;
    }

    function setText($text_in)
    {
        $this->page_text .= $text_in;
    }

    function formatPage()
    {
        $this->page = '<html>';
        $this->page .= '<head><title>' . $this->page_title . '</title></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>' . $this->page_heading . '</h1>';
        $this->page .= $this->page_text;
        $this->page .= '</body>';
        $this->page .= '</html>';
    }
}