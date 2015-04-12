<?php
$router->respond('GET', '/users', function () {
    $c = new App\UsersController();
    return $c->index();
});

$router->respond('GET', '/users/[i:id]', function ($request) {
    $c = new App\UsersController();
    return $c->show($request->id);
});

$router->respond('GET', '/users/create', function () {
    $c = new App\UsersController();
    return $c->create();
});