<?php

namespace App;


class UsersController extends BaseController{

    public function __construct(){
        $this::init('users');
        $this->auth = new Auth();
    }

    public function index(){
        $this->auth->authorize();
        $users = User::all()->toArray();
        return $this->m->render('index', $users);

    }

    public function show($id)
    {
        $this->auth->authorize();
        $user = User::find($id)->toArray();
        return $this->m->render('show', $user);
    }

    public function create()
    {
        return $this->m->render('create');
    }

    public function store($array)
    {
        $user = User::create($array);
        $user->save();
    }


}