<?php

$config->database = array(
'driver'    => env('DB_TYPE'),
'host'      => env('DB_HOST'),
'database'  => env('DB_NAME'),
'username'  => env('DB_USER'),
'password'  => env('DB_PASS'),
'charset'   => 'utf8',
'collation' => 'utf8_unicode_ci',
'prefix'    => ''
);