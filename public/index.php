<?php
require_once("../vendor/autoload.php");
//phpinfo();
use Phphex\Application\Http\Controllers\HomeController;
$controller = new HomeController();
echo $controller->index();
