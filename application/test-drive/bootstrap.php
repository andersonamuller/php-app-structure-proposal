<?php
use TestDrive\Application;

require_once __DIR__ . '/../autoload.php';

$application = new Application();
$application->configure(getenv('ENVIRONMENT'), __DIR__ . '/config/application.php');
$application->run();