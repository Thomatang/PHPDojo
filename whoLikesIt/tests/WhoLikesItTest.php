<?php

use App\WhoLikesIt;

class WhoLikesItTest extends PHPUnit\Framework\TestCase {
    function testReturnEmptyInputEmptyArray() {
        $whoLikesIt = new WhoLikesIt();
        $this->assertEquals("", $whoLikesIt->likes([]));
    }

    function testInputOneNameReturnCorrectText(){
        $whoLikesIt = new WhoLikesIt();
        $this->assertEquals("Peter likes this.", $whoLikesIt->likes(['Peter']));
    }
}