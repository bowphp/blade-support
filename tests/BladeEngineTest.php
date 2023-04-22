<?php

use Bow\Testing\KernelTesting;
use Bow\View\View;

class BladeEngineTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        KernelTesting::$configurations = [
            \Bow\Blade\BladeEngineConfiguration::class,
            \Bow\View\ViewConfiguration::class,
        ];
        KernelTesting::configure(__DIR__ . "/config")->boot();
    }

    public function test_start_the_blade_configuration()
    {
        $result = View::parse("app", ["name" => "bowphp"])->getContent();
        $this->assertEquals($result, "bowphp");
    }

    public function test_the_complex_blade()
    {
        $result = View::parse("complex", ["name" => "tintin"])->getContent();
        $this->assertEquals(trim($result), "Yoo, Bow Tintin");

        $result = View::parse("complex", ["name" => "blade"])->getContent();
        $this->assertEquals(trim($result), "Yoo, Blade");
    }
}
