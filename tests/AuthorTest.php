<?php
use PHPUnit\Framework\TestCase;
use Phphex\Domain\Entities\Author;

class AuthorTest extends TestCase
{
    /** @test */
    function it_should_construct()
    {
        $author = new Author("fake@email.dev","Platzi","AUTOR_DE_PLATZI");
        $this->assertInstanceOf(Author::class,$author);
    }//it_should_be_able_to_construct

    /** @test */
    function it_should_fail_no_key_is_given()
    {
        //espero que esto falle con una excepcion
        $this->expectException (\InvalidArgumentException::class);
        $author = new Author("fake@email.dev","1234","GUIDO");
        $this->assertInstanceOf(Author::class,$author);
    }//it_should_be_able_to_construct

}//AuthorTest