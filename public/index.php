<?php

require __DIR__ . '/../vendor/autoload.php';

$config = [
    'APP_PATH' => __DIR__ . '/../app',
    'PATH_MOD' => 'REWRITE',
];

\single\Core::getInstance($config)->run();