<?php

namespace App;
use Parrot\Quote;



class HomeController extends BaseController{

    public function __construct(){
        $this::init();
    }

    public function welcome(){

        $data = Quote::squawk();
        $quote = $data['comment'];
        $person = $data['source'];
        return $this->m->render('welcome', array("quote" => $quote, "person" => $person));

    }

    public function home(){

        $quote = "Noddy says relax";

        return $this->m->render('home', array("quote" => $quote));

    }
}