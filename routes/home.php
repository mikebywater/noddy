<?php

$router->respond('GET', '/', function () {
    return (new \MyApp\User\Http\HomeController())->welcome();
});