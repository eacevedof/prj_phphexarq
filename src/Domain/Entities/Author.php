<?php
namespace Phphex\Domain\Entities;

class Author extends User
{
    public function getLastName()
    {
        return $this->lastName;
    }
}//Author