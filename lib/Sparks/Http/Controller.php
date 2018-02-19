<?php
namespace Sparks\Http;
use duncan3dc\Laravel\BladeInstance;

abstract class Controller
{
    public function __construct()
    {

    }

    public function view($path, $data=[])
    {

        $blade = new BladeInstance($_SERVER['DOCUMENT_ROOT'] . "/../resources/templates", $_SERVER['DOCUMENT_ROOT'] . "/cache/views");
        echo $blade->render($path , $data);
    }


}