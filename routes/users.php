<?php

$router->respond('GET', '/users', function () {
    return (new \MyApp\User\Http\UserController())->index();
});

$router->respond('GET', '/users/[i:id]', function ($request) {
    return (new \MyApp\User\Http\UserController())->show($request->id);
});
