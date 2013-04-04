<?php
use Amaziing\Application;

require 'autoload.php';

$application = new Application(getenv('ENVIRONMENT'));
$application->run();