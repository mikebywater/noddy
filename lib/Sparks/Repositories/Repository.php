<?php
namespace Sparks\Repositories;

use Sparks\Models\ModelInterface;

abstract class Repository
{
    protected $model;

    public function __construct(ModelInterface $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model::all();
    }




}

