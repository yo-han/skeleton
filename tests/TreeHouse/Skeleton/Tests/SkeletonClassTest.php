<?php

namespace TreeHouse\Skeleton\Tests;

use TreeHouse\Skeleton\SkeletonClass;

class SkeletonClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $skeleton = new SkeletonClass();

        $this->assertInstanceOf(SkeletonClass::class, $skeleton);
    }
}
