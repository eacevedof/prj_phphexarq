<?php
namespace Phphex\Domain\Entities;

class Author extends User
{
    public function __construct($email,$password,$key)
    {
        parent::__construct($email,$password);
        if($key!="AUTOR_DE_PLATZI")
            throw new \InvalidArgumentException("invalid key");
    }

    public function getFirstName(){return $this->firstName;}
    public function getLastName(){return $this->lastName;}
}//Author