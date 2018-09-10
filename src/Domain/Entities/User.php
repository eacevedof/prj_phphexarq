<?php
namespace Phphex\Domain\Entities;

class User 
{
    protected $email;
    protected $password;
    protected $firstName;
    protected $lastName;

    public function __construct($email="",$password="")
    {
        $this->email = $email;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }//_construct

    public function setName($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }//setName

    public function getFristName(){return $this->firstName;}

}//User