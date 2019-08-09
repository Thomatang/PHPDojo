<?php

use App\WhoLikesIt;

class WhoLikesItTest extends PHPUnit\Framework\TestCase {
    function testReturnEmptyString() {
        $whoLikesIt = new WhoLikesIt();

        $this->assertEquals("", $whoLikesIt->likes(""));
    }
}