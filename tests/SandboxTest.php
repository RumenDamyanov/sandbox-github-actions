<?php namespace Darumen\Sandbox\Test;

use PHPUnit\Framework\TestCase;
use Darumen\Sandbox\Sandbox;

class SandboxTest extends TestCase
{
    protected $string = "TestString123";

    public function testMethods()
    {
        $sandbox = new Sandbox();

        $this->assertSame($this->string, $sandbox->returnOriginalString($this->string));
        $this->assertSame(mb_strtoupper($this->string), $sandbox->returnUpperString($this->string));
        $this->assertSame(mb_strtolower($this->string), $sandbox->returnLowerString($this->string));
    }
}
