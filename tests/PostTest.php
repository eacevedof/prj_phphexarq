<?php
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    /** @test */
    function it_gives_us_the_author_name()
    {
        $author = new Phphex\Domain\Entities\Author("email","1234","AUTOR_DE_PLATZI");
        $author->setName("Guido","Woda");
        $post = new Phphex\Domain\Entities\Post($author,"A title","A Post Body");
        
        $this->assertEquals("by Guido",$post->getAuthor());
    }//it_gives_us_the_author_name
 
}//PostTest