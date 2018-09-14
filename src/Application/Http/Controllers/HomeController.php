<?php
namespace Phphex\Application\Http\Controllers;

class HomeController
{
    public function __construct()
    {
        ;
    }

    public function index($request)
    {
        var_dump($request);
        return "Hello World Controller";
    }

}//HomeController