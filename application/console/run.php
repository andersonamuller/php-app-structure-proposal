<?php
use Yii\Application\Console;

require_once __DIR__ . '/../autoload.php';

$console = new Console();
$console->configure(getenv('ENVIRONMENT'), __DIR__ . '/config/console.php');
$console->run();