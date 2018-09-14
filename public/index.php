<?php
require_once("../vendor/autoload.php");
//phpinfo();
use Illuminate\Http\Request;
use Phphex\Application\Http\Controllers\HomeController;

$request = Request::capture();
$controller = new HomeController();
echo $controller->index($request);
