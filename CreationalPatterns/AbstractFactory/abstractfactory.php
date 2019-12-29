<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('Page.php');
require_once('JavaneseTemplateFactory.php');

$page = new Page();

echo $page->render(new JavaneseTemplateFactory);