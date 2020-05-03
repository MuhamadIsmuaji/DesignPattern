<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'DeveloperManager.php';
require_once 'SalesManager.php';

// developer interview
$developerInterview = new DeveloperManager();
$developerInterview->takeInterview();

echo '<br></br>';

// sales interview
$salesInterview = new SalesManager();
$salesInterview->takeInterview();