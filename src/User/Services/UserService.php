<?php

namespace MyApp\User\Services;

use MyApp\User\Repositories\UserRepository;

class UserService
{
    protected $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function all()
    {
        return $this->userRepository->all();
    }
}