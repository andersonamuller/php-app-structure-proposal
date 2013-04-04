<?php
use Acme\Application;

require 'autoload.php';

$application = new Application(getenv('ENVIRONMENT'));
$application->run();