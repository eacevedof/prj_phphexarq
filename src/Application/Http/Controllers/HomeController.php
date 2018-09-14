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
        echo $request->getRequestUri();
        return "Hello World Controller";
    }

}//HomeController