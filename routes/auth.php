<?php
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
