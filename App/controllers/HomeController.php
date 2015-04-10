<?php

namespace App;
require_once 'App/models/User.php';
require_once 'App/controllers/BaseController.php';

class HomeController extends BaseController{

    public function __construct(){
        $this::init();
    }

    public function index(){

        $quote = "Noddy says relax";

        return $this->m->render('index', array("quote" => $quote));

    }


}