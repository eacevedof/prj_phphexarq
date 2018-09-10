<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /** @test */
    function it_should_be_able_to_construct()
    {
        $user = new \Phphex\Domain\Entities\User("fake@email.dev","Platzi");
        $this->assertInstanceOf(\Phphex\Domain\Entities\User::class,$user);
    }//it_should_be_able_to_construct

    /** @test */
    function it_should_have_a_first_name()
    {
        $user = new \Phphex\Domain\Entities\User("eamil@example.com","1234");
        $user->setName("guido","Woda");
        $name = $user->getFristName();
        $this->assertEquals("guido",$name);
    }    
}//UserTest