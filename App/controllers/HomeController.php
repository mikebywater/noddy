<?php

namespace App;
use Parrot\Quote;



class HomeController extends BaseController{


    public function __construct(){
        $this::init();
        $this->auth = new Auth();

    }

    public function welcome(){

        $data = Quote::squawk();
        $quote = $data['comment'];
        $person = $data['source'];
        return $this->m->render('welcome', array("quote" => $quote, "person" => $person));

    }

    public function home(){
      $this->auth->authorize();
      $user = $this->auth->user()->toArray();
      return $this->m->render('home', array("user" => $user));

    }
}