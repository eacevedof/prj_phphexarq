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

}//UserTest