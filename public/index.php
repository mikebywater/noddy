<?php
require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Klein\Klein;
use duncan3dc\Laravel\BladeInstance;
use Symfony\Component\Debug\Debug;

Debug::enable();

$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();

$router = new Klein();

$capsule = new Capsule;

// Grab all configs

$config = new stdClass();

foreach (glob("../config/*.php") as $filename)
{
    require $filename;
}

// Grab all routes
foreach (glob("../routes/*.php") as $filename)
{
    require $filename;
}

$capsule->addConnection($config->database);

$capsule->bootEloquent();
$router->dispatch();

