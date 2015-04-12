<?php

namespace App;


use App\Auth;

class AuthController extends BaseController{


    public function __construct(){
        $this::init('auth');
        $this->auth = new Auth;
    }

    public function login()
    {
        return $this->m->render('login');
    }

    public function attempt($email,$password)
    {
       if ($this->auth->attempt($email,$password))
       {
           header('location: /home');
       }
        else
        {
            header('location: /login');
        }
    }


    public function logout()
    {
        return $this->auth->logout();
    }

    public function register()
    {
        return $this->m->render('register');
    }

    public function attemptRegister($array)
    {

        if($array['email'] === "" || $array['password'] === '' || $array['name'] === ""){
            return false;
        }
        else {
            if ($this->auth->register($array)) {
                header('location: /home');
            }
        }

    }


}