<?php

require __DIR__ . '/../vendor/autoload.php';

$config = [
    'APP_PATH' => __DIR__ . '/../app',
    'PATH_MOD' => 'PATH_INFO',
];

\Single\Core::getInstance($config)->run();