<?php
require_once 'database.php';
require_once 'vendor/autoload.php'; // Autoload files using Composer autoload
require_once 'App/controllers/UsersController.php';
require_once 'App/controllers/HomeController.php';

$klein = new \Klein\Klein();


$klein->respond('GET', '/', function () {
    $c = new App\HomeController();
    return $c->welcome();
});

$klein->respond('GET', '/home', function () {
    $c = new App\HomeController();
    return $c->home();
});

$klein->respond('GET', '/users', function () {
    $c = new App\UsersController();
    return $c->index();
});

$klein->respond('GET', '/users/[i:id]', function ($request) {
    $c = new App\UsersController('users');
    return $c->show($request->id);
});

$klein->respond('GET', '/users/create', function () {
    $c = new App\UsersController('users');
    return $c->create();
});



$klein->dispatch();
