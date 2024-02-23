<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Box;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
    /** @test */


    // assetTrue() , assetFalse()
    public function BoxContents()
    {
        $box = new Box(['toy' , 'ball']);
        $this->assertTrue($box->has('toy'));
        $this->assertTrue($box->has('ball'));
        $this->assertFalse($box->has('bike'));
    }

    // assetEquals , assetNull()
    public function testTakeOneFromTheBox()
    {
        $box = new Box(['torch']);
        $this->assertEquals('torch', $box->takeOne());

        // Null, now the box is empty
        $this->assertNull($box->takeOne());
    }

    // assetContains , assetCount() , assetEmpty()
    public function testStartsWithALetter()
    {
        $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);

        $results = $box->startsWith('t');

        $this->assertCount(3, $results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);

        // Empty array if passed even
        $this->assertEmpty($box->startsWith('s'));
    }

    
}
