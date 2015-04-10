<?php

namespace App;


use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;

class BaseController {

    var $m;

    public function __construct(){


        $this->m = new Mustache_Engine(array(
            'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/../../views'),
        ));
        


    }

}