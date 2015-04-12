<?php


require_once 'init.php';


$router->respond('GET', '/', function () {
    $c = new App\HomeController();
    return $c->welcome();
});

$router->respond('GET', '/home', function () {
    $c = new App\HomeController();
    return $c->home();
});

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

$router->respond('GET', '/login', function () {
    $c = new App\AuthController();
    return $c->login();
});

$router->respond('POST', '/login', function () {
    $c = new App\AuthController();
    return $c->attempt($_POST['email'], $_POST['password']);
});

$router->respond('GET', '/register', function () {
    $c = new App\AuthController();
    return $c->register();
});

$router->respond('POST', '/register', function () {
    $c = new App\AuthController();
    return $c->attemptRegister($_POST);
});

$router->respond('GET', '/logout', function () {
    $c = new App\AuthController();
    return $c->logout();
});


$router->dispatch();


