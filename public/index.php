<?php
require_once("../vendor/autoload.php");
//phpinfo();

use \Phphex\Domain\Entities\User;
use \Phphex\Domain\Entities\Author;

$o = new User("eac@ya.com","1234");
$o->setName("Hola","Grace");
var_dump($o->getFristName());

$oA = new Author;
$oA->setName("name auth","lastn auth");
var_dump($oA->getLastName());