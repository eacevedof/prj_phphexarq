<?php
namespace Phphex\Application\Http\Controllers;

use Phphex\Application\Http\Views\View;

class HomeController
{
    public function __construct()
    {
        ;
    }

    public function index($request)
    {
        $view = new View("home",["message" => "Hello from a view"]);
        $response = $view->render();
        $response->send();
    }

}//HomeController