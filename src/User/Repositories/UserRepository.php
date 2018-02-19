<?php

namespace MyApp\User\Repositories;

use MyApp\User\Models\User;
use Sparks\Repositories\Repository;

class UserRepository extends Repository
{
    public function __construct()
    {
        $model = new User();
        parent::__construct($model);
    }
}