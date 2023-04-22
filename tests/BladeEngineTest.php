<?php

use Bow\Testing\KernelTesting;

class BladeEngineTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        KernelTesting::$configurations = [
            \Bow\Blade\BladeEngineConfiguration::class
        ];
        KernelTesting::configure(__DIR__)->boot();
    }

    public function test_start_the_blade_configuration()
    {
        $this->assertTrue(true);
    }
}
