<?php

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

echo APP_NAME;
echo APP_VERSION;

const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

function run()
{
    echo DB_NAME, DB_HOST;
}

run();
