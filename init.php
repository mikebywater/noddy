<?php
require 'vendor/autoload.php';

$router = new \Klein\Klein();

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

// Grab all configs

foreach (glob("config/*.php") as $filename)
{
    require $filename;
}

// Grab all routes

foreach (glob("routes/*.php") as $filename)
{
    require $filename;
}


$capsule->addConnection(array(
    'driver'    => DB_TYPE,
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASS,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));

$capsule->bootEloquent();




