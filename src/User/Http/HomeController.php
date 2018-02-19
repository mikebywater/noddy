<?php

namespace MyApp\User\Http;
use Sparks\Http\Controller;

class HomeController extends Controller
{
    public function welcome()
    {
        return $this->view("welcome");
    }

    public function home()
    {
        return $this->view("home");
    }
}