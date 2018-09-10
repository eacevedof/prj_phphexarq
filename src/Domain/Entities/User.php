<?php
namespace Phphex\Domain\Entities;

class User 
{
    private $email;
    private $password;
    private $firstName;
    private $lastName;

    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }//_construct

    public function setName($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }//setName

}//User