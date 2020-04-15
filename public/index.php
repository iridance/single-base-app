<?php

require __DIR__ . '/../vendor/autoload.php';

$config = ['APP_PATH' => 'app'];

\single\Core::getInstance($config)->run();