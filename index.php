<?php
require_once 'database.php';
require_once 'vendor/autoload.php'; // Autoload files using Composer autoload
require_once 'App/controllers/UsersController.php';






$klein = new \Klein\Klein();

$klein->respond('GET', '/users', function () {
    $c = new App\UsersController();
    return $c->index();
});

$klein->respond('GET', '/users/[i:id]', function ($request) {
    $c = new App\UsersController();
    return $c->show($request->id);
});



$klein->dispatch();
