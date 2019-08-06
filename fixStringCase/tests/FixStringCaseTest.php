<?php

use App\FixStringCase;

class FixStringCaseTest extends PHPUnit\Framework\TestCase{
    public function testSampleTests() {
        $fixStringCase = new FixStringCase();

        $this->assertEquals("code", $fixStringCase->solve("code"));
        $this->assertEquals("CODE", $fixStringCase->solve("CODE"));
        //$this->assertEquals("CODE", $fixStringCase->solve("CODe"));
        //$this->assertEquals("code", $fixStringCase->solve("COde"));
        //$this->assertEquals("code", $fixStringCase>solve("Code"));
    }
}