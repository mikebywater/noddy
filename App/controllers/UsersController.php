<?php

namespace App;


class UsersController extends BaseController{

    public function __construct(){
        $this::init('users');
    }

    public function index(){

        $users = User::all()->toArray();
        return $this->m->render('index', $users);

    }

    public function show($id)
    {
        $user = User::find($id)->toArray();
        return $this->m->render('show', $user);
    }

    public function create()
    {
        return $this->m->render('create');
    }


}