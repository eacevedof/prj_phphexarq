<?php
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /** @test */
    function email_is_valid()
    {
        $email = new  Phphex\Domain\Values\Email("fake.email@example.dev");
        $this->assertInstanceOf(Phphex\Domain\Values\Email::class,$email);
    }//email_is_valid


    function test_email_is_invalid()
    {
        $this->expectException(
            \InvalidArgumentException::class
        );
        $email = new  Phphex\Domain\Values\Email("fake.example.dev");
    }//test_email_is_invalid

}//EmailTest