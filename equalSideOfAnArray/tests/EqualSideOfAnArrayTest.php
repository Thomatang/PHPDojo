<?php

use App\EqualSideOfAnArray;

class EqualSideOfAnArrayTest extends PHPUnit\Framework\TestCase
{

    function testInput121Array_OutputOne()
    {
        $equalSideOfAnArray = new EqualSideOfAnArray();

        $this->assertEquals(1, $equalSideOfAnArray->find_even_index([1,2,1]));
    }

    function testInputArray_Output()
    {
        $equalSideOfAnArray = new EqualSideOfAnArray();

        $this->assertEquals(1, $equalSideOfAnArray->find_even_index([1,100,50,-51,1,1]));
        $this->assertEquals(3,$equalSideOfAnArray->find_even_index([20,10,30,10,10,15,35]));
        $this->assertEquals(0,$equalSideOfAnArray->find_even_index([20,10,-80,10,10,15,35]));
        $this->assertEquals(6,$equalSideOfAnArray->find_even_index([10,-80,10,10,15,35,20]));
    }
}
