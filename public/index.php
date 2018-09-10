<?php
require_once("../vendor/autoload.php");
//phpinfo();

use \Phphex\Domain\Entities\User;

$o = new User("eac@ya.com","1234");
$o->setName("Hola","Grace");
var_dump($o->getFristName());