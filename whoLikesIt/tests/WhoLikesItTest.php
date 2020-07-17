<?php

use App\WhoLikesIt;

class WhoLikesItTest extends PHPUnit\Framework\TestCase {
    function testReturnEmptyInputEmptyArray() {
        $whoLikesIt = new WhoLikesIt();
        $this->assertEquals("no one likes this", $whoLikesIt->likes([]));
    }

    function testInputOneNameReturnCorrectText(){
        $whoLikesIt = new WhoLikesIt();
        $this->assertEquals("Peter likes this", $whoLikesIt->likes(['Peter']));
    }

    function testInputTwoNamesReturnCorrectText(){
        $whoLikesIt = new WhoLikesIt();
        $this->assertEquals("Peter and John like this", $whoLikesIt->likes(['Peter', 'John']));
    }

    function testInputThreeNamesReturnCorrectText(){
        $whoLikesIt = new WhoLikesIt();
        $this->assertEquals("Peter, John and Benedict like this", $whoLikesIt->likes(['Peter', 'John', 'Benedict']));
    }

    function testInputFourNamesReturnCorrectText(){
        $whoLikesIt = new WhoLikesIt();
        $this->assertEquals("Peter, John and 2 others like this", $whoLikesIt->likes(['Peter', 'John', 'Benedict', 'Arnold']));
    }
}