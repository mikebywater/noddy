<?php
$router->respond('GET', '/', function () {
    $c = new App\HomeController();
    return $c->welcome();
});

$router->respond('GET', '/home', function () {
    $c = new App\HomeController();
    return $c->home();
});
