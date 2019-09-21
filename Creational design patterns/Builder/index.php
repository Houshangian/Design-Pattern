<?php
require_once ("HTMLPageBuilder.php");
require_once ("HTMLPageDirector.php");

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();

$page = $pageDirector->getPage();

writeln($page->showPage());

writeln('');

writeln('END TESTING BUILDER PATTERN');

function writeln($line_in)
{
    echo $line_in . "<br/>";
}
