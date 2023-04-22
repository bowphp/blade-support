<?php

use Bow\Testing\KernelTesting;
use Bow\View\View;

class BladeEngineTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        KernelTesting::$configurations = [
            \Bow\Blade\BladeEngineConfiguration::class
        ];
        KernelTesting::configure(__DIR__ . "/config")->boot();
    }

    public function test_start_the_blade_configuration()
    {
        $result = View::parse("app", ["name" => "bowphp"]);

        $this->assertTrue(true);
    }
}
